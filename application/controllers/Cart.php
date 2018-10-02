<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->model('categories_models');
        $this->load->model('product_models');
        $this->load->model('order_models');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('cart');
        $this->load->helper('form');
        $this->act = isset($_GET['act'])?$_GET['act']:"";
        $this->id=isset($_GET['id'])?$_GET['id']:"";
    }

public function index(){
    switch($this->act){
        case "add":
            $this->add();
            break;
        case "home":
            $this->home();
            break;
        case "clear":
            $this->clear($this->id=Null);
            break;
        case "upd":
            $this->upd();
        break;
            case "checkout":
            $this->checkout();
            break;
    }
}
    public function home()
    {
        $data['title']="Shopping Cart";
        // $data['products']=$this->cart->contents();
        if(isset($_SESSION['cart'])){
            $data['products']=$_SESSION['cart'];
            $this->load->view('header',$data);
            $this->load->view('cart',$data);
            $this->load->view('footer');
        }else{
            $this->load->view('header',$data);
            $this->load->view('footer');
        }
        
    }
    public function add()
    {
        $cart_item=$this->input->post();
        if(isset($cart_item))
        {
            $product_id = $this->input->post('product_id');
            if(isset($_SESSION['cart']))
            {
                if(array_key_exists($product_id,$_SESSION['cart']))
                {
                    $_SESSION['cart'][$product_id]['quantity']=$_SESSION['cart'][$product_id]['quantity']+$this->input->post('quantity');
                }
                else
                {
                    $_SESSION['cart'][$product_id]=$cart_item;
                }
            }
            else
            {
                $_SESSION['cart'][$product_id]=$cart_item;
            }
        }
        $this->session->set_flashdata('itemadded', 'item has been added');
        redirect('product');
    }
    public function clear($id=null)
    {
        $products=$_SESSION['cart'];
        if($id===NULL)
        {
            unset($_SESSION['cart']);
            $this->session->set_flashdata('clearcart', 'cart has been cleared');
            redirect('product');
        }
        if(array_key_exists($id,$_SESSION['cart']))
            {
                unset($_SESSION['cart'][$id]);
                if($_SESSION['cart']==NULL)
                {
                    redirect('product');
                }else{
                    $this->home();
                }
            }
    }
    public function upd()
    {
        if($this->input->post()){
        $product_id = $this->input->post('product_id');
        $_SESSION['cart'][$product_id]['quantity']=$this->input->post('quantity');
        }

        $this->home();
    }

    public function checkout(){
        $data['title']='Check Out';
        $data['cart_items']=$_SESSION['cart'];
        if(empty($this->input->post()))
        {
            $this->load->view('header',$data);
            $this->load->view('checkout',$data);
            $this->load->view('footer',$data);
        } else {
            $order_id=$this->order_models->insert_order();
            $this->order_models->insert_order_detail($order_id);
            unset($_SESSION['cart']);
            redirect('success');
        }
    }
}
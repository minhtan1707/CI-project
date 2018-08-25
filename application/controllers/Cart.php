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
    }
    public function index()
    {
        $data['title']="Shopping Cart";
        // $data['products']=$this->cart->contents();
        if(isset($_SESSION['cart'])){
            $data['products']=$_SESSION['cart'];
            $this->load->view('header',$data);
            $this->load->view('cart',$data);
        }else{
            $this->load->view('header',$data);
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
        redirect('product');
    }
    public function clear($id=FALSE)
    {
        $products=$_SESSION['cart'];
        if($id===FALSE)
        {
            session_destroy();
            redirect('product');
        }

        if(array_key_exists($id,$_SESSION['cart']))
            {
                unset($_SESSION['cart'][$id]);
                redirect('cart');
            }
    }
    public function update()
    {
        $product_id = $this->input->post('product_id');
        $_SESSION['cart'][$product_id]['quantity']=$this->input->post('quantity');
        redirect('cart');
    }
    public function checkout(){
        $data['title']='Check Out';
        $data['cart_items']=$_SESSION['cart'];
        if(empty($this->input->post()))
        {
            $this->load->view('header',$data);
            $this->load->view('checkout',$data);
        } else {
            $order_id=$this->order_models->insert_order();
            $this->order_models->insert_order_detail($order_id);
            session_destroy();
            redirect('success');
        }
    }
}
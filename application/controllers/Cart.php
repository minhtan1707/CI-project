<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
        $this->load->model('categories_models');
        $this->load->model('product_models');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('cart');
    }
    public function index()
    {
        $data['title']="Shopping Cart";
        $data['products']=$this->cart->contents();
        $this->load->view('cart',$data);
    }
    public function add()
    {
        $data =array(
                'id' => $this->input->post('product_id'),
                'name' => $this->input->post('product_name'),
                'price' => $this->input->post('price'),
                'qty'   => $this->input->post('quantity'),
                'options' => array('description' =>  $this->input->post('description'),'image_file' => $this->input->post('image_file')));
        $products=$this->cart->contents();
        if(isset($_POST['submit']))
        {
            if($this->cart->total_items()>0)
            {
                foreach($products as $product)
                {
                    if($product['id']==$this->input->post('product_id'))
                    {
                        $update=array(
                            'rowid' => $product['rowid'],
                            'qty' => $product['qty']+$this->input->post('quantity')
                        );
                        $this->cart->update($update);
                    }
                    else
                    {
                        $this->cart->insert($data);
                    }
                }
            }
            else
            {
                $this->cart->insert($data);
            }
        }
        redirect('product');
    }
    public function clear($id=FALSE)
    {
        $products=$this->cart->contents();
        if($id===FALSE)
        {
            $this->cart->destroy();
            redirect('product');
        }

        foreach($products as $product)
        {
            if($id==$product['id'])
            {
                $update=array(
                    'rowid' => $product['rowid'],
                    'qty' => 0
                );
                $this->cart->update($update);
                redirect('cart');
            }
        }
    }
    public function update()
    {
        $update=array(
            'rowid' => $this->input->post('rowid'),
            'qty' => $this->input->post('quantity')
        );
        $this->cart->update($update);
        redirect('cart');
    }
}
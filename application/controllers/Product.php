<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('product_models');
        $this->load->helper('url_helper');
		// $this->act = isset($_GET['act'])?$_GET['act']:'';
		// var_dump($_GET['act']);
	}
	
	public function index()
	{
		$data['title']="Product List";
        $data['products']=$this->product_models->get_product();
        $this->load->view('header',$data);
        $this->load->view('productlist',$data);
	}
	public function item($id=NULL)
	{
		
		$data['product']=$this->product_models->get_product($id);
		if (empty($data['product']))
        {
                show_404();
		}
		$this->load->view('header',$data);
		$this->load->view('productitem',$data);
	}

}
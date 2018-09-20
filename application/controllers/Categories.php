<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model('categories_models');
        $this->load->model('product_models');
        $this->load->helper('url_helper');
        $this->act = isset($_GET['act'])?$_GET['act']:"";
        $this->cat=isset($_GET['cat'])?$_GET['cat']:"";
}

    public function index(){
    switch($this->act){
        case "cat_list":
            $this->cat_list();
            break;
        case "product_list":
            $this->product_list();
            break;
        default: 
        $this->cat_list();
    }
    }
    public function cat_list(){
        $data['title']='Categories';
        $data['categories']=$this->categories_models->get();
        $this->load->view('header',$data);
        $this->load->view('categories',$data);
        $this->load->view('footer');
    }

    public function product_list(){
        $data['category']=$this->categories_models->get_by(array('category_name'=>$this->cat),1);
        $data['title']=$data['category']->category_name;
        $data['products']=$this->product_models->getProductsWhere(array('category_id'=>$data['category']->category_id));

        $this->load->view('header',$data);
        $this->load->view('productlist',$data);
        $this->load->view('footer');
    }
}
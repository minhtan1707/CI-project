<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model('categories_models');
        $this->load->model('product_models');
        $this->load->helper('url_helper');
    }
    public function index(){
        $data['title']='Categories';
        $data['categories']=$this->categories_models->get();
        $this->load->view('header',$data);
        $this->load->view('categories',$data);
    }

    public function product_list($id){
        $data['title']=$this->categories_models->get($id)['category_name'];
        $data['products']=$this->product_models->get_by_categories($id);
        $this->load->view('header',$data);
        $this->load->view('productlist',$data);
    }
}
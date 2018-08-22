<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model('categories_models');
        $this->load->model('product_models');
        $this->load->helper('url_helper');
		// $this->act = isset($_GET['act'])?$_GET['act']:'';
        // var_dump($_GET['act']);
        $this->load->library('auth');
    }
    public function index(){
        $data['title']='Categories';
        $data['categories']=$this->categories_models->get();
        $this->load->view('backend/template/header',$data);
        $this->load->view('backend/categories',$data);
    }
    public function add(){
        if(empty($_POST['categories_name']))
        {
            $this->load->view('backend/template/header',$data);
            $this->load->view('backend/addcategories');
        } else {
            $this->categories_models->add();
            redirect('product');
        }
    }
    public function product_list($id){
        $data['title']=$this->categories_models->get($id)['category_name'];
        $data['products']=$this->product_models->get_by_categories($id);
        $this->load->view('backend/template/header',$data);
        $this->load->view('backend/productlist',$data);
    }
}
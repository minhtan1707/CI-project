<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model('product_models');
        $this->load->model('categories_models');
        $this->load->model('user_models');
        $this->load->helper('url_helper');
	}
    public function index(){
        $data['best_seller_products']=$this->product_models->getProductsWhere(array('best_seller'=>1),FALSE);
        $data['feature_products']=$this->product_models->getProductsWhere(array('feature'=>1),FALSE);
        $data['seasonal_products']=$this->product_models->getProductsWhere(array('seasonal'=>1),FALSE);
        $data['feature_categories']=$this->categories_models->getCategoryWhere(array('feature'=>1),FALSE);
        $this->load->view('header');
        $this->load->view('home',$data);
        $this->load->view('footer');
    }
}
?>
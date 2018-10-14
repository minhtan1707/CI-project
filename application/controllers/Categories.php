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
        $this->page = isset($_GET['page'])?$_GET['page']:1;
		$this->limit = isset($_GET['limit'])?$_GET['limit']:4;
		$this->order = isset($_GET['order'])?$_GET['order']:"";
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
		$data['itemadded']=$this->session->flashdata('itemadded');
		$data['clearcart']=$this->session->flashdata('clearcart');
		$data['limit']=$this->limit;
		$data['current_page']=$this->page;
		$data['previous_page']=$this->page - 1;
		$data['next_page']=$this->page + 1;
		$total= isset($data['product'])?count($data['products']):0;
        if($total/$data['limit']>1){
			$data['total_page']=floor($total%$data['limit']!=0?($total/$data['limit'])+1:$total/$data['limit']);
		}else{
			$data['total_page']=floor($total/$data['limit'])+1;
		}
		if($this->order==1)
		{
			$by="price";
			$order="ASC";
		}else if($this->order==2){
			$by="price";
			$order="DESC";
		}else{
				$by="product_name";
				$order="ASC";
		}

        

        $data["products"] = $this->product_models->getProductsWherePage(array('category_id'=>$data['category']->category_id),$data['limit'], ($this->page-1)*$data['limit'],$by,$order);

        $this->load->view('header',$data);
        $this->load->view('cat_prod_list',$data);
        $this->load->view('footer');
    }
}
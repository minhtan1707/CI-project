<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('product_models');
		$this->load->helper('url_helper');
		$this->load->helper('form');
		$this->load->library("pagination");
		$this->page = isset($_GET['page'])?$_GET['page']:1;
		$this->limit = isset($_GET['limit'])?$_GET['limit']:4;
		$this->order = isset($_GET['order'])?$_GET['order']:"";
	}
	
	public function index()
	{
		$data['title']="Product List";
		$data['products']=$this->product_models->get();
		$data['itemadded']=$this->session->flashdata('itemadded');
		$data['clearcart']=$this->session->flashdata('clearcart');
		$data['limit']=$this->limit;
		$data['current_page']=$this->page;
		$data['previous_page']=$this->page - 1;
		$data['next_page']=$this->page + 1;
		$total= count($data['products']);
		$data['total_page']=floor($total%$data['limit']!=0?($total/$data['limit'])+1:$total/$data['limit']);
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
		$data["products"] = $this->product_models->get_page($data['limit'], ($this->page-1)*$data['limit'],$by,$order);
  


        $this->load->view('header',$data);
		$this->load->view('productlist',$data);
		$this->load->view('footer',$data);
		
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
		$this->load->view('footer',$data);
	}

}
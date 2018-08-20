<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('product_models');
        $this->load->helper('url_helper');
		// $this->act = isset($_GET['act'])?$_GET['act']:'';
		// var_dump($_GET['act']);
		$this->load->library('pagination');
		
		
		
		$this->load->library('auth');
	}
	
	public function index()
	{
		// $config['base_url'] = 'http://localhost:8012/CI-project/index.php/backend/product/page/';
		// $config['total_rows'] = 10;
		// $config['per_page'] = 4;
		// $this->pagination->create_links();
		// $this->pagination->initialize($config);
		$data['title']="Product List";

		$data['products']=$this->product_models->get_product();
		$this->load->view('backend/productlist',$data);
	}

	public function item($id=NULL)
	{
		
		$data['product']=$this->product_models->get_product($id);
		if (empty($data['product']))
        {
                show_404();
        }
		$this->load->view('backend/productitem',$data);
	}

	public function add(){
		$data['categories']=$this->categories_models->get();
		
		if(empty($_POST['product_name']))
		{
			$this->load->view('backend/addproduct',$data);
		}
		else
		{
			$config['upload_path']          = '././assets/images/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1024;
			$config['max_width']            = 1024;
			$config['max_height']           = 1024;
			$this->load->library('upload', $config);
			$field_name='product_image';
			if ( ! $this->upload->do_upload($field_name))
			{
				$error = array('error' => $this->upload->display_errors());
				$product_image='noimage.jpg';
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$product_image= $_FILES['product_image']['name'];
			}
			$this->product_models->add($product_image);
			redirect('product');
		}
	}

	public function delete($id){
		$this->product_models->delete($id);
		redirect('product');
	}

	public function edit($id){
		$data['product']=$this->product_models->get_product($id);
		$data['categories']=$this->categories_models->get();
		if (empty($data['product']))
        {
                show_404();
        }
		$this->load->view('backend/edit',$data);
	}

	public function update(){
		$this->product_models->update();
		redirect('product');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('product_models');
        $this->load->helper('url_helper');
		$this->load->library('auth');
		$this->load->library('pagination');


	}
	
	public function index()
	{
		$data['title']="Product List";
		$data['products']=$this->product_models->get_product();
		
$config['base_url'] = 'http://example.com/index.php/test/page/';
$config['total_rows'] = 200;
$config['per_page'] = 20;

$this->pagination->initialize($config);

echo $this->pagination->create_links();

		$this->load->view('backend/template/header',$data);
		$this->load->view('backend/productlist',$data);
	}

	public function item($id=NULL)
	{
		
		$data['product']=$this->product_models->get_product($id);
		if (empty($data['product']))
        {
                show_404();
		}
		$this->load->view('backend/template/header',$data);
		$this->load->view('backend/productitem',$data);
	}

	public function add(){
		$data['categories']=$this->categories_models->get();
		
		if(empty($_POST['product_name']))
		{
			$this->load->view('backend/template/header',$data);
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
			redirect('admin/product');
		}
	}

	public function delete($id){
		$this->product_models->delete($id);
		redirect('admin/product');
	}

	public function edit($id){
		$data['product']=$this->product_models->get_product($id);
		$data['categories']=$this->categories_models->get();
		if (empty($data['product']))
        {
                show_404();
		}
		$this->load->view('backend/template/header',$data);
		$this->load->view('backend/edit',$data);
	}

	public function update(){
		$this->product_models->update();
		redirect('admin/product');
	}
}
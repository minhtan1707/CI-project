<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model('categories_models');
        $this->load->model('product_models');
        $this->load->helper('url_helper');
        //Check if login as admin
        $this->load->library('auth');
    }
    public function index(){
        $data['title']='Categories';
        $data['categories']=$this->categories_models->get();
        $this->load->view('backend/template/header',$data);
        $this->load->view('backend/categories',$data);
    }
    public function add(){
        if(empty($this->input->post('category_name')))
        {
			$this->load->view('backend/template/header');
			$this->load->view('backend/addcategories');
		}
		else
		{
			$config['upload_path']          = '././assets/images/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1024;
			$config['max_width']            = 1024;
			$config['max_height']           = 1024;
			$this->load->library('upload', $config);
			$field_name='category_image';
			if ( ! $this->upload->do_upload($field_name))
			{
				$error = array('error' => $this->upload->display_errors());
				$category_image='noimage.jpg';
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());
				$category_image= $_FILES['category_image']['name'];
			}
			$this->categories_models->add($category_image);
			redirect('admin/product');
		}
        // {
        //     $this->load->view('backend/template/header',$data);
        //     $this->load->view('backend/addcategories');
        // } else {
        //     $this->categories_models->add();
        //     redirect('product');
        // }
    }
    public function product_list($id){
        $data['title']=$this->categories_models->get_category($id)['category_name'];
        $data['products']=$this->product_models->get_by(array('category_id'=>$id));
        $this->load->view('backend/template/header',$data);
        $this->load->view('backend/productlist',$data);
    }
}
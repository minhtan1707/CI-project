<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->model('categories_models');
        $this->load->model('product_models');
        $this->load->model('order_models');
        $this->load->helper('url_helper');
        //Check if login as admin
        $this->load->library('auth');
    }
    public function index(){
        $status=array();
        if($this->input->post())
        {
            if($this->input->post('status')=='on')
            {
                $status['status']=true;
            }else
            {
                $status['status']=false;
            }
            $this->order_models->save($status,$this->input->post('id'));
        }
        $data['title']="Order List";
		$data['orders']=$this->order_models->get_order();
		$this->load->view('backend/template/header',$data);
        $this->load->view('backend/order');
    }
	public function detail($id=NULL)
	{
		$data['order']=$this->order_models-> get_order($id);
        $data['orders_detail']=$this->order_models-> get_order_detail($id);
		if (empty($data['order']))
        {
                show_404();
		}
		$this->load->view('backend/template/header',$data);
		$this->load->view('backend/orderdetail',$data);
	}
}
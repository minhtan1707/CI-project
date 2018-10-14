<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_models');
        $this->load->helper('url_helper');
        $this->load->library('auth');
        $this->load->library('session');
        $this->act = isset($_GET['act'])?$_GET['act']:"";
        $this->id=isset($_GET['id'])?$_GET['id']:"";
	}
    public function index(){
		switch($this->act){
            case "upd":
            if($this->input->post())
            {
                $this->save();
            }
            $this->edit();
            break;

            default: $this->home();
            break;
		}
	}
	public function home()
	{
        $data['message']=$this->session->flashdata('edit_err');
        $data['title']="Users List";
		$data['users']=$this->user_models->get();
		$this->load->view('backend/template/header',$data);
		$this->load->view('backend/users',$data);
	}
    public function edit()
    {
        $data['user']=$this->user_models->get($this->id);
        $data['message']=$this->session->flashdata('edit_err');
        $this->load->view('backend/template/header');
        $this->load->view('backend/user_edit',$data);
    }
	public function save(){
		$data=$this->input->post();
		if($this->user_models->save($data,$this->id)){
			$this->session->set_flashdata('edit_err', 'Edit user info sucessfully');
			return redirect(site_url('admin/user'));
		} else{
			$this->session->set_flashdata('edit_err', 'Edit user info unsucessfully');
			return redirect(site_url('admin/users?act=upd'));
		}
	}
}
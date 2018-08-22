<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');
	}

    public function index(){
        if(empty($this->session->userdata('username')))
        {
            $this->load->view('backend/login');
        }
        else{
            redirect('admin/product');
            }
    }

    public function check(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $logged_in= $this->user_models->check($username,$password);
        if($logged_in['logged_in']==TRUE)
        {   
            // print_r($logged_in['user']['admin']);
            $this->session->set_userdata($logged_in['user']);
            redirect('admin/product');
        }
        else
        {
            redirect('login');
        }
    }
}
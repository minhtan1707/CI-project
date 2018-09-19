<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
		parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('session');
	}

    public function index(){
        if(isset($_SESSION['user']))
        {
            if($_SESSION['user']['username']!='admin')
            {
                $this->load->view('backend/login');
            }
            else
            {
                if($_SESSION['user']['username']=='admin')
                {
                    redirect(site_url('admin/product'));
                }else{
                    redirect(site_url('/'));
                }
            }
        } else{
            $this->load->view('backend/login');
        }

    }

    public function check(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $logged_in= $this->user_models->check($username,$password);
        if($logged_in['logged_in']==TRUE)
        {   
            $_SESSION['user']=$logged_in['user'];
            redirect('admin/product');
        }
        else
        {
            redirect('login');
        }
    }
}
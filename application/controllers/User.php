<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('user_models');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->act = isset($_GET['act'])?$_GET['act']:"";
	}
    public function index(){
		switch($this->act){
			case "login":
				$this->login();
				break;
			case "home":
				$this->home();
                break;
            case "logout":
				$this->logout();
				break;
		}
	}
	public function home()
	{
        if(isset($_SESSION['user']['username']))
        {
            $data=$this->user_models->check($_SESSION['user']['username'],$_SESSION['user']['password']);
            // $this->load->view('userdetail',$data);
            echo $data['user']['username'];
            echo $data['user']['user_id'];
            redirect(site_url('/'));
        }
        else
        {
            $this->login();
        }
	}
	public function login()
	{
        if(!isset($_SESSION['user']))
        {
        if($this->input->post())
        {
            $data=$this->user_models->check($this->input->post('username'),$this->input->post('password'));
            $_SESSION['user']=$data['user'];
            $this->home();
        }
        else
        {
            $this->load->view('login');
        }
        }else{
            redirect(site_url('user?act=home'));
        }
    }
    public function logout()
    {
        if(isset($_SESSION['user']))
        {
            $this->session->unset_userdata('user');
        }
        redirect(site_url('/'));
    }
}
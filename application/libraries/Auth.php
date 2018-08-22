<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
        public function __construct()
        {
            $CI =& get_instance();
            $CI->load->library('session');
            if(empty($CI->session->userdata('username'))){
                redirect('admin');
            }
        }

        public function check_permission(){
            if($this->session->userdata('admin')==0)
            {
                $this->load->view('not_authorized');
            }else{
                $this->load->view('template/admin_header');
            }
        }

    }
?>
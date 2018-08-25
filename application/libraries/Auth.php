<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
        public function __construct()
        {
            $CI =& get_instance();
            $CI->load->library('session');
            if(empty($CI->session->userdata('username')))
            {
                redirect('admin');
            }
        }
    }
?>
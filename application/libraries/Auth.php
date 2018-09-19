<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
        public function __construct()
        {
            
            $CI =& get_instance();
            $CI->load->helper('url_helper');
            $CI->load->library('session');
            if($_SESSION['user']['username']=='admin')
            {
                return TRUE;
            }
            else{
                redirect(site_url('/login'));
            }
        }
    }
?>
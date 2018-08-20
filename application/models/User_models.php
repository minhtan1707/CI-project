<?php
class User_models extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }
    public function check($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query=$this->db->get('users');
        if(count($query->result_array())==1){
            return array(
                'logged_in'=> TRUE,
                'user' => $query->row_array()
            );
        }else{
            return FALSE;
        }
    }
}
<?php
class User_models extends CI_Model {
    protected $_table_name = 'users';
    protected $_order_by = 'user_id';
    protected $_primary_filter = 'intval';
    protected $_order_by_type = 'desc';
    protected $_primary_key ='user_id';
protected $_timestamps = FALSE;
    public function __construct()
    {
            $this->load->database();
    }
    public function get($id = FALSE)
    {
        if ($id === FALSE)
        {
                $this->db->order_by('user_id', 'ASC');
                $query = $this->db->get('users');
                return $query->result_array();
        }

        $query = $this->db->get_where('users', array('user_id' => $id));
        return $query->row_array();
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
    public function getUserDetailWhere($username)
    {
        $this->db->where('username',$username);
        $query=$this->db->get('users');
        return $query->result_array();
    }
    public function save($data, $id = NULL) {
		// Set timestamps
		if ($this->_timestamps == TRUE) {
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
			$data['modified'] = $now;
		}
		// Insert
		if ($id === NULL) {
			!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
			if ($id) {
				return TRUE;
			}

		}
		// Update
		else {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			if ($this->db->update($this->_table_name)) {
				return TRUE;
			}

		}
		return FALSE;
    }
    public function signup($data)
    {

    }
}
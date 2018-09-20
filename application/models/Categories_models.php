<?php
class Categories_models extends CI_Model {
    protected $_table_name = 'categories';
    protected $_order_by = 'category_name';
    protected $_primary_filter = 'intval';
	protected $_order_by_type = 'desc';
	public $rules = array();
    protected $_timestamps = FALSE;
    protected $_primary_key='id';
    public function __construct()
    {
            $this->load->database();
    }
    public function get_category($id = FALSE)
        {
            if ($id === FALSE)
            {
                $this->db->order_by('category_name', 'ASC');
                $query= $this->db->get('categories');
                return $query->result_array();
            }

            $query = $this->db->get_where('categories', array('category_id' => $id));
            return $query->row_array();
        }

    public function add()
    {
        $data = array(
            'category_name' => $this->input->post('categories_name')
        );
        return $this->db->insert('categories',$data);
    }
    public function getCategoryWhere($where,$type=false){
		$get = $this->get_by($where,$type);
		if(empty($get))return false;
		return $get;
    }

    public function get($id = NULL, $single = FALSE) {
		if ($id != NULL) {
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		} elseif ($single == TRUE) {
			$method = 'row';
		} else {
			$method = 'result';
		}

		$this->db->order_by($this->_order_by,$this->_order_by_type);

		return $this->db->get($this->_table_name)->$method();
	}

	public function get_by($where, $single = FALSE) {
		$this->db->where($where);
		return $this->get(NULL, $single);
	}
}
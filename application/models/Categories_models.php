<?php
class Categories_models extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get($id = FALSE)
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
}
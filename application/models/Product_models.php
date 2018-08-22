<?php
class Product_models extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_product($id = FALSE)
        {
            if ($id === FALSE)
            {
                    $this->db->join('categories','categories.category_id=product.category_id');
                    $this->db->order_by('id', 'ASC');
                    $query = $this->db->get('product');
                    return $query->result_array();
            }

            $query = $this->db->get_where('product', array('id' => $id));
            return $query->row_array();
        }
        public function add($product_image)
        {
                $data = array(
                        'product_name' => $this->input->post('product_name'),
                        'price' => $this->input->post('price'),
                        'description' => $this->input->post('description'),
                        'category_id' => $this->input->post('category_id'),
                        'image_file' => $product_image
                    );
                return $this->db->insert('product', $data);
        }
        public function delete($id){
                $this->db->where('id',$id);
                $this->db->delete('product');
                return true;
        }

        public function update(){
                $data = array(
                        'product_name' => $this->input->post('product_name'),
                        'price' => $this->input->post('price'),
                        'image_file' => $this->input->post('image_file'),
                        'description' => $this->input->post('description'),
                        'category_id' => $this->input->post('category_id')
                    );
                    $this->db->where('id',$this->input->post('id'));
                    return $this->db->update('product', $data);
        }

        public function get_by_categories($id){
                $this->db->order_by("product.id", 'ASC');
                $this->db->join('categories','categories.category_id=product.category_id');
                $query = $this->db->get_where('product',array('product.category_id'=>$id));
                return $query->result_array();
        }
        public function get_by_orderid($id){
                $this->db->order_by("product.id", 'ASC');
                $this->db->join('order_detail','order_detail.product_id=product.id');
                $query = $this->db->get_where('product',array('product.id'=>$id));
                return $query->result_array();
        }

}
<?php
class Order_models extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_order($id = FALSE)
        {
            if ($id === FALSE)
            {
                    
                    $this->db->order_by('id', 'ASC');
                    $query = $this->db->get('product_order');
                    return $query->result_array();
            }
            $query = $this->db->get_where('product_order', array('id' => $id));
            return $query->row_array();
        }
        public function get_order_detail($id){
            $this->db->join('product','order_detail.product_id=product.id','left');
            $this->db->join('product_order','order_detail.order_id=product_order.id');
            $query = $this->db->get_where('order_detail',array('order_detail.order_id'=>$id));
            return $query->result_array();
        }
        public function insert_order(){
            $data= array(
                'customer_name' => $this->input->post('customer_name'),
                'customer_address' => $this->input->post('customer_address'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email')
            );
            $this->db->insert('product_order',$data);
            return $this->db->insert_id();
        }
        public function insert_order_detail($order_id){
            $cart_items=$_SESSION['cart'];
            foreach($cart_items as $cart_item)
            {
                $data=array(
                    'product_id'=>$cart_item['product_id'],
                    'price'=>$cart_item['price'],
                    'quantity'=>$cart_item['quantity'],
                    'order_id'=>$order_id
                );
                $this->db->insert('order_detail',$data);
            }
        }

    }
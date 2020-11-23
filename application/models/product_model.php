<?php
class Product_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function get_product($id = FALSE, $fld = FALSE)
        {       
            if($id === FALSE && $fld === FALSE){
                $query = $this->db->join('category', 'category_id = product_category_id')
                ->get('product');
                                
                return $query->result_array();
            } else if ($fld === FALSE){
                $query = $this->db->join('category', 'category_id = product_category_id')
                ->get_where('product', array('product_id' => $id));
                return $query->row_array();
            } else {
                $query = $this->db->join('category', 'category_id = product_category_id')
                ->get_where('product', array( $fld => $id));
                return $query->result_array();
            }
                
            
            
        }        

        public function insert($data){
            $params = array(
                'product_name'=> $data['product_name'],
                'product_price'=> $data['product_price'],
                'product_category_id'=> $data['product_category_id'],
            );
            
            $this->db->insert('product', $params);

        }

        public function update($data){
            $params = array(
                'product_id'=> $data['product_id'],
                'product_name'=> $data['product_name'],
                'product_price'=> $data['product_price'],
                'product_category_id'=> $data['product_category_id'],
            );
            
            $this->db->replace('product', $params);

        }

        public function delete($id){            

            $this->db->delete('product', array('product_id' => $id));
            
        }

}
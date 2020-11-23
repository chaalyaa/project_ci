<?php
class Category_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }

        public function get_category($id = FALSE)
        {       
            if($id === FALSE){
                $query = $this->db->get('category');
                return $query->result_array();
            } 
            
            $query = $this->db
                // ->join('product', 'product_category_id = category_id')
                ->get_where('category', array('category_id' => $id));
            return $query->row_array();                               
        }

        public function add_new($data){
            $params = array(
                'category_name'=> $data['category_name'],
            );
            
            $this->db->insert('category', $params);

        }

        public function update($data){
            $params = array(
                'category_id'=> $data['category_id'],
                'category_name'=> $data['category_name'],
            );
            
            $this->db->replace('category', $params);

        }

        public function delete($id){            

            $this->db->delete('category', array('category_id' => $id));
            
            // $tables = array('category', 'product');
            // $this->db->where('category_id', $id)
            //         ->join('product', 'product.product_category_id = category.category_id')
            //         ->delete($tables); 
            
            // $this->db->get_where('category', array('category_id' => $id))            
            //         // ->join('product', 'product_category_id = category_id')
            //         ->delete($tables);

        }

}
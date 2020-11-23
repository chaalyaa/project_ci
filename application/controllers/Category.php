<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
		$this->load->model('product_model');

		$this->load->helper('url');		
	}

	public function index()
	{
		$data['category_list'] = $this->category_model->get_category();
		$data['title'] = "Category List";
		$this->template->load('master/index','category/index', $data);
    }
    
    public function view($id)
    {			
        $data['category_item'] = $this->category_model->get_category($id);
        if(empty($data['category_item'])) show_404();
		$data['title'] = "Category Details";

		$data['product'] = $this->product_model->get_product($id, "product_category_id");

        $this->template->load('master/index','category/details', $data);
	}
	
	public function add()
    {
		if(isset($_POST['addCat'])){
			$data = array(
				'category_name' => $_POST['c_name'],
			);

			$this->category_model->add_new($data);
			redirect('category');			
		} else {
			$data['title'] = "Create New Category";
			$this->template->load('master/index','category/add', $data);
		}        
    }

	public function update($id)
    {				
        if(isset($_POST['updateCat'])){
			$data = array(
				'category_id' => $id,
				'category_name' => $_POST['c_name']
			);

			$this->category_model->update($data);
			redirect('category');
		} else {
			$data['category'] = $this->category_model->get_category($id);
			if(empty($data['category'])) show_404();
			$data['title'] = "Edit Category";

			$this->template->load('master/index','category/edit', $data);
		}       
	}
	
	public function delete($id)
    {				
        $this->category_model->delete($id);
		redirect('category');       
    }
}

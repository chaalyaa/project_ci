<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {	

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
		$this->load->model('category_model');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['product_list'] = $this->product_model->get_product();
		$data['title'] = "Product List Management";
		$this->template->load('master/index', 'product/index', $data); 
		// $this->load->view('master/table');
    }
    
    public function view($id)
    {				
		$data['product_item'] = $this->product_model->get_product($id);
		$data['title'] = "Product Item";

        if(empty($data['product_item'])) show_404();

        $this->template->load('master/index','product/details', $data);
	}
	
	public function add()
    {
		if(isset($_POST['addProd'])){
			$data = array(
				'product_name' => $_POST['p_name'],
				'product_price' => $_POST['p_price'],
				'product_category_id' => $_POST['p_catId'],
			);

			$this->product_model->insert($data);
			redirect('product');			
		} else {
			$data['category'] = $this->category_model->get_category();
			$data['title'] = "Add New Product";

			$this->template->load('master/index','product/add', $data);
		}        
    }

	public function update($id)
    {				
        if(isset($_POST['updateProd'])){
			$data = array(				
				'product_id' => $id,
				'product_name' => $_POST['p_name'],
				'product_price' => $_POST['p_price'],
				'product_category_id' => $_POST['p_catId'],
			);

			$this->product_model->update($data);
			redirect('product');
		} else {
			$data['title'] = "Edit Item";
			$data['product'] = $this->product_model->get_product($id);
			$data['category'] = $this->category_model->get_category();
			if(empty($data['product'])) show_404();
			
			$this->template->load('master/index','product/edit', $data);
		}       
	}
	
	public function delete($id)
    {				
        $this->product_model->delete($id);
		redirect('product');       
	}
	
	public function pdf($id){
		$this->load->library('dompdf_gen');
		
		$data['product_item'] = $this->product_model->get_product($id);
		// $data['title'] = "Product List";
		$this->load->view('print/product_details', $data); 

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Product Details_$id.pdf", array('Attachment'=>0));
	}
}

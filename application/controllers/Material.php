<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct() {
			  parent::__construct();
			  $user_session = $this->session->userdata('user_session');
			  if($user_session == null){
				  redirect('/auth', 'refresh');
			  }
           }
	public function index()
	{

		 $result = $this->MaterialModel->findAll();
         $data['materials'] = $result;
         $this->load->view('material/material', $data);
	}

	public function new()
	{
         $this->load->view('material/materialNew');
	}

	public function save()
	{
		 $this->load->model('MaterialModel'); 
		 $name = $this->input->post('name');
		 $unit = $this->input->post('unit');
		 $type = $this->input->post('type');
		 $buying_price = $this->input->post('buying_price');

        	$data = array(
               'unit' => $unit,
                      'type' => $type,
			   'name' => $name,
			   'buying_price' => $buying_price
            );
	  $this->MaterialModel->insert($data);
	  redirect('/material', 'refresh');
	}

	public function edit($id = NULL)
	{
		$this->load->helper('form'); 
		$this->load->model('MaterialModel'); 
		$material = $this->MaterialModel->findById($id);
		$data['material']= $material;
		$this->load->view('material/materialEdit', $data);

		// echo ($data[0]->name);
	}

	public function update()
	{
		$this->load->model('MaterialModel'); 
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$unit = $this->input->post('unit');
		$type = $this->input->post('type');
		$buying_price = $this->input->post('buying_price');

		   $data = array(
			  'unit' => $unit,
					 'type' => $type,
			  'name' => $name,
			  'buying_price' => $buying_price
		   );
	 $this->MaterialModel->update($data, $id);
	 redirect('/material', 'refresh');
	}

	public function delete($id = NULL)
	{
		$this->load->model('MaterialModel'); 
		$this->MaterialModel->delete($id);
		redirect('/material', 'refresh');
	}
}

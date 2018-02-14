<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

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
							$this->load->model('ProjectModel');
							$this->load->model('CustomerModel');
           }
	public function index(){
		$result = $this->ProjectModel->findAll();
		$data['projects'] = $result;
		$this->load->view('project/project', $data);
 }

 public function new(){
 	 $customers = $this->CustomerModel->findAll();
	 $data['customers'] = $customers;
	 $this->load->view('project/projectNew', $data);
}


	public function insert(){
    $post = $this->input->post();

		$data['project_name'] = $post['project_name'];
		$data['term'] = $post['term'];
		$data['est_duration'] = $post['est_duration'];
		$data['est_profit'] = $post['est_profit'];
		$data['customer_id'] = $post['customer_id'];

    $this->ProjectModel->insert($data);
		redirect('/project');
	}


	public function edit($id = NULL){
		$this->load->helper('form');
		$customers = $this->CustomerModel->findById($id);
		$data['customer']= $customers;
		$this->load->view('customer/customerEdit', $data);

		// echo ($data[0]->name);
	}

	public function update(){

		$data['id'] = $this->input->post('id');
		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$data['hp'] = $this->input->post('hp');
		$data['email'] = $this->input->post('email');
		$data['acc_bank'] = $this->input->post('acc_bank');
	 	$this->CustomerModel->update($data, $data['id']);
	 redirect('/customer', 'refresh');
	}

	public function delete($id = NULL)
	{
		$this->CustomerModel->delete($id);
		redirect('/customer', 'refresh');
	}
}

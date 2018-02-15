<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Budget extends CI_Controller {

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
							$this->load->model('BudgetModel');
           }
	public function index(){
		$result = $this->BudgetModel->findAll();
		$data['budgets'] = $result;
		$this->load->view('budget/budget', $data);
 }
 public function new(){
	 $this->load->view('budget/budgetNew');
}


public function insert(){
	$post = $this->input->post();

	$data['budget_id'] = $post['budget_id'];
	$data['budget_name'] = $post['budget_name'];
	$data['invoice'] = $post['invoice'];
	$data['payment'] = $post['payment'];
	$data['funding'] = $post['funding'];
	$data['note'] = $post['note'];
	$data['project_id'] = $post['project_id'];
	$data['payment_date'] = $post['payment_date'];

	$this->BudgetModel->insert($data);
	redirect('/budget');
}


public function edit($id = NULL){
	$this->load->helper('form');
	$budgets = $this->BudgetModel->findById($id);
	$data['budget']= $budgets;
	$this->load->view('budget/budgetEdit', $data);

	// echo ($data[0]->name);
}

public function update(){

	$data['budget_id'] = $this->input->post('budget_id');
	$data['budget_name'] = $this->input->post('name');
	$data['invoice'] = $this->input->post('address');
	$data['payment'] = $this->input->post('hp');
	$data['funding'] = $this->input->post('email');
	$data['note'] = $this->input->post('acc_bank');
	$data['project_id'] = $this->input->post('acc_bank');
	$data['payment_date'] = $this->input->post('acc_bank');

	$this->BudgetModel->update($data, $data['budget_id']);
 redirect('/budget', 'refresh');
}

public function delete($id = NULL)
{
	$this->BudgetModel->delete($id);
	redirect('/budget', 'refresh');
}}

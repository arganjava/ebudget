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
			  $this->load->library('session');
			  $this->load->model('ProjectModel');
			  $this->load->model('MaterialModel');
			  $this->load->model('PartnerModel');
			  $this->load->model('CustomerModel');
			  $user_session = $this->session->userdata('user_session');
			  if($user_session == null){
				  redirect('/auth', 'refresh');
			  }

           }
	public function index()
	{
		
		$result = $this->ProjectModel->findAll();
         $data['projects'] = $result;
		$this->load->view('project/project', $data);
	}

	

	public function confirmpage()
	{
		$result = $this->ProjectModel->findAllConfirmY();
         $data['projects'] = $result;
		$this->load->view('project/confirmproject', $data);
	}

	public function insert()
	{
        	$data = array(
               'unit' => "2",
                      'type' => "2",
               'name' => "batu"
            );
      $this->MaterialModel->insert($data);
	}

	public function new()
	{
		$resultMaterial = $this->MaterialModel->findAll();
		$resultManpower = $this->PartnerModel->findAll();
		$resultCustomer = $this->CustomerModel->findAll();
		$this->session->set_userdata('materials', $resultMaterial);
		$this->session->set_userdata('manpowers', $resultManpower);
		$this->session->set_userdata('customers', $resultCustomer);
		$this->session->set_userdata('materialListTable', []);
		$this->session->set_userdata('manpowerListTable', []);
        $this->load->view('project/projectNew');
	}

	public function addrowmaterial_post()
	{
		$id = $this->input->get('id');
		$qty = $this->input->get('qty');
		$raw_input_stream = $this->input->raw_input_stream;
		$bodyArray = json_decode($raw_input_stream, true);
		if(!empty($bodyArray)){
			foreach($bodyArray as $row){
				if($row["id"] == intval($id)){
					$find = array('error' => "material sudah ada pada list");
					return print_r(json_encode($find));
				}
			}
		}
		$result = $this->ProjectModel->processAddRowMaterial($id, $qty);
		array_push($bodyArray, $result);
		$this->session->set_userdata('materialListTable', $bodyArray);
		return print_r(json_encode($result));
	}

	public function getsessiondata()
	{
		$materialListTable = $this->session->userdata('materialListTable');
		echo json_encode($materialListTable);
	}

	public function addrowmanpower_post()
	{
		$id = $this->input->get('id');
		$qty = $this->input->get('qty');
		$raw_input_stream = $this->input->raw_input_stream;
		$bodyArray = json_decode($raw_input_stream, true);
		if(!empty($bodyArray)){
			foreach($bodyArray as $row){
				if($row["id"] == intval($id)){
					$find = array('error' => "manpower sudah ada pada list");
					return print_r(json_encode($find));
				}
			}
		}
		$result = $this->ProjectModel->processAddRowPartner($id, $qty);
		array_push($bodyArray, $result);
		$this->session->set_userdata('manpowerListTable', $bodyArray);
		return print_r(json_encode($result));
	}

	public function save()
	{
		$project_name = $this->input->post('project_name');
		$customer = $this->input->post('customer');
		$term = $this->input->post('term');
		$est_duration = $this->input->post('est_duration');
		$est_budget = $this->input->post('est_budget');
		$propose_value = $this->input->post('propose_value');
		$est_profit = $this->input->post('est_profit');
		$confirm = $this->input->post('confirm');
		$data = array(
			'project_name' => $project_name,
				   'customer_id' => $customer,
			'term' => $term,
			'est_duration' => $est_duration,
			'propose_value' => $propose_value,
			'est_profit' => $est_profit,
			'confirm' => $confirm		 );
		 $manpowerListTable = $this->session->userdata('manpowerListTable');
		 $materialListTable = $this->session->userdata('materialListTable');
		 $this->ProjectModel->processInsert($data, $materialListTable, $manpowerListTable);
		 redirect('/project', 'refresh');
		}

	public function confirm($id = NULL)
	{
		$this->ProjectModel->confirm($id);
		redirect('/project', 'refresh');
	}

	public function update()
	{
		$this->load->view('material');
	}

	public function delete()
	{
		$this->load->view('material');
	}
}

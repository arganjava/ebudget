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
			  $resultMaterial = $this->MaterialModel->findAll();
			  $resultManpower = $this->PartnerModel->findAll();
			  $this->session->set_userdata('materials', $resultMaterial);
			  $this->session->set_userdata('manpowers', $resultManpower);

           }
	public function index()
	{
		$result = $this->ProjectModel->findAll();
         $data['projects'] = $result;
		$this->load->view('project/project', $data);
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
		$this->session->set_userdata('materialLIst', []);
		$this->session->set_userdata('manpowerLIst', []);
         $this->load->view('project/projectNew');
	}

	public function addRowMaterial()
	{
		$this->session->set_userdata('materialLIst', []);
		$this->session->set_userdata('manpowerLIst', []);
         $this->load->view('project/projectNew');
	}

	public function deleteRowMaterial()
	{
		$this->session->set_userdata('materialLIst', []);
		$this->session->set_userdata('manpowerLIst', []);
         $this->load->view('project/projectNew');
	}

	public function addRowManpower()
	{
		$this->session->set_userdata('materialLIst', []);
		$this->session->set_userdata('manpowerLIst', []);
         $this->load->view('project/projectNew');
	}

	public function deleteRowManpower()
	{
		$this->session->set_userdata('materialLIst', []);
		$this->session->set_userdata('manpowerLIst', []);
         $this->load->view('project/projectNew');
	}

	public function edit()
	{
		$this->load->view('material');
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

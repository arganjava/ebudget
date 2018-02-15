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
           }
	public function index()
	{
		$result = $this->ProjectModel->findAll();
         $data['projects'] = $result;
		$this->load->view('project/project', $data);
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
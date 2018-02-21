<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {

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
							$this->load->model('PartnerModel');
							$user_session = $this->session->userdata('user_session');
							if($user_session == null){
							 redirect('/auth', 'refresh');
							 }
           }
	public function index()
	{
		$result = $this->PartnerModel->findAll();
				$data['partners'] = $result;
				$this->load->view('partner', $data);
	}

	public function insert()
	{
        	$data = array(
               'unit' => "2",
                      'type' => "2",
               'name' => "batu"
            );
      $this->PartnerModel->insert($data);
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

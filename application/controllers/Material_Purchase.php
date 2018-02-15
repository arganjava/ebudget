<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material_Purchase extends CI_Controller {

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
							$this->load->model('Material_PurchaseModel');
           }
	public function index(){
		$result = $this->Material_projectModel->findAll();
		$data['Material_Purchases'] = $result;
		$this->load->view('Material_Purchase', $data);
 }


	public function insert()
	{
         $this->load->model('MaterialModel');
        	$data = array(
               'unit' => "2",
                      'type' => "2",
               'name' => "batu"
            );
      $this->MaterialModel->insert($data);
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

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
							$this->load->model('UserModel');
           }
	public function index(){
		$result = $this->userModel->findAll();
		$data['users'] = $result;
		$this->load->view('user/user', $data);
 }

 public function new(){
	 $this->load->view('user/userNew');
}


	public function insert(){
    $post = $this->input->post();

		$data['id'] = $post['id'];
		$data['Username'] = $post['username'];
		$data['password'] = $post['password'];

    $this->userModel->insert($data);
		redirect('/user');
	}


	public function edit($id = NULL){
		$this->load->helper('form');
		$users = $this->userModel->findById($id);
		$data['user']= $users;
		$this->load->view('user/userEdit', $data);

		// echo ($data[0]->name);
	}

	public function update(){

		$data['id'] = $this->input->post('id');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
	 	$this->userModel->update($data, $data['id']);
	 redirect('/user', 'refresh');
	}

	public function delete($id = NULL)
	{
		$this->userModel->delete($id);
		redirect('/user', 'refresh');
	}
}

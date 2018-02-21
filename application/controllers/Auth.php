<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
				   $CI = & get_instance();
				   $this->load->library('session');
                   $this->load->helper('url');
				}
	public function index()
	{
		$this->load->view('login');
	}

	public function login()
    {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username == "admin" && $password == "admin"){
			
			$this->session->set_userdata('user_session', $username);
			redirect('/', 'refresh');
		}else{
			redirect('/auth/login', 'refresh');
		}
    }

    public function logout()
        {
			$this->session->sess_destroy();
			redirect('/auth', 'refresh');
		}

}

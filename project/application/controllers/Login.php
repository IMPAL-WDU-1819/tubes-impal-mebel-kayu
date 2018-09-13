<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_login');
	}
	public function index() {
 		$username = $this->input->post("username");
 		$password = $this->input->post("password");
 		$login_as = $this->input->post("login_as");
 		if ($login_as == "supplier") {
 			$result = $this->M_login->is_login_supplier($username, $password)->row_array();
 		}
 		if ($result > 0 && $login_as == "supplier") {
 			$this->session->set_userdata('user_supplier', $username);
 			redirect('page/supplier');
 		} else {
 			$this->session->set_flashdata('message', 'Login gagal!');
 			redirect('page/login');
 		}
	}
}
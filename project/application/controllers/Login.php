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
 		} else if ($login_as == "toko") {
 			$result = $this->M_login->is_login_toko($username, $password)->row_array();
 		} else if ($login_as == "reseller") {
 			$result = $this->M_login->is_login_reseller($username, $password)->row_array();
 		} 

 		if ($result > 0 && $login_as == "supplier") {
 			$this->session->set_userdata('user_supplier', $username);
 			redirect('page/supplier');
 		} else if ($result > 0 && $login_as == "toko") {
 			$this->session->set_userdata('user_toko', $username);
 			redirect('page/toko');
 		} else if ($result > 0 && $login_as == "reseller") {
 			$this->session->set_userdata('user_reseller', $username);
 			redirect('page/reseller');
 		} else {
 			$this->session->set_flashdata('message', 'Login gagal!');
 			redirect('page/login');
 		}
	}
}
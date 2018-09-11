<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->data = array(
			"company" => "Incognito Jaya"
		);
		$this->load->model("M_supplier");
	}

	public function index() {
		$data = $this->data;
		$data["title"] = "Halaman Masuk";
 		$this->load->view('v_login', $data);
	}
	public function login() {
		$data = $this->data;
		$data["title"] = "Halaman Masuk";
 		$this->load->view('v_login', $data);
	}
	public function supplier() {
		if (!$this->session->userdata('user_supplier')) {
			redirect('page/login');
		}
		$data = $this->data;
		$data["title"] = "Supplier";
 		$this->load->view('v_supplier', $data);
	}
	public function supplier_profile() {
		$data = $this->data;
		$data["title"] = "Profil Supplier";
		$user = $this->session->userdata('user_supplier');
		$data["user"] = $this->M_supplier->get_user($user);
 		$this->load->view('v_supplier_profile', $data);
	}
}
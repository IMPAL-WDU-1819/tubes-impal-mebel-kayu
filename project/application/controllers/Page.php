<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("M_supplier");
	}
	public function index() {
		$data["title"] = "Halaman Masuk";
 		$this->load->view('v_login', $data);
	}
	public function login() {
		$data["title"] = "Halaman Masuk";
 		$this->load->view('v_login', $data);
	}
	public function supplier() {
		$data["title"] = "Supplier";
		$data["kayu"] = $this->M_supplier->get_kayu();
		$this->load->view('v_supplier', $data);
	}
}
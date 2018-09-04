<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() { // 1301164162
		redirect('login');
	}
	public function home() { // 1301164162
		$data["title"] = "Sistem Informasi Data Mebel";
 		$this->load->view('v_home', $data);
	}
	public function login() {
		$data["title"] = "Halaman Masuk";
 		$this->load->view('v_login', $data);
	}
}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->data = array(
			"company" => "Incognito Jaya"
		);
		$this->load->model("M_supplier");
		$this->load->model("M_kayu");
	}

	public function index() {
		if ($this->session->userdata('user_supplier')) {
			redirect('page/supplier');
		}
		redirect('page/login');
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
		$data["title"] = "Daftar Kayu";
		$user = $this->session->userdata('user_supplier');
		$data["user"] = $this->M_supplier->get_user($user);
		$idsupplier = $data["user"]["id_supplier"];
		$data["kayu"] = $this->M_kayu->get_kayu_by_idsupplier($idsupplier);
 		$this->load->view('v_supplier', $data);
	}
	public function supplier_profile() {
		if (!$this->session->userdata('user_supplier')) {
			redirect('page/login');
		}
		$data = $this->data;
		$data["title"] = "Profil Supplier";
		$user = $this->session->userdata('user_supplier');
		$data["user"] = $this->M_supplier->get_user($user);
 		$this->load->view('v_supplier_profile', $data);
	}
	public function supplier_tambahkayu() {
		if (!$this->session->userdata('user_supplier')) {
			redirect('page/login');
		}
		$data = $this->data;
		$data["title"] = "Tambah Kayu";
		$user = $this->session->userdata('user_supplier');
		$data["user"] = $this->M_supplier->get_user($user);
		$this->load->view('v_supplier_tambahkayu', $data);
	}
	public function tentang_kami() {
		$data = $this->data;
		$data["title"] = "Tentang Kami";
		$this->load->view('v_tentangkami', $data);
	}
}
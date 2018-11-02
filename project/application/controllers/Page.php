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
		$this->load->model("M_toko");
		$this->load->model("M_mebel");
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
		if ($this->session->userdata('user_supplier')) {
			redirect('page/supplier');
		} else if ($this->session->userdata('user_toko')) {
			redirect('page/toko');
		} else {
			$this->load->view('v_login', $data);
		} 		
	}
	public function supplier() {
		if (!$this->session->userdata('user_supplier')) {
			redirect('page/login');
		}
		$data = $this->data;
		$data["title"] = "Dasbor";
		$user = $this->session->userdata('user_supplier');
		$data["user"] = $this->M_supplier->get_user($user);
		$idsupplier = $data["user"]["id_supplier"];
		$data["kayu"] = $this->M_kayu->get_kayu_by_idsupplier($idsupplier);
 		$this->load->view('supplier/v_dasbor', $data);
	}
	public function supplier_profile() {
		if (!$this->session->userdata('user_supplier')) {
			redirect('page/login');
		}
		$data = $this->data;
		$data["title"] = "Profil Supplier";
		$user = $this->session->userdata('user_supplier');
		$data["user"] = $this->M_supplier->get_user($user);
 		$this->load->view('supplier/v_profile', $data);
	}
	public function supplier_tambahkayu() {
		if (!$this->session->userdata('user_supplier')) {
			redirect('page/login');
		}
		$data = $this->data;
		$data["title"] = "Tambah Kayu";
		$user = $this->session->userdata('user_supplier');
		$data["user"] = $this->M_supplier->get_user($user);
		$this->load->view('supplier/v_tambahkayu', $data);
	}
	public function supplier_tentang_kami() {
		$data = $this->data;
		$data["title"] = "Tentang Kami";
		$this->load->view('supplier/v_tentangkami', $data);
	}
	public function toko() {
		if (!$this->session->userdata('user_toko')) {
			redirect('page/login');
		}
		$data = $this->data;
		$data["title"] = "Dasbor";
		$user = $this->session->userdata('user_toko');
		$data["user"] = $this->M_toko->get_user($user);
		$idtoko = $data["user"]["id_toko"];
		$data["mebel"] = $this->M_mebel->get_mebel_by_idtoko($idtoko);
 		$this->load->view('toko/v_dasbor', $data);
	}
}
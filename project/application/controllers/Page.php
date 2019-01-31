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
		$this->load->model("M_reseller");
		$this->load->model("M_mebel");
	}

	public function index() {
		if ($this->session->userdata('user_supplier')) {
			redirect('page/supplier');
		} else if ($this->session->userdata('user_toko')) {
			redirect('page/toko');
		} else if ($this->session->userdata('user_reseller')) {
			redirect('page/reseller');
		} else {
			redirect('page/login');
		}
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
		$data["title"] = "Dasbor";
		$user = $this->session->userdata('user_supplier');
		$data["user"] = $this->M_supplier->get_user($user);
		$idsupplier = $data["user"]["id_supplier"];
		$data["kayu"] = $this->M_kayu->get_kayu_by_idsupplier($idsupplier);
		$data["jual_kayu"] = $this->M_supplier->get_jual_kayu($idsupplier);
		$data["statistik"] = $this->M_supplier->get_statistics($idsupplier);
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
		$idsupplier = $data["user"]["id_supplier"];
		$data["jumlah_kayu"] = $this->M_supplier->get_jumlah_kayu($idsupplier);
		$data["pendapatan"] = $this->M_supplier->get_pendapatan($idsupplier)["pendapatan"];
 		$this->load->view('supplier/v_profile', $data);
	}
	public function supplier_tentang_kami() {
		$this->load->view('supplier/v_tentangkami2');
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
		$data["kayu"] = $this->M_kayu->get_allkayu();
		$data["statistik"] = $this->M_toko->get_statistics($idtoko);
		$data["jual_mebel"] = $this->M_toko->get_jual_mebel($idtoko);
 		$this->load->view('toko/v_dasbor', $data);
	}
	
	public function reseller() {
		if (!$this->session->userdata('user_reseller')) {
			redirect('page/login');
		}
		$data = $this->data;
		$data["title"] = "Dasbor";
		$user = $this->session->userdata('user_reseller');
		$data["user"] = $this->M_reseller->get_user($user);
		$idreseller = $data["user"]["id_reseller"];
		$data["jual_mebel"] = $this->M_reseller->get_jual_mebel($idreseller);
		$data["mebel"] = $this->M_mebel->get_all_mebel();
 		$this->load->view('reseller/v_dasbor', $data);
	}
	public function toko_profile() {
		if (!$this->session->userdata('user_toko')) {
			redirect('page/login');
		}
		
		$data = $this->data;
		$data["title"] = "Profil Toko";
		$user = $this->session->userdata('user_toko');
		$data["user"] = $this->M_toko->get_user($user);
		$idtoko = $data["user"]["id_toko"];
		$data["jumlah_kayu"] = $this->M_toko->get_jumlah_mebel($idtoko);
		$data["pendapatan"] = $this->M_toko->get_pendapatan($idtoko)["pendapatan"];
		$data["kayu"] = $this->M_kayu->get_allkayu();
 		$this->load->view('toko/v_profile', $data);
	}
	public function reseller_profile() {
		if (!$this->session->userdata('user_reseller')) {
			redirect('page/login');
		}
		
		$data = $this->data;
		$data["title"] = "Profil Reseller";
		$user = $this->session->userdata('user_reseller');
		$data["user"] = $this->M_reseller->get_user($user);
		$idreseller = $data["user"]["id_reseller"];
		$data["jual_mebel"] = $this->M_reseller->get_jual_mebel($idreseller);
		$data["mebel"] = $this->M_mebel->get_all_mebel();
 		$this->load->view('reseller/v_profile', $data);
	}
}
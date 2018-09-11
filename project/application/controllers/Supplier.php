<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->data = array(
			"company" => "Incognito Jaya"
		);
		$this->load->model("M_supplier");
	}
	public function update_profile() {
		$email = $this->input->post('email');
		$namadepan = $this->input->post('namadepan');
		$namabelakang = $this->input->post('namabelakang');
		$kecamatan = $this->input->post('kecamatan');
		$kota = $this->input->post('kota');
		$negara = $this->input->post('negara');
		$kodepos = $this->input->post('kodepos');
		$tentang = $this->input->post('tentang');
		$this->M_supplier->update_profile($email, $namadepan, $namabelakang, $kecamatan, $kota, $negara, $kodepos, $tentang);
		$this->session->set_flashdata("message", "Profil berhasil diperbarui!");
		redirect("page/supplier_profile");
	}
}
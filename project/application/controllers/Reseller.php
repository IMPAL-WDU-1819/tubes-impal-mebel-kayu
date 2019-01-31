<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reseller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->data = array(
			"company" => "Incognito Jaya"
		);
		$this->load->model("M_reseller");
		$this->load->model("M_toko");
		$this->load->model("M_mebel");
	}
	public function buy_mebel($idmebel) {
		$idreseller = $this->input->post('idreseller');
		$jumlah = $this->input->post('jumlah');
		$data["user"] = $this->M_toko->get_id_toko($idmebel);
		$idtoko = $data["user"]['id_toko'];
		$this->M_reseller->add_jual_mebel($idmebel, $idreseller, $jumlah, $idtoko);
		$this->session->set_flashdata('message', "Pembelian berhasil!");
		redirect("page/reseller");
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
		$username = $this->input->post('username');
		$this->M_reseller->update_profile($email, $namadepan, $namabelakang, $kecamatan, $kota, $negara, $kodepos, $tentang, $username);
		$this->session->set_flashdata("message", "Profil berhasil diperbarui!");
		redirect("page/reseller_profile");
	}
}
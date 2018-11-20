<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reseller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->data = array(
			"company" => "Incognito Jaya"
		);
		$this->load->model("M_reseller");
	}
	public function buy_mebel($idmebel) {
		$idreseller = $this->input->post('idreseller');
		$jumlah = $this->input->post('jumlah');
		$this->M_reseller->add_jual_mebel($idmebel, $idreseller, $jumlah);
		$this->session->set_flashdata('message', "Pembelian berhasil!");
		redirect("page/reseller");
	}
}
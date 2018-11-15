<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->data = array(
			"company" => "Incognito Jaya"
		);
		$this->load->model("M_toko");
		$this->load->model("M_mebel");
		$this->load->model("M_supplier");
	}
	public function add_mebel() {
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= 5000;
		$this->upload->initialize($config);
		if ($this->upload->do_upload('foto')) {
			$img = $this->upload->data();

			$nama = $this->input->post("nama");
			$ukuran = $this->input->post("ukuran");
			$stok = $this->input->post("stok");
			$deskripsi = $this->input->post("deskripsi");
			$idkayu = $this->input->post("idkayu");
			$harga = $this->input->post("harga");
			$idtoko = $this->input->post("idtoko");
			$image = $img['file_name'];

			$trim = trim($nama);
			$slug = strtolower(str_replace(" ", "-", $trim));

			$idmebel = $this->M_mebel->add_mebel($nama, $ukuran, $stok, $deskripsi, $idkayu, $harga, $image, $slug, $idtoko);
			$idsupplier = $this->M_supplier->get_id_supplier($idkayu)["id_supplier"];
			$this->M_mebel->add_jual_kayu($idkayu, $idmebel, $idsupplier, $stok);

			$this->session->set_flashdata('message', "Mebel berhasil ditambahkan!");
			redirect('page/toko');
		} else {
			$this->session->set_flashdata('message', $this->upload->display_errors());
			redirect('page/toko');
		}
	}
	public function delete_mebel($idmebel) {
		$this->M_mebel->delete_mebel($idmebel);
		$this->session->set_flashdata('message', 'Kayu berhasil dihapus!');
		redirect('page/toko');
	}
}
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
	public function add_kayu() {
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
        	$harga = $this->input->post("harga");
        	$idsupplier = $this->input->post("idsupplier");
        	$image = $img['file_name'];

        	$trim = trim($nama);
	        $slug = strtolower(str_replace(" ", "-", $trim));

	        $this->M_supplier->add_kayu($nama, $ukuran, $stok, $deskripsi, $harga, $image, $slug, $idsupplier);

	        $this->session->set_flashdata('message', "Kayu berhasil ditambahkan!");
	        redirect('page/supplier_tambahkayu');
        } else {
        	$this->session->set_flashdata('message', $this->upload->display_errors());
			redirect('page/supplier_tambahkayu');
        }
	}
}
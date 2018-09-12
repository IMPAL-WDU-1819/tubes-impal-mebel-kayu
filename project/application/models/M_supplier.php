<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model {
	public function get_kayu() {
		return $this->db->get("kayu");
	}
	public function get_user($user) {
		$this->db->where("user_supplier", $user);
		return $this->db->get("supplier")->result_array()[0];
	}
	public function update_profile($email, $namadepan, $namabelakang, $kecamatan, $kota, $negara, $kodepos, $tentang) {
		$data = array(
			"email_supplier" => $email,
			"nama_supplier" => $namadepan,
			"namabelakang_supplier" => $namabelakang,
			"kecamatan_supplier" => $kecamatan,
			"kota_supplier" => $kota,
			"negara_supplier" => $negara,
			"kodepos_supplier" => $kodepos,
			"tentang_supplier" => $tentang
		);
		$this->db->update("supplier", $data);
	}
	public function add_kayu($nama, $ukuran, $stok, $deskripsi, $harga, $image, $slug, $idsupplier) {
		$data = array(
			"nama_kayu" => $nama,
			"ukuran_kayu" => $ukuran,
			"stok_kayu" => $stok,
			"deskripsi_kayu" => $deskripsi,
			"harga_kayu" => $harga,
			"image_kayu" => $image,
			"slug_kayu" => $slug,
			"id_supplier" => $idsupplier
		);
		$this->db->insert("kayu", $data);
	}
}
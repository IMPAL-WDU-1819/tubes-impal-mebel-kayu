<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_mebel extends CI_Model {
	public function get_mebel_by_idtoko($idtoko) {
		$this->db->where("id_toko", $idtoko);
		return $this->db->get("mebel");
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
	public function edit_kayu($nama, $ukuran, $stok, $deskripsi, $harga, $idkayu) {
		$data = array(
			"nama_kayu" => $nama,
			"ukuran_kayu" => $ukuran,
			"stok_kayu" => $stok,
			"deskripsi_kayu" => $deskripsi,
			"harga_kayu" => $harga
		);
		$this->db->where("id_kayu", $idkayu);
		$this->db->update("kayu", $data);
	}
}
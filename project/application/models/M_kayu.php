<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_kayu extends CI_Model {
	public function get_kayu_by_idsupplier($idsupplier) {
		$this->db->where("id_supplier", $idsupplier);
		return $this->db->get("kayu");
	}
	public function get_allkayu() {
		return $this->db->get("kayu");
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
	public function cek_stok_kayu($idkayu){
		return $this->db->query("SELECT stok_kayu from kayu where id_kayu = $idkayu")->result_array()[0];
	}
}
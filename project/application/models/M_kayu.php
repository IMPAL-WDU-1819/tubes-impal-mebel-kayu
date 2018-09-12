<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_kayu extends CI_Model {
	public function get_kayu() {
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
}
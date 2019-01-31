<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_mebel extends CI_Model {
	public function get_mebel_by_idtoko($idtoko) {
		return $this->db->query("SELECT * FROM mebel INNER JOIN kayu ON mebel.id_kayu = kayu.id_kayu WHERE id_toko = $idtoko");
	}
	public function add_mebel($nama, $ukuran, $stok, $deskripsi, $idkayu, $harga, $image, $slug, $idtoko) {
		$this->db->query("INSERT INTO mebel (nama_mebel, ukuran_mebel, stok_mebel, deskripsi_mebel, id_kayu, harga_mebel, image_mebel, slug_mebel, id_toko) VALUES 
			('$nama', $ukuran, $stok, '$deskripsi', $idkayu, $harga, '$image', '$slug', $idtoko)");
		return $this->db->insert_id();
	}
	public function add_jual_kayu($idkayu, $idmebel, $idsupplier, $jumlah) {
		$this->db->query("INSERT INTO jual_kayu (id_kayu, id_mebel, id_supplier, jumlah) VALUES ($idkayu, $idmebel, $idsupplier, $jumlah)");
	}
	public function delete_mebel($idmebel) {
		$this->db->query("DELETE FROM mebel WHERE id_mebel = $idmebel");
	}
	public function get_all_mebel() {
		return $this->db->query("SELECT * FROM mebel INNER JOIN kayu ON mebel.id_kayu = kayu.id_kayu");
	}
	public function edit_mebel($nama, $ukuran, $stok, $deskripsi, $harga, $idmebel) {
		$data = array(
			"nama_mebel" => $nama,
			"ukuran_mebel" => $ukuran,
			"stok_mebel" => $stok,
			"deskripsi_mebel" => $deskripsi,
			"harga_mebel" => $harga
		);
		$this->db->where("id_mebel", $idmebel);
		$this->db->update("mebel", $data);
	}
	public function cek_mebel($idmebel){
		return $this->db->query("SELECT stok_mebel from mebel where mebel.id_mebel = $idmebel")->result_array()[0];
	}
}
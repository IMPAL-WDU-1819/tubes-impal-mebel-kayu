<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model {
	public function get_user($user) {
		$this->db->where("user_supplier", $user);
		return $this->db->get("supplier")->result_array()[0];
	}
	public function get_jumlah_kayu($idsupplier) {
		return $this->db->query("SELECT COUNT(*) FROM supplier INNER JOIN kayu ON supplier.id_supplier = kayu.id_supplier WHERE supplier.id_supplier = $idsupplier")->result_array()[0];
	}
	public function update_profile($email, $namadepan, $namabelakang, $kecamatan, $kota, $negara, $kodepos, $tentang, $username) {
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
		$this->db->where("user_supplier", $username);
		$this->db->update("supplier", $data);
	}
	public function get_id_supplier($idkayu) {
		return $this->db->query("SELECT id_supplier FROM kayu WHERE id_kayu = $idkayu")->result_array()[0];
	}
	public function get_jual_kayu($idsupplier) {
		return $this->db->query("SELECT * FROM jual_kayu INNER JOIN kayu ON jual_kayu.id_kayu=kayu.id_kayu WHERE jual_kayu.id_supplier=$idsupplier");
	}
	public function get_statistics($idsupplier) {
		return $this->db->query("SELECT MONTH(tanggal) as bulan, DAY(tanggal) as hari, SUM(jumlah) as stok_terjual FROM jual_kayu WHERE id_supplier=$idsupplier GROUP BY MONTH(tanggal), DAY(tanggal)");
	}
	public function get_pendapatan($idsupplier) {
		return $this->db->query("SELECT sum(jumlah*harga_kayu) as pendapatan FROM jual_kayu INNER JOIN kayu ON jual_kayu.id_kayu=kayu.id_kayu WHERE jual_kayu.id_supplier=$idsupplier")->result_array()[0];
	}
}
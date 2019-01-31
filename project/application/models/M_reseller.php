<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_reseller extends CI_Model {
	public function get_user($user) {
		$this->db->where("user_reseller", $user);
		return $this->db->get("reseller")->result_array()[0];
	}
	public function add_jual_mebel($idmebel, $idreseller, $jumlah, $idtoko) {
		$this->db->query("INSERT INTO jual_mebel (id_mebel, id_reseller, id_toko, jumlah_mebel) VALUES ($idmebel, $idreseller, $idtoko, $jumlah)");
	}
	public function get_jual_mebel($idreseller) {
		return $this->db->query("SELECT * FROM jual_mebel INNER JOIN mebel ON jual_mebel.id_mebel=mebel.id_mebel WHERE jual_mebel.id_reseller=$idreseller");
	}
	public function update_profile($email, $namadepan, $namabelakang, $kecamatan, $kota, $negara, $kodepos, $tentang, $username) {
		$data = array(
			"email_reseller" => $email,
			"nama_reseller" => $namadepan,
			"namabelakang_reseller" => $namabelakang,
			"kecamatan_reseller" => $kecamatan,
			"kota_reseller" => $kota,
			"negara_reseller" => $negara,
			"kodepos_reseller" => $kodepos,
			"tentang_reseller" => $tentang
		);
		$this->db->where("user_reseller", $username);
		$this->db->update("reseller", $data);
	}
}
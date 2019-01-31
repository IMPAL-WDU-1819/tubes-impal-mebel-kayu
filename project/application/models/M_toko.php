<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_toko extends CI_Model {
	public function get_user($user) {
		$this->db->where("user_toko", $user);
		return $this->db->get("toko")->result_array()[0];
	}
	public function get_statistics($idtoko) {
		return $this->db->query("SELECT MONTH(tanggal_jual_mebel) as bulan, DAY(tanggal_jual_mebel) as hari, SUM(jumlah_mebel) as stok_terjual FROM jual_mebel WHERE id_toko=$idtoko GROUP BY MONTH(tanggal_jual_mebel), DAY(tanggal_jual_mebel)");
	}
	public function get_jual_mebel($idtoko) {
		return $this->db->query("SELECT * FROM jual_mebel INNER JOIN mebel ON jual_mebel.id_mebel=mebel.id_mebel WHERE jual_mebel.id_toko=$idtoko");
	}
	public function get_jumlah_mebel($idtoko) {
		return $this->db->query("SELECT COUNT(*) FROM mebel INNER JOIN toko ON mebel.id_toko = toko.id_toko WHERE toko.id_toko = $idtoko")->result_array()[0];
	}
	public function get_pendapatan($idtoko) {
		return $this->db->query("SELECT sum(jumlah_mebel*harga_mebel) as pendapatan FROM mebel INNER JOIN jual_mebel ON jual_mebel.id_mebel=mebel.id_mebel WHERE jual_mebel.id_toko=$idtoko")->result_array()[0];
	}
	public function get_id_toko($idmebel){
		return $this->db->query("SELECT id_toko from mebel where mebel.id_mebel = $idmebel")->result_array()[0];
	}
	public function update_profile($email, $namadepan, $namabelakang, $kecamatan, $kota, $negara, $kodepos, $tentang, $username) {
		$data = array(
			"email_toko" => $email,
			"nama_toko" => $namadepan,
			"namabelakang_toko" => $namabelakang,
			"kecamatan_toko" => $kecamatan,
			"kota_toko" => $kota,
			"negara_toko" => $negara,
			"kodepos_toko" => $kodepos,
			"tentang_toko" => $tentang
		);
		$this->db->where("user_toko", $username);
		$this->db->update("toko", $data);
	}
}
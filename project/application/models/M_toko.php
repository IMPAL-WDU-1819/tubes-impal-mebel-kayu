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
}
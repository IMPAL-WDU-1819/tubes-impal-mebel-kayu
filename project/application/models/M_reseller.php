<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_reseller extends CI_Model {
	public function get_user($user) {
		$this->db->where("user_reseller", $user);
		return $this->db->get("reseller")->result_array()[0];
	}
	public function add_jual_mebel($idmebel, $idreseller, $jumlah) {
		$this->db->query("INSERT INTO jual_mebel (id_mebel, id_reseller, jumlah_mebel) VALUES ($idmebel, $idreseller, $jumlah)");
	}
	public function get_jual_mebel($idreseller) {
		return $this->db->query("SELECT * FROM jual_mebel INNER JOIN mebel ON jual_mebel.id_mebel=mebel.id_mebel WHERE jual_mebel.id_reseller=$idreseller");
	}
}
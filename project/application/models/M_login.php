<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	public function is_login_supplier($username, $password) {
		$this->db->where("user_supplier", $username);
		$this->db->where("pass_supplier", $password);
		return $this->db->get("supplier");
	}
	public function is_login_toko($username, $password) {
		$this->db->where("user_toko", $username);
		$this->db->where("pass_toko", $password);
		return $this->db->get("toko");
	}
	public function is_login_reseller($username, $password) {
		$this->db->where("user_reseller", $username);
		$this->db->where("pass_reseller", $password);
		return $this->db->get("reseller");
	}
}
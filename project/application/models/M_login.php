<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	public function is_login_supplier($username, $password) {
		$this->db->where("user_supplier", $username);
		$this->db->where("pass_supplier", $password);
		return $this->db->get("supplier");
	}
}
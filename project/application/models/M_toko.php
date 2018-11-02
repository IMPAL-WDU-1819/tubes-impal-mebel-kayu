<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_toko extends CI_Model {
	public function get_user($user) {
		$this->db->where("user_toko", $user);
		return $this->db->get("toko")->result_array()[0];
	}
}
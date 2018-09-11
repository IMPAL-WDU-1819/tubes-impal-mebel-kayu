<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_supplier extends CI_Model {
	public function get_kayu() {
		return $this->db->get("kayu");
	}
}
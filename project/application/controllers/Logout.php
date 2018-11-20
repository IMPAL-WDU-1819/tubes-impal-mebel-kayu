<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function supplier() {
		$this->session->unset_userdata('user_supplier');
		redirect('page');
	}
	public function toko() {
		$this->session->unset_userdata('user_toko');
		redirect('page');
	}
	public function reseller() {
		$this->session->unset_userdata('user_reseller');
		redirect('page');
	}
}
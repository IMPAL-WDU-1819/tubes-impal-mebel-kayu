<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
	public function get_hello() {
		$this->load->view('hello_view');
	}
}
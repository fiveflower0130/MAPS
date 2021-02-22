<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function test1()
	{
		$this->load->view('test/common/header');
		$this->load->view('test/test1');
		$this->load->view('test/common/footer');
	}
}

?>
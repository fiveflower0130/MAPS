<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createapp extends CI_Controller {
	public function index()
	{
		$this->load->view('createapp/common/header');
		$this->load->view('createapp/choose_template');
		$this->load->view('createapp/common/footer');
	}
	
	public function choose_template()
	{
		$this->load->view('createapp/common/header');
		$this->load->view('createapp/choose_template');
		$this->load->view('createapp/common/footer');
	}
	
	public function update_picture()
	{
		$this->load->view('createapp/common/header');
		$this->load->view('createapp/update_picture');
		$this->load->view('createapp/common/footer');
	}
	
	public function update_ad()
	{
		$this->load->view('createapp/common/header');
		$this->load->view('createapp/update_ad');
		$this->load->view('createapp/common/footer');
	}
	
	public function choose_function()
	{
		$this->load->view('createapp/common/header');
		$this->load->view('createapp/choose_function');
		$this->load->view('createapp/common/footer');
	}
	
	public function update_appicon()
	{
		$this->load->view('createapp/common/header');
		$this->load->view('createapp/update_appicon');
		$this->load->view('createapp/common/footer');
	}
}
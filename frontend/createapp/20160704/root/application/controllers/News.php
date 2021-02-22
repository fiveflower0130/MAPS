<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->nodel('news_model');
		$this->load->helper('url_helper');
	}
	
	public function index()
	{
		$data['news'] = $this->news_model->get_news();
	}
	
	public function view($slug = NULL)
	{
		$datda['news_item'] = $this->news_model->get_news($slug);
	}
}

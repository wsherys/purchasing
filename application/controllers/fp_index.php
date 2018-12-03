<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fp_index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
	}

	function index()
	{
		$this->load->view('bootstrap');
		$this->load->view('login.html');
	}

}

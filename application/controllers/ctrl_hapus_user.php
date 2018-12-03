<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class ctrl_hapus_user extends CI_Controller 
{
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('text');

		$logged=$this->session->userdata('logged');
       	if (!$logged)
        {
            redirect('fp_index/index');
		}

	}

	

	function hapus_data()
	{
		$this->load->view('sidebar');
		$this->load->view('hapus_data');
	}
	function hapus_po_request()
	{
		$id = $_GET['id']; 
		$this->db->query("DELETE FROM po_request WHERE id='".$id."' ");
		

		redirect('admin/request');
	}


	



	
}
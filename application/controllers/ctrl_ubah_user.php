<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class ctrl_ubah_user extends CI_Controller 
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

	function dashboard()
	{
		$this->load->view('message_top');
		$this->load->view('sidebar_sp');
		$this->load->view('dashboard_sp');
	}

	function ubah_user()
	{
		$this->load->view('sidebar_sp');
		$this->load->view('ubah_user');
	}

	function proses_user()
	{
		$id=$this->input->post('id');

		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		if(empty($password)){redirect('ctrl_ubah_user/ubah_user/?id='.$id.' ');}
		elseif(strlen($password) < 10){redirect('ctrl_ubah_user/ubah_user/?id='.$id.' ');}
		else
		{
			$user=array('nama'=>$nama, 'username'=>$username, 'password'=>md5($password) );
			echo $password;
			$this->db->where('id', $id);
		 	$this->db->update('user', $user);
		 	redirect('admin/akun');
	 	}
		
		
	}
	
}
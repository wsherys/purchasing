<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class ctrl_ubah_delivered extends CI_Controller 
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
		$this->load->view('sidebar');
		$this->load->view('dashboard');
	}

	function ubah_delivered()
	{
		$this->load->view('sidebar');
		$this->load->view('ubah_delivered');
	}

	function proses_delivered()
	{
		$id=$this->input->post('id');

		$no_request=$this->input->post('no_request');

		$nama_proyek=$this->input->post('nama_proyek');
		$description=$this->input->post('description');
		$quantity=$this->input->post('quantity');
		$unit=$this->input->post('unit');
		$tanggal_request=$this->input->post('tanggal_request');
		$pic=$this->input->post('pic');

		$user=$this->input->post('user');

		$no_po=$this->input->post('no_po');
		$vendor=$this->input->post('vendor');
		$status=$this->input->post('status');

		$preq = array('id'=>$id, 'no_request' => $no_request, 'nama_proyek' => $nama_proyek, 'description' => $description, 'quantity' => $quantity, 
					 'unit' => $unit, 'description' => $description, 'pic' => $pic, 'tanggal_request' => $tanggal_request, 
					 'no_po' => $no_po, 'vendor' => $vendor, 'status' => $status, 'user'=>$user);

		$po = array('no_request' => $no_request, 'nama_proyek' => $nama_proyek, 'description' => $description, 'quantity' => $quantity, 
					 'unit' => $unit, 'description' => $description, 'pic' => $pic, 'tanggal_request' => $tanggal_request, 'user'=>$user);

		
		if(empty($no_po))
		{
			redirect('ctrl_ubah_form/ubah_request/?id='.$id.' ');
		}
		// elseif (!preg_match("/^[a-zA-Z0-9.]*$/",$no_po)) 
		// {
		// 	redirect('ctrl_ubah_form/ubah_request/?id='.$id.' ');
	 	// }
		elseif(empty($vendor))
		{
			redirect('ctrl_ubah_form/ubah_request/?id='.$id.' ');
		}
		elseif(empty($status))
		{
			redirect('ctrl_ubah_form/ubah_request/?id='.$id.' ');
		}
		else
		{
			$this->k_delivered($preq);
		}
		
	}


	function k_delivered($preq)
	{
		$this->load->view('sidebar');
		$this->load->view('konfirmasi_delivered',$preq);
	}

	function f_delivered()
	{
		$id=$this->input->post('id');

		$no_request=$this->input->post('no_request');
		$nama_proyek=$this->input->post('nama_proyek');
		$description=$this->input->post('description');
		$quantity=$this->input->post('quantity');
		$unit=$this->input->post('unit');
		$tanggal_request=$this->input->post('tanggal_request');
		$pic=$this->input->post('pic');
		$user=$this->input->post('user');

		$no_po=$this->input->post('no_po');
		$vendor=$this->input->post('vendor');
		$status=$this->input->post('status');

		$preq = array('no_request' => $no_request, 'nama_proyek' => $nama_proyek, 'description' => $description, 'quantity' => $quantity, 
					 'unit' => $unit, 'description' => $description, 'pic' => $pic, 'tanggal_request' => $tanggal_request, 'no_po' => $no_po, 
					 'vendor' => $vendor, 'status' => $status, 'user'=>$user);

		$po = array('no_request' => $no_request, 'nama_proyek' => $nama_proyek, 'description' => $description, 'quantity' => $quantity, 
					 'unit' => $unit, 'description' => $description, 'pic' => $pic, 'tanggal_request' => $tanggal_request, 'user'=>$user);
		
		
		$this->db->where('id', $id);
		$this->db->update('po_process', $preq);

		$this->db->where('id', $id);
		$this->db->update('po', $po);

		redirect('admin/index');
	}
	
}
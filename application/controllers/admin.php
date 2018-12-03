<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('text');
		$this->load->helper('url');

		$logged=$this->session->userdata('logged');
       	if (!$logged)
        {
        	session_destroy();
            redirect('fp_index/index');
		}

	}

	function index()
	{
		if($this->session->userdata('kelas')=='admin')
		{
			$this->load->view('message_top');
			$this->load->view('sidebar');
			$this->load->view('dashboard');
		}
		
		elseif($this->session->userdata('kelas')=='superadmin')
		{
			 $this->load->view('message_top');
			 $this->load->view('sidebar_sp');
			 $this->load->view('dashboard_sp');
		}
		else
		{
			redirect('fp_index/index');
		}
	}

	function request()
	{
		$this->load->view('message_top');
		$this->load->view('sidebar');
		$this->load->view('po_request');
	}

	function request_sp()
	{
		$this->load->view('message_top');
		$this->load->view('sidebar_sp');
		$this->load->view('po_request');
	}

	

	function proses_request()
	{
		$no_request=$this->input->post('no_request');
		$nama_proyek=$this->input->post('nama_proyek');
		$description=$this->input->post('description');
		$quantity=$this->input->post('quantity');
		$unit=$this->input->post('unit');
		$tanggal_request=$this->input->post('tanggal_request');
		$pic=$this->input->post('pic');

		$user=$this->input->post('user');
		$req = array('no_request' => $no_request, 'nama_proyek' => $nama_proyek, 'description' => $description, 'quantity' => $quantity, 
					 'unit' => $unit, 'description' => $description, 'pic' => $pic, 'tanggal_request' => $tanggal_request, 'user'=>$user);

		// if(empty($no_request))
		// {
		// 	$this->load->view('message_top');
		// 	$this->load->view('sidebar');
		// 	$this->load->view('po_request_err',$req);
		// }
		// elseif(strlen($no_request) < 5)
		// {
		// 	$this->load->view('message_top');
		// 	$this->load->view('sidebar');
		// 	$this->load->view('po_request_err',$req);
		// }
		// elseif (!preg_match("/^[a-zA-Z0-9.]*$/",$no_request)) 
		// {
		// 	$this->load->view('message_top');
	 //      	$this->load->view('sidebar');
		// 	$this->load->view('po_request_err',$req); 
	 //    }
		if(empty($nama_proyek))
		{
			$this->load->view('message_top');
			$this->load->view('sidebar');
			$this->load->view('po_request_err',$req);
		}
		elseif(empty($description))
		{
			$this->load->view('message_top');
			$this->load->view('sidebar');
			$this->load->view('po_request_err',$req);
		}
		elseif(empty($quantity))
		{
			$this->load->view('message_top');
			$this->load->view('sidebar');
			$this->load->view('po_request_err',$req);
		}
		elseif(!preg_match("/^[0-9.]+$/",$quantity))
        {
        	$this->load->view('message_top');
          	$this->load->view('sidebar');
			$this->load->view('po_request_err',$req);
        }
		

		elseif(empty($unit))
		{
			$this->load->view('message_top');
			$this->load->view('sidebar');
			$this->load->view('po_request_err',$req);
		}
		elseif($unit=='pilih')
		{
			$this->load->view('message_top');
			$this->load->view('sidebar');
			$this->load->view('po_request_err',$req);
		}

		elseif(empty($pic))
		{
			$this->load->view('message_top');
			$this->load->view('sidebar');
			$this->load->view('po_request_err',$req);
		}
		elseif($pic=='pilih')
		{
			$this->load->view('message_top');
			$this->load->view('sidebar');
			$this->load->view('po_request_err',$req);
		}

		elseif(empty($tanggal_request))
		{
			$this->load->view('message_top');
			$this->load->view('sidebar');
			$this->load->view('po_request_err',$req);
		}

		else
		{
			$this->db->insert('po_request',$req);
			
			echo  '<script language="javascript">
			       alert ("data sukses ditambah!");
			       window.location="request";
					</script>';
			 		exit();
		}

	}
	
	function akun()
	{
		$this->session->userdata('id');
		$data = array('nama' =>$this->session->userdata('nama'));

		$this->load->view('message_top');
		$this->load->view('sidebar_sp',$data);
		$this->load->view('akun');
	}

	function form_akun()
	{
		//ins
		$nama=$this->input->post('nama');
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$kelas='admin';
		$online='0';


		$cekuser=$this->db->query("SELECT * FROM user WHERE username='".$username."' ")->num_rows();


		if(empty($nama))
		{
			echo  '<script language="javascript">
			       alert ("nama tidak boleh kosong. ");
			       window.location="akun";
					</script>';
			 		exit();
		}
		elseif(empty($username))
		{
			echo  '<script language="javascript">
			       alert ("username tidak boleh kosong. ");
			       window.location="akun";
					</script>';
			 		exit();
		}
		elseif($cekuser > 0)
		{
			echo  '<script language="javascript">
			       alert ("username sudah tersedia. ");
			       window.location="akun";
					</script>';
			 		exit();
		}
		elseif(empty($password))
		{
			echo  '<script language="javascript">
			       alert ("password tidak boleh kosong. ");
			       window.location="akun";
					</script>';
			 		exit();
		}
		elseif(!preg_match("/^[a-zA-Z0-9]*$/",$password))
		{
			echo  '<script language="javascript">
			       alert ("password a-z A-Z 0-9 tanpa spasi. ");
			       window.location="akun";
					</script>';
			 		exit();
		}
		else
		{
			$akun=array('nama'=>$nama,'username'=>$username,'password'=>$password, 'kelas'=>$kelas, 'online'=>$online);
			$this->db->insert('user',$akun);

			echo  '<script language="javascript">
				       alert ("pendaftaran sukses.. ");
				       window.location="akun";
						</script>';
				 		exit();
		}

		
	}
	
	function pic()
	{
		//ins
		$lokasi_file    = $_FILES['foto']['tmp_name'];
		$nama_file      = $_FILES['foto']['name'];
		$acak           = rand(1,99);
		$nama_file_unik = $acak.$nama_file;
		$vdir_upload = "assets/";
		$vfile_upload = $vdir_upload . $nama_file_unik;
		move_uploaded_file($_FILES["foto"]["tmp_name"], $vfile_upload);

		
		if (empty($lokasi_file)){
		redirect('admin/akun');
		}else{
		//mysql_query("INSERT INTO tb_images VALUES ('','$nama_file_unik')")or die (Error.mysql_error());
		// $data=array('image'=>$nama_file_unik);
		// $this->db->insert('user',$data);
		
		$id=$this->session->userdata('id');
		$this->db->query("UPDATE user SET image='$nama_file_unik' WHERE id='$id' ");

		redirect('admin/akun');
		
		}
	        
	}

	function logout()//untuk error nav admin 
    {
        $id=$this->session->userdata('id');
        $this->db->query("UPDATE user SET online='0' WHERE id='$id' ");
        session_start();
        session_destroy();

        redirect('fp_index/index');
    }
	
	
}
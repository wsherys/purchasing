<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class form_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('auth_model');

	}

	public function err_login($data)
    {
        $user=$this->input->post('username');
        $pass=md5($this->input->post('password'));
        $ol=$data['online'];
        //print_r($data);
        
        $dt=array('user'=>$user,'pass'=>$pass,'ol'=>$ol);

        $this->load->view('bootstrap');
        $this->load->view('login_err.html',$dt); 
    }

	public function login()
	{	
        $user = $this->input->post('username');
        $pass = md5($this->input->post('password'));

        $cek_user=$this->db->query("SELECT * FROM user WHERE username='$user' && password='$pass' ")->num_rows();
        
        if(empty($user))
        {
            $data=array('username'=>$user, 'password'=>$pass, 'online'=>0);
            $this->err_login($data);
        }
        elseif(empty($pass))
        {
           $data=array('username'=>$user, 'password'=>$pass, 'online'=>0);
           $this->err_login($data);
        }
        elseif(!preg_match("/^[a-z0-9]/",$user))
        {
            $data=array('username'=>$user, 'password'=>$pass, 'online'=>0);
            $this->err_login($data);
        }
        elseif($cek_user == 0)
        {
            $data=array('username'=>$user, 'password'=>$pass, 'online'=>0);
            $this->err_login($data);
        }
        else
        {
            $data=array('username' => $this->input->post('username',true), 'password' =>md5($this->input->post('password',true)));
            $this->load->model('auth_model');//load model user

            $hasil = $this->auth_model->cek_user($data);//cek data array

            if ($hasil->num_rows() == 1) 
            {
                foreach ($hasil->result() as $sess) 
                {
                    $sess_data['logged'] ='Sudah masuk';
                    $sess_data['id'] = $sess->id;
                    $sess_data['username'] = $sess->username;
                    $sess_data['password'] = $sess->password;
                    $sess_data['kelas'] = $sess->kelas;

                    $this->session->set_userdata($sess_data);
                }

               if($this->session->userdata('kelas')=='admin') 
                {
                    $user=$this->session->userdata('username');
                    $cek_log=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
                    foreach ($cek_log as $key){} $ol=$key->online;
                    
                    redirect('admin/index');
                }
                elseif($this->session->userdata('kelas')=='superadmin') 
                {
                    $user=$this->session->userdata('username');
                    $cek_log=$this->db->query("SELECT * FROM user WHERE username='$user' ")->result();
                    foreach ($cek_log as $key){} $ol=$key->online;
                    
                    redirect('admin/index');
                }

              
            }
        }          
	}

    function logout() 
    {
        $id=$this->session->userdata('id');
        $this->db->query("UPDATE user SET online='0' WHERE id='$id' ");
        session_start();
        session_destroy();

        redirect('fp_index/index');
    }
	

}

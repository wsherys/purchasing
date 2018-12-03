<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth_model extends CI_Model 
{
    
    private $table = "user";
    private $pk = "id";

    public function __construct() 
    {
        parent::__construct();
    }

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        return $this->db->get($this->table);
    }
    
    public function cek_user($data) 
    {
        $query = $this->db->get_where('user', $data);
        return $query;
    }

    public function update($data, $id)
    {
        $this->db->where($this->pk, $id);
        $this->db->update($this->table, $data);
    }
        
    public function get_by_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get($this->table);
    }

    


}
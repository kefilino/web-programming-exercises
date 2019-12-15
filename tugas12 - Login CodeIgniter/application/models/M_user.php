<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function fetch($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('users')->result();
    }
    public function biodata($username)
    {
        $this->db->select('biodata.*, users.email');
        $this->db->from('biodata');
        $this->db->join('users', 'biodata.username = users.username', 'left');
        if ($this->session->userdata['level'] != 0)
            $this->db->where('users.username', $this->session->userdata['username']);
        
        return $this->db->get()->result();
    }
}

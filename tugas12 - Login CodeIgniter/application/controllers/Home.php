<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $this->load->model('m_user');
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url());
        }
        $data['users'] = $this->m_user->biodata($this->session->userdata['username']);
        $this->load->view('v_home', $data);
	}
	public function logout()
	{
        $this->session->sess_destroy();
        redirect();
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('m_user');;
		if (!isset($this->session->userdata['username'])) {
			$this->load->view('v_login');
		} else redirect(base_url('index.php/Home'));
	}
	public function login()
	{
		$this->load->model('m_user');
		$username = $this->input->post('username' ,TRUE);
		$password = md5($this->input->post('password' ,TRUE));
		$users = $this->m_user->fetch($username, $password);
		if ($users) {
			foreach ($users as $user) {
				$this->session->set_userdata('username', $user->username);
				$this->session->set_userdata('password', $user->password);
				$this->session->set_userdata('level', $user->level);
			}
			redirect('Home');
		} else $this->index();
	}
}

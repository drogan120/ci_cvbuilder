<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

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

	public function __construct()
	{
		parent::__construct();
		aleready_login();
	}
	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('templates/header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/footer');
	}

	function process()
	{
		$post =  $this->input->post(null, true);
		if (isset($post)) {

			$this->load->model('user_m');
			$this->user_m->login($post);
			var_dump($post);
		}
	}


	public function register()
	{
		$this->form_validation->set_rules('uname', 'Username', 'trim|required');
		$this->form_validation->set_rules('mail_user', 'Email', 'trim|required|valid_email|is_unique[user.email_user]');
		$this->form_validation->set_rules('password1', 'Password', 'trim|required');
		$this->form_validation->set_rules('password2', 'Verify Passord', 'trim|required|matches[password1]');

		if ($this->form_validation->run() == TRUE) {

			$post =  $this->input->post(null, true);
			if (isset($post)) {

				$this->load->model('user_m');
				$this->user_m->register($post);
			}
		} else {
			$data['title'] = "Register";
			$this->load->view('templates/header', $data);
			$this->load->view('auth/register');
			$this->load->view('templates/footer');
		}
	}

	public function logout()
	{

		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('nama_lengkap');
		$this->session->unset_userdata('foto_profile');
		$this->session->sess_destroy();


		redirect('auth', 'refresh');
	}
}

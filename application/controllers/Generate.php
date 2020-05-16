<?php

class Generate extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		not_login();
		$this->load->model('achievement_m');
		$this->load->model('education_m');
		$this->load->model('experience_m');
		$this->load->model('profile_m');
		$this->load->model('refference_m');
		$this->load->model('skills_m');
		$this->load->model('organisasi_m');
		$this->load->model('bahasa_m');
		$this->load->model('interest_m');
	}

	function index()
	{
		$id = $this->session->userdata('id_user');
		$data['title'] = "Curricullum Vitae";

		$this->load->view('dashboard/header', $data);
		$this->load->view('cv_templates/generate.php', $data);
		$this->load->view('templates/footer');
	}

	function type1()
	{
		$post = $this->input->post(null, true);
		if ($post) {
			$data['warna'] = $post;
			$id = $this->session->userdata('id_user');
			$data['title'] = "Curricullum Vitae";
			$data['achievements'] = $this->achievement_m->get($id);
			$data['educations'] = $this->education_m->get($id);
			$data['experiences'] = $this->experience_m->get($id);
			$data['profiles'] = $this->profile_m->get($id);
			$data['refferences'] = $this->refference_m->get($id);
			$data['skills'] = $this->skills_m->get($id);
			$data['organisasi'] = $this->organisasi_m->get($id);
			$data['bahasa'] = $this->bahasa_m->get($id);
			$data['interest'] = $this->interest_m->get($id);
			$this->load->view('cv_templates/header', $data);
			$this->load->view('cv_templates/1', $data);
			$this->load->view('templates/footer');
		}
	}

	function type2()
	{
		$post = $this->input->post(null, true);
		if ($post) {
			$data['warna'] = $post;
			$id = $this->session->userdata('id_user');
			$data['title'] = "Curricullum Vitae";
			$data['achievements'] = $this->achievement_m->get($id);
			$data['educations'] = $this->education_m->get($id);
			$data['experiences'] = $this->experience_m->get($id);
			$data['profiles'] = $this->profile_m->get($id);
			$data['refferences'] = $this->refference_m->get($id);
			$data['skills'] = $this->skills_m->get($id);
			$data['organisasi'] = $this->organisasi_m->get($id);
			$data['bahasa'] = $this->bahasa_m->get($id);
			$data['interest'] = $this->interest_m->get($id);
			$this->load->view('cv_templates/header', $data);
			$this->load->view('cv_templates/2', $data);
			$this->load->view('templates/footer');
		}
	}

	function type3()
	{
		$post = $this->input->post(null, true);
		if ($post) {
			$data['warna'] = $post;
			$id = $this->session->userdata('id_user');
			$data['title'] = "Curricullum Vitae";
			$data['achievements'] = $this->achievement_m->get($id);
			$data['educations'] = $this->education_m->get($id);
			$data['experiences'] = $this->experience_m->get($id);
			$data['profiles'] = $this->profile_m->get($id);
			$data['refferences'] = $this->refference_m->get($id);
			$data['skills'] = $this->skills_m->get($id);
			$data['organisasi'] = $this->organisasi_m->get($id);
			$data['interest'] = $this->interest_m->get($id);
			$data['bahasa'] = $this->bahasa_m->get($id);
			$this->load->view('cv_templates/header', $data);
			$this->load->view('cv_templates/3', $data);
			$this->load->view('templates/footer');
		}
	}
	function type4()
	{
		$post = $this->input->post(null, true);
		if ($post) {
			$data['warna'] = $post;
			$id = $this->session->userdata('id_user');
			$data['title'] = "Curricullum Vitae";
			$data['achievements'] = $this->achievement_m->get($id);
			$data['educations'] = $this->education_m->get($id);
			$data['experiences'] = $this->experience_m->get($id);
			$data['profiles'] = $this->profile_m->get($id);
			$data['refferences'] = $this->refference_m->get($id);
			$data['skills'] = $this->skills_m->get($id);
			$data['organisasi'] = $this->organisasi_m->get($id);
			$data['interest'] = $this->interest_m->get($id);
			$data['bahasa'] = $this->bahasa_m->get($id);
			$this->load->view('cv_templates/header', $data);
			$this->load->view('cv_templates/4', $data);
			$this->load->view('templates/footer');
		}
	}
}

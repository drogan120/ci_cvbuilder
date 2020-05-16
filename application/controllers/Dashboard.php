<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		not_login();
	}
	public function logout()
	{

		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('nama_lengkap');
		$this->session->unset_userdata('foto_profile');
		$this->session->sess_destroy();


		redirect('auth', 'refresh');
	}
	public function index()
	{

		$data['title'] = "Dashboard";
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/home');
		$this->load->view('dashboard/footer');
	}

	public function create_profile()
	{
		$id = $this->session->userdata('id_user');
		$nama = $this->session->userdata('nama_lengkap');
		$email = $this->session->userdata('email_user');
		$data = [
			'id_user' => $id,
			'nama_lengkap' => $nama,
			'email' => $email
		];
		$this->load->model('profile_m');
		$data['profiles'] = $this->profile_m->create($data);
	}

	public function profile()
	{
		$id = $this->session->userdata('id_user');
		$this->load->model('profile_m');
		$data['title'] = "Profile";
		$data['profiles'] = $this->profile_m->get($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/profile', $data);
		$this->load->view('dashboard/footer');
	}

	function set_profile()
	{
		$this->load->model('user_m');
		$foto = $_FILES['foto'];
		$foto = $_FILES['foto']['name'];
		$lokasi = $_FILES['foto']['tmp_name'];
		$ektensigambarvalid = ['jpg', 'jpeg', 'png'];
		$ekstensigamber = explode('.', $foto);
		$ekstensigamber = strtolower(end($ekstensigamber));
		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigamber;

		if (!empty($foto)) {
			if (!in_array($ekstensigamber, $ektensigambarvalid)) {

				echo "<script>alert('yang anda upload bukan gambar')</script>";
				die;
			} else {

				move_uploaded_file($lokasi, 'assets/img/foto_profile/' . $namafilebaru);
			}

			$data = [

				"id_profile" 					=> $this->input->post('id_profile'),
				"nama_lengkap" 					=> $this->input->post('nama'),
				"tempat_tgl_lahir" 				=> $this->input->post('tempat_tgl_lahir'),
				"email" 						=> $this->input->post('email'),
				"telepon" 						=> $this->input->post('telepon'),
				"deskripsi" 					=> $this->input->post('deskripsi'),
				"alamat" 						=> $this->input->post('alamat'),
				"foto_profile" 					=> $namafilebaru,


			];
			$id = $this->input->post('id_user');
			$this->user_m->set_profile($data, $id);
		} else {

			$data = [

				"id_profile" 					=> $this->input->post('id_profile'),
				"nama_lengkap" 					=> $this->input->post('nama'),
				"tempat_tgl_lahir" 				=> $this->input->post('tempat_tgl_lahir'),
				"email" 						=> $this->input->post('email'),
				"telepon" 						=> $this->input->post('telepon'),
				"deskripsi" 						=> $this->input->post('deskripsi'),
				"alamat" 						=> $this->input->post('alamat'),



			];
			$id = $this->input->post('id_user');
			$this->user_m->set_profile($data, $id);
		}
	}

	public function education()
	{
		$id = $this->session->userdata('id_user');
		$this->load->model('education_m');
		$data['title'] = "Pendidikan";
		$data['education'] = $this->education_m->get($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/education', $data);
		$this->load->view('dashboard/footer');
	}
	public function organisasi()
	{
		$id = $this->session->userdata('id_user');
		$this->load->model('organisasi_m');
		$data['title'] = "Organisasi";
		$data['organisasi'] = $this->organisasi_m->get($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/organisasi', $data);
		$this->load->view('dashboard/footer');
	}
	public function refference()
	{
		$id = $this->session->userdata('id_user');
		$this->load->model('refference_m');
		$data['title'] = "Refference";
		$data['refference'] = $this->refference_m->get($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/refference', $data);
		$this->load->view('dashboard/footer');
	}

	public function achievement()
	{
		$id = $this->session->userdata('id_user');
		$this->load->model('achievement_m');
		$data['title'] = "Achievement";
		$data['achievement'] = $this->achievement_m->get($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/achievement', $data);
		$this->load->view('dashboard/footer');
	}

	public function skills()
	{
		$id = $this->session->userdata('id_user');
		$this->load->model('skills_m');
		$data['title'] = "Skills";
		$data['skills'] = $this->skills_m->get($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/skills', $data);
		$this->load->view('dashboard/footer');
	}
	public function experience()
	{
		$id = $this->session->userdata('id_user');
		$this->load->model('experience_m');
		$data['title'] = "Pengalaman";
		$data['experience'] = $this->experience_m->get($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/experience', $data);
		$this->load->view('dashboard/footer');
	}

	public function bahasa()
	{
		$id = $this->session->userdata('id_user');
		$this->load->model('bahasa_m');
		$data['title'] = "Bahasa";
		$data['bahasa'] = $this->bahasa_m->get($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/bahasa', $data);
		$this->load->view('dashboard/footer');
	}

	public function interest()
	{
		$id = $this->session->userdata('id_user');
		$this->load->model('interest_m');
		$data['title'] = "interest";
		$data['interest'] = $this->interest_m->get($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/interest', $data);
		$this->load->view('dashboard/footer');
	}

	public function add_experience()
	{
		$id = $this->session->userdata('id_user');
		$post =  $this->input->post(null, true);
		if (isset($post)) {

			$this->load->model('experience_m');
			$this->experience_m->add($post, $id);
		}
	}
	public function add_interest()
	{
		$id = $this->session->userdata('id_user');
		$post =  $this->input->post(null, true);
		if (isset($post)) {

			$this->load->model('interest_m');
			$this->interest_m->add($post, $id);
		}
	}
	public function add_bahasa()
	{
		$id = $this->session->userdata('id_user');
		$post =  $this->input->post(null, true);
		if (isset($post)) {

			$this->load->model('bahasa_m');
			$this->bahasa_m->add($post, $id);
		}
	}

	public function add_organisasi()
	{
		$id = $this->session->userdata('id_user');
		$post =  $this->input->post(null, true);
		if (isset($post)) {

			$this->load->model('organisasi_m');
			$this->organisasi_m->add($post, $id);
		}
	}

	public function add_skills()
	{
		$id = $this->session->userdata('id_user');
		$post =  $this->input->post(null, true);
		if (isset($post)) {

			$this->load->model('skills_m');
			$this->skills_m->add($post, $id);
		}
	}

	public function add_education()
	{
		$id = $this->session->userdata('id_user');
		$post =  $this->input->post(null, true);
		if (isset($post)) {

			$this->load->model('education_m');
			$this->education_m->add($post, $id);
		}
	}

	public function add_achievement()
	{
		$id = $this->session->userdata('id_user');
		$post =  $this->input->post(null, true);
		if (isset($post)) {

			$this->load->model('achievement_m');
			$this->achievement_m->add($post, $id);
		}
	}

	public function add_refference()
	{
		$id = $this->session->userdata('id_user');
		$post =  $this->input->post(null, true);
		if (isset($post)) {

			$this->load->model('refference_m');
			$this->refference_m->add($post, $id);
		}
	}

	public function ubah_edu($id)
	{
		$this->load->model('education_m');
		$data['title'] = "Ubah Pendidikan";
		$data['education'] = $this->education_m->getbyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/ubah_edu', $data);
		$this->load->view('dashboard/footer');
	}
	public function ubah_int($id)
	{
		$this->load->model('interest_m');
		$data['title'] = "Ubah Pendidikan";
		$data['interest'] = $this->interest_m->getbyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/ubah_int', $data);
		$this->load->view('dashboard/footer');
	}
	public function ubah_organisasi($id)
	{
		$this->load->model('organisasi_m');
		$data['title'] = "Ubah Organisasi";
		$data['organisasi'] = $this->organisasi_m->getbyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/ubah_organisasi', $data);
		$this->load->view('dashboard/footer');
	}

	public function ubah_exp($id)
	{
		$this->load->model('experience_m');
		$data['title'] = "Ubah Pengalaman";
		$data['experience'] = $this->experience_m->getbyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/ubah_exp', $data);
		$this->load->view('dashboard/footer');
	}

	public function ubah_bahasa($id)
	{
		$this->load->model('bahasa_m');
		$data['title'] = "Ubah Pengalaman";
		$data['bahasa'] = $this->bahasa_m->getbyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/ubah_bahasa', $data);
		$this->load->view('dashboard/footer');
	}
	public function ubah_skill($id)
	{
		$this->load->model('skills_m');
		$data['title'] = "Ubah Skills";
		$data['skills'] = $this->skills_m->getbyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/ubah_skills', $data);
		$this->load->view('dashboard/footer');
	}
	public function ubah_ach($id)
	{
		$this->load->model('achievement_m');
		$data['title'] = "Ubah Penghargaan";
		$data['achievement'] = $this->achievement_m->getbyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/ubah_ach', $data);
		$this->load->view('dashboard/footer');
	}
	public function ubah_reff($id)
	{
		$this->load->model('refference_m');
		$data['title'] = "Ubah Refferensi";
		$data['refference'] = $this->refference_m->getbyid($id);
		$this->load->view('dashboard/header', $data);
		$this->load->view('dashboard/ubah_reff', $data);
		$this->load->view('dashboard/footer');
	}

	public function update_education()
	{
		$post = $this->input->post(null, true);

		if (isset($post)) {
			$this->load->model('education_m');
			$this->education_m->update($post);
		}
	}

	public function update_interest()
	{
		$post = $this->input->post(null, true);

		if (isset($post)) {
			$this->load->model('interest_m');
			$this->interest_m->update($post);
		}
	}

	public function update_bahasa()
	{
		$post = $this->input->post(null, true);

		if (isset($post)) {
			$this->load->model('bahasa_m');
			$this->bahasa_m->update($post);
		}
	}

	public function update_experience()
	{
		$post = $this->input->post(null, true);

		if (isset($post)) {
			$this->load->model('experience_m');
			$this->experience_m->update($post);
		}
	}
	public function update_organisasi()
	{
		$post = $this->input->post(null, true);

		if (isset($post)) {
			$this->load->model('organisasi_m');
			$this->organisasi_m->update($post);
		}
	}

	public function update_skills()
	{
		$post = $this->input->post(null, true);

		if (isset($post)) {
			$this->load->model('skills_m');
			$this->skills_m->update($post);
		}
	}

	public function update_achievement()
	{
		$post = $this->input->post(null, true);

		if (isset($post)) {
			$this->load->model('achievement_m');
			$this->achievement_m->update($post);
		}
	}
	public function update_refference()
	{
		$post = $this->input->post(null, true);

		if (isset($post)) {
			$this->load->model('refference_m');
			$this->refference_m->update($post);
		}
	}
	public function hapus_edu($id)
	{
		$this->load->model('education_m');
		$this->education_m->delete($id);
	}
	public function hapus_int($id)
	{
		$this->load->model('interest_m');
		$this->interest_m->delete($id);
	}
	public function hapus_organisasi($id)
	{
		$this->load->model('organisasi_m');
		$this->organisasi_m->delete($id);
	}
	public function hapus_exp($id)
	{
		$this->load->model('experience_m');
		$this->experience_m->delete($id);
	}
	public function hapus_skill($id)
	{
		$this->load->model('skills_m');
		$this->skills_m->delete($id);
	}
	public function hapus_ach($id)
	{
		$this->load->model('achievement_m');
		$this->achievement_m->delete($id);
	}
	public function hapus_reff($id)
	{
		$this->load->model('refference_m');
		$this->refference_m->delete($id);
	}
	public function hapus_bahasa($id)
	{
		$this->load->model('bahasa_m');
		$this->bahasa_m->delete($id);
	}
}

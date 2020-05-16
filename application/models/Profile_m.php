<?php

class Profile_m extends Ci_model
{

	public function get($id)
	{
		$this->db->from('profile');
		$this->db->join('user', 'profile.id_user = user.id_user', 'right');
		$this->db->where('user.id_user', $id);
		return $this->db->get()->result_array();
	}

	public function create($data)
	{

		$id = $data['id_user'];

		$this->db->insert('profile', $data);
		$this->db->where('id_user', $id);


		redirect('dashboard', 'refresh');
	}
}

<?php

class Experience_m extends Ci_model
{

	public function get($id)
	{
		$this->db->from('experience');
		$this->db->where('id_user', $id);
		return $this->db->get()->result_array();
	}

	public function add($post, $id)
	{

		$data = [

			'id_user' => $id,
			'nama' => $post['instansi'],
			'jabatan' => $post['jabatan'],
			'sejak' => $post['sejak'],
			'sampai' => $post['sampai'],

		];

		$this->db->insert('experience', $data);
		redirect('dashboard/experience');
	}
	public function delete($id)
	{
		$this->db->where('id_experience', $id);
		$this->db->delete('experience');

		redirect('dashboard/experience', 'refresh');
	}
	public function getbyid($id)
	{
		$this->db->from('experience');
		$this->db->where('id_experience', $id);
		return $this->db->get()->result_array();
	}

	public function update($post)
	{

		$data = [

			'nama' => $post['instansi'],
			'jabatan' => $post['jabatan'],
			'sejak' => $post['sejak'],
			'sampai' => $post['sampai'],

		];
		$this->db->where('id_experience', $post['id']);
		$this->db->update('experience', $data);

		redirect('dashboard/experience');
	}
}

<?php

class Skills_m extends Ci_model
{

	public function get($id)
	{
		$this->db->from('skills');
		$this->db->where('id_user', $id);
		return $this->db->get()->result_array();
	}

	public function getbyid($id)
	{
		$this->db->from('skills');
		$this->db->where('id_skills', $id);
		return $this->db->get()->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_skills', $id);
		$this->db->delete('skills');

		redirect('dashboard/skills', 'refresh');
	}
	public function add($post, $id)
	{

		$data = [

			'id_user' => $id,
			'nama' => $post['nama'],
			'scale' => $post['tingkat'],
			'pengalaman' => $post['pengalaman'],


		];


		$this->db->insert('skills', $data);
		redirect('dashboard/skills');
	}

	public function update($post)
	{

		$data = [

			'nama' => $post['nama'],
			'scale' => $post['tingkat'],
			'pengalaman' => $post['pengalaman'],


		];

		$this->db->where('id_skills', $post['id']);
		$this->db->update('skills', $data);

		redirect('dashboard/skills');
	}
}

<?php

class Achievement_m extends Ci_model
{

	public function get($id)
	{
		$this->db->from('achievement');
		$this->db->where('id_user', $id);
		return $this->db->get()->result_array();
	}

	public function add($post, $id)
	{

		$data = [

			'id_user' => $id,
			'nama' => $post['sertifikat'],
			'lembaga' => $post['lembaga'],
			'tahun' => $post['tahun'],


		];

		$this->db->insert('achievement', $data);
		redirect('dashboard/achievement');
	}

	public function delete($id)
	{
		$this->db->where('id_achievement', $id);
		$this->db->delete('achievement');

		redirect('dashboard/achievement', 'refresh');
	}

	public function getbyid($id)
	{
		$this->db->from('achievement');
		$this->db->where('id_achievement', $id);
		return $this->db->get()->result_array();
	}

	public function update($post)
	{

		$data = [

			'nama' => $post['sertifikat'],
			'lembaga' => $post['lembaga'],
			'tahun' => $post['tahun'],


		];

		$this->db->where('id_achievement', $post['id']);
		$this->db->update('achievement', $data);

		redirect('dashboard/achievement');
	}
}

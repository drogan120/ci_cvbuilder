<?php

class Education_m extends Ci_model
{

	public function get($id)
	{
		$this->db->from('education');
		$this->db->where('id_user', $id);
		return $this->db->get()->result_array();
	}
	public function getbyid($id)
	{
		$this->db->from('education');
		$this->db->where('id_education', $id);
		return $this->db->get()->result_array();
	}

	public function add($post, $id)
	{

		$data = [

			'id_user' => $id,
			'nama' => $post['sekolah'],
			'tingkat' => $post['tingkat'],
			'kota' => $post['kota'],
			'sejak' => $post['sejak'],
			'sampai' => $post['sampai'],

		];
		$this->db->insert('education', $data);
		redirect('dashboard/education');
	}
	public function delete($id)
	{
		$this->db->where('id_education', $id);
		$this->db->delete('education');

		redirect('dashboard/education', 'refresh');
	}

	public function update($post)
	{
		$data = [

			'nama' => $post['sekolah'],
			'tingkat' => $post['tingkat'],
			'kota' => $post['kota'],
			'sejak' => $post['sejak'],
			'sampai' => $post['sampai'],

		];

		$this->db->where('id_education', $post['id']);
		$this->db->update('education', $data);
		redirect('dashboard/education');
	}
}

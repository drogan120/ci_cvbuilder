<?php

class Refference_m extends Ci_model
{

	public function get($id)
	{
		$this->db->from('refference');
		$this->db->where('id_user', $id);
		return $this->db->get()->result_array();
	}

	public function getbyid($id)
	{
		$this->db->from('refference');
		$this->db->where('id_refference', $id);
		return $this->db->get()->result_array();
	}
	public function delete($id)
	{
		$this->db->where('id_refference', $id);
		$this->db->delete('refference');

		redirect('dashboard/refference', 'refresh');
	}
	public function add($post, $id)
	{

		$data = [

			'id_user' => $id,
			'nama' => $post['nama'],
			'email' => $post['email'],
			'status' => $post['status'],
			'phone' => $post['phone'],


		];

		$this->db->insert('refference', $data);
		redirect('dashboard/refference');
	}

	public function update($post)
	{

		$data = [

			'nama' => $post['nama'],
			'email' => $post['email'],
			'status' => $post['status'],
			'phone' => $post['phone'],

		];
		$this->db->where('id_refference', $post['id']);
		$this->db->update('refference', $data);

		redirect('dashboard/refference');
	}
}

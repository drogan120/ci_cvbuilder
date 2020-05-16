<?php

class Interest_m extends Ci_model
{

    public function get($id)
    {
        $this->db->from('interest');
        $this->db->where('id_user', $id);
        return $this->db->get()->result_array();
    }

    public function getbyid($id)
    {
        $this->db->from('interest');
        $this->db->where('id_interest', $id);
        return $this->db->get()->result_array();
    }
    public function delete($id)
    {
        $this->db->where('id_interest', $id);
        $this->db->delete('interest');

        redirect('dashboard/interest', 'refresh');
    }
    public function add($post, $id)
    {

        $data = [

            'id_user' => $id,
            'nama' => $post['interest'],

        ];

        $this->db->insert('interest', $data);
        redirect('dashboard/interest');
    }

    public function update($post)
    {

        $data = [

            'nama' => $post['nama'],


        ];
        $this->db->where('id_interest', $post['id']);
        $this->db->update('interest', $data);


        redirect('dashboard/interest');
    }
}

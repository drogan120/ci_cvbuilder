<?php

class Bahasa_m extends Ci_model
{

    public function get($id)
    {
        $this->db->from('bahasa');
        $this->db->where('id_user', $id);
        return $this->db->get()->result_array();
    }

    public function getbyid($id)
    {
        $this->db->from('bahasa');
        $this->db->where('id_bahasa', $id);
        return $this->db->get()->result_array();
    }
    public function delete($id)
    {
        $this->db->where('id_bahasa', $id);
        $this->db->delete('bahasa');

        redirect('dashboard/bahasa', 'refresh');
    }
    public function add($post, $id)
    {

        $data = [

            'id_user' => $id,
            'nama' => $post['nama'],
            'scale' => $post['scale'],
            'status' => $post['status'],


        ];


        $this->db->insert('bahasa', $data);
        redirect('dashboard/bahasa');
    }

    public function update($post)
    {

        $data = [

            'nama' => $post['nama'],
            'scale' => $post['scale'],
            'status' => $post['status'],


        ];

        $this->db->where('id_bahasa', $post['id']);
        $this->db->update('bahasa', $data);

        redirect('dashboard/bahasa');
    }
}

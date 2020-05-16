<?php

class Organisasi_m extends Ci_model
{

    public function get($id)
    {
        $this->db->from('organisasi');
        $this->db->where('id_user', $id);
        return $this->db->get()->result_array();
    }

    public function getbyid($id)
    {
        $this->db->from('organisasi');
        $this->db->where('id_organisasi', $id);
        return $this->db->get()->result_array();
    }
    public function delete($id)
    {
        $this->db->where('id_organisasi', $id);
        $this->db->delete('organisasi');

        redirect('dashboard/organisasi', 'refresh');
    }
    public function add($post, $id)
    {

        $data = [

            'id_user' => $id,
            'nama' => $post['nama'],
            'tahun' => $post['tahun'],


        ];


        $this->db->insert('organisasi', $data);
        redirect('dashboard/organisasi');
    }

    public function update($post)
    {

        $data = [

            'nama' => $post['nama'],
            'tahun' => $post['tahun']


        ];

        $this->db->where('id_organisasi', $post['id']);
        $this->db->update('organisasi', $data);

        redirect('dashboard/organisasi');
    }
}

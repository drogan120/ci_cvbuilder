<?php

class User_m extends CI_Model
{

    public function login($post)
    {

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email_user', $post['email']);
        $query =  $this->db->get()->row();
        if ($query) {
            if (password_verify($post['password'], $query->password)) {

                $this->db->where('id_user', $query->id_user);
                $foto = $this->db->get('profile')->row();

                $array = array(

                    'id_user' => $query->id_user,
                    'nama_lengkap' => $query->username,
                    'email_user' => $query->email_user,
                    'foto_profile' => $foto->foto_profile
                );


                $this->session->set_userdata($array);
                redirect('dashboard', 'refresh');
            } else {
                echo "<script>alert('username/password salah')<script/>";
                redirect('auth', 'refresh');
            }
        } else {
            echo "<script>alert('username/password salah')<script/>";
            redirect('auth', 'refresh');
        }
    }

    public function set_profile($data)
    {
        $this->db->from('profile');
        $this->db->where('id_profile', $data['id_profile']);
        $this->db->update('profile', $data);
        redirect('dashboard/profile');
    }

    public function register($post)
    {

        $password = password_hash($post['password2'], PASSWORD_DEFAULT);
        $data = [

            'username' => $post['uname'],
            'password' => $password,
            'email_user' => $post['mail_user'],

        ];

        $this->db->insert('user', $data);
        redirect('auth');
    }
}

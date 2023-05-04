<?php

class User_model extends CI_Model
{
    public function register($tabun){

        $data = array(
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $tabun,
        );

        $this->db->insert('user', $data);
    }

    public function login($username, $password){
        //SELECT * FROM user WHERE username= $username AND password=$password
        //validasi ke database
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $sql = $this->db->get('user');

        if ($sql->num_rows() == 1) {
            return $sql->row()->id;
        } else {
            return false;
        }
        }
}
?>
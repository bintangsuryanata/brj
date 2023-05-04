<?php

class User extends CI_Controller
{ 
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url', 'form');
        $this->load->library(array('form_validation', 'session'));
    }

    //function daftar
    public function daftar(){
        $data['title'] = 'Daftar';

        //untuk menentukan aturan (rules)
        $this->form_validation->set_rules('email','Email', 'required',
            [
                'required' => 'Email Wajib Diisi'
            ]);
        $this->form_validation->set_rules('username','Username', 'required|callback_cek_username',
            [
                'cek_username' => 'Username Sudah Terdaftar', 'required' => 'Username Wajib Diisi'
            ]);
        $this->form_validation->set_rules('password','Password', 'required|min_length[6]|max_length[30]',
            [
                'required' => 'Password Wajib Diisi', 'min_length' => 'Password minimal 6 karakter',
                'max_length' => 'Password maksimal 30 karakter'
            ]);

        //logika jika gagal daftar
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('daftar');
        }else {
            //logika jika berhasil daftar
           $tabun = md5($this->input->post('password'));
           $this->user_model->register($tabun);

            $this->session->set_flashdata('register_success', 'Selamat anda sudah terdaftar');

            redirect('user/login');
        }
    }

    public function cek_username($username){
      $superman = $this->db->get_where('user', array('username' => $username));
        if (empty($superman->row_array())) {
            return true;
        }else {
            return false;
        }
    }

    // public function login(){
    //     $this->load->view('login');
        
    // }

    //validasi 2 data (Username & Password)
    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'required',
            [
                'required' => 'Username Wajib di isi'
            ]);
        $this->form_validation->set_rules('password', 'Password', 'required',
                [
                    'required' => 'Password Wajib di isi'
                ]);

        //Jika validasi Salah
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('login');
        } else {

            // Get Username & Password
            $username =  $this->input->post('username');
            $password = md5($this->input->post('password'));

            $data = $this->user_model->login($username, $password);


            //Membuat session baru
            if ($data) {
                $id = array(
                    'id' => $data,
                    'username' => $username,
                    'logged_in' => true
                );

                $this->session->set_userdata($id);
                $this->session->set_flashdata('berhasil_login', 'Anda Berhasil Login');
                redirect('dashboard');
            } else{
                $this->session->set_flashdata('gagal_login', 'Username dan Password Salah');
                redirect('user/login');
            }
        }
    }
    public function logout(){
        //unset isi userdata
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('username');

        //menampilkan pesan logout
        $this->session->set_flashdata('user_logout', 'Anda Berhasil Logout');

        redirect('user/login');
    }
}
?>
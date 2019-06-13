<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => 'Username tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Username tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login Admin! | Bersih Hijau';
            $this->load->view('admin/login', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $admin = $this->db->get_where('admin', ['username' => $username])->row_array();

            if ($admin) {
                if ($password == $admin['password']) {
                    $data = [
                        'username' => $admin['username'],
                        'status' => 'login'
                    ];

                    $this->session->set_userdata($data);
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password anda salah!</div>');
                    redirect('admin/login');
                }
            }
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Jual Sampah Anda! | Bersih Hijau';
        $this->load->view('depan/jual', $data);
    }

    public function tambah()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat') . ', ' . $this->input->post('kelurahan') . ', ' . $this->input->post('kecamatan'),
            'tanggal' => $this->input->post('tanggal')
        ];

        $this->db->insert('jual', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda telah melakukan submit jual sampah! Anda akan menerima telp dari tim kami untuk melakukan konfirmasi.</div>');
        redirect('jual');
    }
}

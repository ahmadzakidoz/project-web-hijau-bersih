<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Timhijau extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => '*nama tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim|numeric', [
            'required' => '*no. telp/hp tidak boleh kosong!',
            'numeric' => 'no. telp/hp tidak benar!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tim_hijau.email]', [
            'required' => '*email tidak boleh kosong!',
            'valid_email' => '*email tidak valid!',
            'is_unique' => '*email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('kelurahan', 'Kelurahan', 'required|trim', [
            'required' => '*kelurahan tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim', [
            'required' => '*kecamatan tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Tim Hijau! | Bersih Hijau';
            $this->load->view('template/top', $data);
            $this->load->view('depan/hijau');
            $this->load->view('template/footer');
        } else {
            $upload_gambar = $_FILES['foto']['name'];

            if ($upload_gambar) {
                $config['upload_path'] = './assets/img/timhijau/';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']     = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $data = [
                        'nama' => $this->input->post('nama'),
                        'telp' => $this->input->post('telp'),
                        'email' => $this->input->post('email'),
                        'alamat' => $this->input->post('kelurahan') . ', ' . $this->input->post('kecamatan'),
                        'foto' => $this->upload->data('file_name')
                    ];

                    $this->db->insert('tim_hijau', $data);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data anda akan segera kami tinjau dan tunggu konfirmasi dari kami!</div>');
                    redirect('timhijau');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gambar Tidak Sesuai! format: jpg/png maks 2mb</div>');
                    redirect('timhijau');
                }
            }
        }
    }
}

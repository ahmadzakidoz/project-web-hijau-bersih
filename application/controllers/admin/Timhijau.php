<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Timhijau extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('admin/login');
        }
    }

    public function index()
    {
        $data['judul'] = 'Tim Hijau! | Bersih Hijau';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata['username']])->row_array();

        $data['tim_hijau'] = $this->db->get('tim_hijau')->result();

        $this->load->view('template/admin_topsidebar', $data);
        $this->load->view('admin/timhijau', $data);
        $this->load->view('template/admin_footer');
    }

    public function edit()
    {
        $upload_gambar = $_FILES['foto']['name'];

        if ($upload_gambar) {
            $config['upload_path'] = './assets/img/timhijau/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'telp' => $this->input->post('telp'),
                    'email' => $this->input->post('email'),
                    'alamat' => $this->input->post('alamat'),
                    'foto' => $this->upload->data('file_name'),
                    'status' => $this->input->post('status')
                ];

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('tim_hijau', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-success" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Timhijau berhasil diedit!</div>');
                redirect('admin/timhijau');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-danger" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Foto Tidak Sesuai!</div>');
                redirect('admin/timhijau');
            }
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'telp' => $this->input->post('telp'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat'),
                'status' => $this->input->post('status')
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('tim_hijau', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-success" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Timhijau berhasil diedit!</div>');
            redirect('admin/timhijau');
        }
    }

    public function hapus()
    {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('tim_hijau');
        $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-success" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Timhijau dihapus!</div>');
        redirect('admin/timhijau');
    }
}

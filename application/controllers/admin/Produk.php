<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
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
        $data['judul'] = 'Produk! | Bersih Hijau';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata['username']])->row_array();

        $data['produk'] = $this->db->get('produk')->result();

        $this->load->view('template/admin_topsidebar', $data);
        $this->load->view('admin/produk', $data);
        $this->load->view('template/admin_footer');
    }

    public function tambah_produk()
    {
        $upload_gambar = $_FILES['gambar']['name'];

        if ($upload_gambar) {
            $config['upload_path'] = './assets/img/produk/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'gambar' => $this->upload->data('file_name')
                ];

                $this->db->insert('produk', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-success" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Produk berhasil ditambah!</div>');
                redirect('admin/produk');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-danger" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Gambar Tidak Sesuai!</div>');
                redirect('admin/produk');
            }
        }

        $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-danger" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Gambar Tidak Boleh Kosong!</div>');
        redirect('admin/produk');
    }

    public function edit_produk()
    {
        $upload_gambar = $_FILES['gambar']['name'];

        if ($upload_gambar) {
            $config['upload_path'] = './assets/img/produk/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $data = [
                    'nama' => $this->input->post('nama'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'gambar' => $this->upload->data('file_name')
                ];

                $this->db->where('id', $this->input->post('id'));
                $this->db->update('produk', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-success" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Produk berhasil diedit!</div>');
                redirect('admin/produk');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-danger" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Gambar Tidak Sesuai!</div>');
                redirect('admin/produk');
            }
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga')
            ];

            $this->db->where('id', $this->input->post('id'));
            $this->db->update('produk', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-success" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Produk berhasil diedit!</div>');
            redirect('admin/produk');
        }
    }

    public function hapus_produk()
    {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('produk');
        $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-success" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Produk dihapus!</div>');
        redirect('admin/produk');
    }
}

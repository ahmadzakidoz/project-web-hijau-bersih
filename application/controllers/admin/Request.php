<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "login") {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Silahkan login terlebih dahulu!</div>');
            redirect('admin/login');
        }

        $this->load->model('m_request');
    }

    public function index()
    {
        $data['judul'] = 'Request Jual! | Bersih Hijau';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata['username']])->row_array();
        $data['request'] = $this->m_request->get_request();

        $this->load->view('template/admin_topsidebar', $data);
        $this->load->view('admin/request', $data);
        $this->load->view('template/admin_footer');
    }

    public function edit_request()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'tanggal' => $this->input->post('tanggal'),
            'status' => $this->input->post('status')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jual', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-success" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Request berhasil diedit!</div>');
        redirect('admin/request');
    }

    public function hapus_request()
    {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('jual');
        $this->session->set_flashdata('pesan', '<div class="alert alert-dismissible alert-success" role="alert"><button class="close" type="button" data-dismiss="alert">×</button>Request dihapus!</div>');
        redirect('admin/request');
    }
}

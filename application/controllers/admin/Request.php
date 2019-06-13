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
}

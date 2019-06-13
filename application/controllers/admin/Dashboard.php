<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['judul'] = 'Dashboard Admin! | Bersih Hijau';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata['username']])->row_array();

        $this->load->view('template/admin_topsidebar', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('template/admin_footer');
    }
}

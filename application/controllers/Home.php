<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Selamat Datang! | Bersih Hijau';
        $this->load->view('template/top', $data);
        $this->load->view('depan/home');
        $this->load->view('template/footer');
    }
}

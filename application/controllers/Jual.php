<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jual extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Jual Sampah Anda! | Bersih Hijau';
        $this->load->view('depan/jual', $data);
    }
}

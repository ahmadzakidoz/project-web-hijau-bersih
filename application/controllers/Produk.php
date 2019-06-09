<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function index()
    {
        $data['produk'] = $this->db->get('produk')->result();

        $data['judul'] = 'Produk dari Sampah! | Bersih Hijau';
        $this->load->view('template/top', $data);
        $this->load->view('depan/produk', $data);
        $this->load->view('template/footer');
    }
}

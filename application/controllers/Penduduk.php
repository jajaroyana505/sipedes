<?php
class Penduduk extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Beranda';
        $this->load->view('penduduk/header', $data);
        $this->load->view('penduduk/index', $data);
        $this->load->view('penduduk/footer');
    }
    public function pengaduan()
    {
        $data['judul'] = 'Pengaduan';
        $this->load->view('penduduk/header', $data);
        $this->load->view('penduduk/pengaduan', $data);
        $this->load->view('penduduk/footer');
    }
    public function profile()
    {
        $data['judul'] = 'Profile';
        $this->load->view('penduduk/header', $data);
        $this->load->view('penduduk/profile', $data);
        $this->load->view('penduduk/footer');
    }
}

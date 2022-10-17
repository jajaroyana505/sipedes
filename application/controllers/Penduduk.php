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

    public function Surat($jenis = null)
    {
        $data['judul'] = "Layanan Surat";
        $this->load->view("penduduk/header", $data);
        if ($jenis == "skd") {
            $this->load->view("formulir/f_skd");
        } else if ($jenis == "sktm") {
            $this->load->view("formulir/f_sktm");
        } else if ($jenis == "sku") {
            $this->load->view("formulir/f_sku");
        } else if ($jenis == "sik") {
            $this->load->view("formulir/f_sik");
        } else {
            redirect(base_url('penduduk'));
        }
        $this->load->view('penduduk/footer');
    }
}

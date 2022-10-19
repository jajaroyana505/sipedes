<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pengajuan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model');
    }

    public function index()
    {
        $data['judul'] = 'Pengajuan';
        // $data['pengajuan'] = $this->Penduduk_model->join();

        // var_dump($data);
        // die;

        $this->load->view('penduduk/header', $data);
        $this->load->view('penduduk/pengajuan/table_pengajuan', $data);
        $this->load->view('penduduk/footer');
    }

    public function detail_pengajuan()
    {
        $data['judul'] = 'Detail Pengajuan';
        $this->load->view('penduduk/header', $data);
        $this->load->view('penduduk/pengajuan/detail_pengajuan', $data);
        $this->load->view('penduduk/footer');
    }

    public function pdf()
    {
        $this->load->library('mypdf');
        $this->mypdf->generate('surat_desa');
    }
}

<?php 
class Admin extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Sipedes Dashboard';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
        
    }
    public function v_pengajuan()
    {
        $data['judul'] = 'Admin Kontrol';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/v_pengajuan', $data);
        $this->load->view('admin/footer');
    }   
    public function v_pengaduan()
    {
        $data['judul'] = 'Pengaduan masuk';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/v_Pengaduan', $data);
        $this->load->view('admin/footer');
    }   
    public function v_jumlah_surat()
    {
        $data['judul'] = 'Surat Terbuat';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/v_jumlah_surat', $data);
        $this->load->view('admin/footer');
    }   

    public function profile()
    {
        $data['judul'] = 'Profile Admin';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/footer');
    }   
       
    public function v_Penduduk()
    {
        $data['judul'] = 'Daftar penduduk';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/v_penduduk', $data);
        $this->load->view('admin/footer');
    }   
    
}

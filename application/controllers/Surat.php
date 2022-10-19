<?php
class Surat extends CI_Controller
{
    public function index()
    {
        $data_surat = array(
            "nama" => $this->input->post('nama'),
            "nik" => $this->input->post('nik'),
            "ttl" => $this->input->post('ttl'),
            "kelamin" => $this->input->post('kelmain'),
            "syarat1" => $this->input->post('syarat1'),
            "syarat2" => $this->input->post('syarat2'),
            "syarat3" => $this->input->post('syarat3')
        );

        var_dump($data_surat);

        $str = serialize($data_surat);

        echo $str;

        $data_pengirim = array(
            'id_penduduk' => 1,
            'kode_surat' => 'skd',
            'tanggal_pengajuan' => $this->tanggal(),
            'status_pengajuan' => 1,
            'data_surat' => $str
        );

        $this->db->insert('pengajuan_surat', $data_pengirim);
    }

    public function tanggal()
    {
        $this->load->helper('date');
        $datestring = '%Y-%m-%d';
        $time = time();
        return mdate($datestring, $time);
    }

    public function ambil()
    {
        $query = $this->db->get('pengajuan_surat');

        foreach ($query->result() as $row) {
            echo $row->data_surat;
            $data = unserialize($row->data_surat);
            var_dump($data);
        }
    }
}

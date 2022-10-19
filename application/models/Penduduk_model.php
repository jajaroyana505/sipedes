<?php
class Penduduk_model extends CI_Model
{
    function get_pengajuan()
    {
        return $this->db->get('pengajuan_surat')->result();
    }

    public function join()
    {
        $this->db->select('*');
        $this->db->from('pengajuan_surat');
        $this->db->from('pengajuan_surat');
        $this->db->join('jenis_surat', 'jenis_surat.kode = pengajuan_surat.kode_surat');
        $query = $this->db->get();
        return $query->result();
    }
}

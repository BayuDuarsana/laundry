<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {
    
    public function filter_laporan($tgl_mulai, $tgl_akhir)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan', 'left');
        $this->db->join('paket', 'transaksi.kode_paket = paket.kode_paket', 'left');
        $this->db->where('transaksi.tgl_masuk>=', $tgl_mulai);
        $this->db->where('transaksi.tgl_masuk<=', $tgl_akhir);
        return $this->db->get()->result();
    }
}
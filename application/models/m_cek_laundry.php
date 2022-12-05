<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cek_laundry extends CI_Model {
    
    public function cek_status($kode_transaksi)
    {
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('pelanggan', 'transaksi.id_pelanggan = pelanggan.id_pelanggan');
        $this->db->join('paket', 'transaksi.kode_paket = paket.kode_paket');
        $this->db->where('transaksi.kode_transaksi', $kode_transaksi);
        return $this->db->get()->result();
        
    }
}
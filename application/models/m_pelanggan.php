<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {
    
    public function generate_id_pelanggan()
    {
        $this->db->select('RIGHT(pelanggan.id_pelanggan,3) as id', false);
        $this->db->order_by('id_pelanggan', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('pelanggan');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            $id = intval($data->id) + 1;
        } else {
            $id = 1;
        }

        $idmax = str_pad($id,3,"0", STR_PAD_LEFT);
        $idjadi = "P".$idmax;
        return $idjadi;
    }

    public function getAllDataPelanggan() 
    {
        return $this->db->get('pelanggan')->result();
    }

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('id_pelanggan', $id);
        return $this->db->get()->row_array();
    }

    public function update($id_pelanggan, $data)
    {
        $this->db->where('id_pelanggan', $id_pelanggan );
        $this->db->update('pelanggan', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('pelanggan');
    }
}
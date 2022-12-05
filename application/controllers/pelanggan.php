<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pelanggan');
    }

    public function index()
    {
        $isi['content'] = 'backend/pelanggan/v_pelanggan';
        $isi['judul'] = 'Data Pelanggan';
        $isi['data']  = $this->m_pelanggan->getAllDataPelanggan();
        $this->load->view('backend/dashboard', $isi);
    }

    public function tambah()
    {
        $isi['content'] = 'backend/pelanggan/t_pelanggan';
        $isi['judul'] = 'Form Tambah Pelanggan';
        $isi['id_pelanggan']= $this->m_pelanggan->generate_id_pelanggan();
        $this->load->view('backend/dashboard', $isi);
    }

    public function simpan()
    {
        $data = array(
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        );
        $query = $this->db->insert('pelanggan', $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil disimpan');
            redirect('pelanggan');
        }
    }

    public function edit($id)
    {
        $isi['content'] = 'backend/pelanggan/e_pelanggan';
        $isi['judul'] = 'Form Edit Pelanggan';
        $isi['pelanggan'] = $this->m_pelanggan->edit($id);
        $this->load->view('backend/dashboard', $isi);
    }

    public function update()
    {
        $id_pelanggan = $this->input->post('id_pelanggan');
        $data = array(
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp')
        );
        $query = $this->m_pelanggan->update($id_pelanggan, $data);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil diupdate');
            redirect('pelanggan');
        }
    }

    public function delete($id)
    {
        $query = $this->m_pelanggan->delete($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data berhasil dihapus');
            redirect('pelanggan');
        }
    }
}
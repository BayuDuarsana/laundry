<?php

class Home Extends CI_Controller{

    public function index(){
        $isi['paket'] = $this->db->get('paket')->result();
        $this->load->view('frontend/header');
        $this->load->view('frontend/home', $isi);
        $this->load->view('frontend/footer');
    }
}
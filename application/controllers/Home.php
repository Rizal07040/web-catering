<?php

class Home extends CI_Controller {
    public function index(){
        $data['judul'] = 'Halaman Home';
        $data['produk'] = $this->Produk_model->getAllProduk();
        $this->load->view('template/home/header',$data);
        $this->load->view('home/index',$data);
        $this->load->view('template/home/footer');
    }
}
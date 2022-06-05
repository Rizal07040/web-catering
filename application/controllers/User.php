<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       
    }
    public function index()
    {
        $data['judul'] = 'Menu | Catering Mekar Jaya';

        $data['produk'] = $this->Produk_model->getAllProduk();
        $this->load->view('template/user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('template/home/footer');
    }

    
    // Tambah data belanja
    public function addCart($id){
        $ambilData = $this->Produk_model->getProdukCart('produk',$id);
        $data = array(
            'id'      => $ambilData->id_produk,
            'qty'     => 10,
            'price'   => $ambilData->harga_produk,
            'name'    => $ambilData->nama_produk
    );
    $this->cart->insert($data);
    redirect('user/index');
    }

    public function detailCart(){
        if(empty($this->cart->contents())){
            redirect('user/index');
        }
        $this->cart->contents();
        $data['judul'] = 'Keranjang | Catering Mekar Jaya';

        $this->load->view('template/user/header', $data);
        $this->load->view('user/detail_pesan');
        $this->load->view('template/home/footer');
    }
    public function deleteCart($rowid){
        $this->cart->remove($rowid);
        redirect('user/detailCart');
    }

    public function updateCart(){
        $i=1;
        foreach ($this->cart->contents() as $items){
            $data = array(
                'rowid' => $items['rowid'],
                'qty' => $this->input->post($i . '[qty]'),
            );
            $this->cart->update($data);
            $i++;
        }
        redirect('user/detailCart');
    }

    // CeckOut Produk
    public function pengisianData()
    {
        $data['judul'] = 'Proses | Catering Mekar Jaya';
        $data['user'] = $this->User_model->getUserById();
        $data['kota'] = $this->Kota_model->getAllKota();
       
        $this->load->view('template/user/header', $data);
        $this->load->view('user/pengisiandata',$data);
        $this->load->view('template/home/footer');
    }

    public function proses_pesanan()
    {
        $data['judul'] = 'Proses | Catering Mekar Jaya';
      

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('noHp', 'NoHP', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FAlSE) {
            $this->load->view('template/user/header', $data);
            $this->load->view('user/pengisianData');
            $this->load->view('template/home/footer'); 
        } else {
            $this->Pemesanan_model->pesan();
            $this->cart->destroy();
            $this->session->set_flashdata('notifikasi',' Pesanan Berhasil Diproses Silahkan Melakukan Pembayaran !!!');
            redirect('user/tampil_pesanan');
        }
        
    }
    public function tampil_pesanan(){
          $data['judul'] = 'Pesanan | Catering Mekar Jaya';
          $data['pemesanan'] = $this->Pemesanan_model->tampilPesanan();
          $data['pemesanan_verifikasi'] = $this->Pemesanan_model->tampilPemesananVerifikasi();
           $this->load->view('template/user/header', $data);
           $this->load->view('user/pesanan',$data);
           $this->load->view('template/home/footer'); 
    }
    public function batalbeli($id_pesanan)
    {

        $this->Pemesanan_model->batalPesanan($id_pesanan);
        $this->session->set_flashdata('flah', 'Pesanan Anda Telah DiBatalkan');
        redirect('user/tampil_pesanan');
    }
    
    public function bayar($id_pesanan){
        $data['judul'] = 'Pembayaran | Catering Mekar Jaya';
        $data['pemesanan'] = $this->Pemesanan_model->tampilTotal($id_pesanan);

        $this->form_validation->set_rules('atas_nama', 'Atas_Nama', 'required');
        $this->form_validation->set_rules('nama_bank', 'Nama_Bank', 'required');
        $this->form_validation->set_rules('noRek', 'NoRek', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/user/header', $data);
            $this->load->view('user/pembayaran',$data);
            $this->load->view('template/home/footer'); 
        } else {
            $data['pemesanan'] = $this->Pemesanan_model->tambahPembayaran($id_pesanan);
            $this->session->set_flashdata('flah',' Pembayaran Berhasil Dilakukan Silahkan Tunggu Di Verifikasi !!!');
            redirect('user/tampil_pesanan');
        }

  }
}

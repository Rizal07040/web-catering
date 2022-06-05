<?php

class Admin extends CI_Controller
{


    public function index()
    {

        $data['judul'] = 'Halaman Admin';
        $this->load->view('template/admin/header', $data);
        $this->load->view('admin/index',);
        $this->load->view('template/home/footer');
    }
    // Data user
    public function dataUser()
    {
        $data['judul'] = 'Data User';
        $data['user'] = $this->User_model->getAllUser();
        $this->load->view('template/admin/header', $data);
        $this->load->view('admin/datauser', $data);
        $this->load->view('template/home/footer');
    }
    public function hapusUser($id_user)
    {

        $this->User_model->hapusDataUser($id_user);
        $this->session->set_flashdata('flah', 'Dihapus');
        redirect('admin/datauser');
    }

    // Akhir data user

    // Data produk
    public function dataProduk()
    {
        $data['judul'] = 'Data Produk';
        $data['produk'] = $this->Produk_model->getAllProduk();
        $this->load->view('template/admin/header', $data);
        $this->load->view('admin/dataproduk', $data);
        $this->load->view('template/home/footer');
    }


    public function tambahProduk()
    {
        $data['judul'] = 'Tambah Data Produk';

        $this->form_validation->set_rules('nama_produk', 'Nama_Produk', 'required');
        $this->form_validation->set_rules('harga_produk', 'Harga_Produk', 'required');
        $this->form_validation->set_rules('keterangan', 'Keteranagan', 'required');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('admin/tambahproduk');
            $this->load->view('template/home/footer');
        } else {
            $this->Produk_model->tambahDataProduk();
            $this->session->set_flashdata('flah', 'Ditambahkan');
            redirect('admin/dataproduk');
        }
        
    }
    public function editProduk($id_produk)
    {
        $data['judul'] = 'Edit Data Produk';
        $data['produk'] = $this->Produk_model->getDataProdukById($id_produk);

        $this->form_validation->set_rules('nama_produk', 'Nama_Produk', 'required');
        $this->form_validation->set_rules('harga_produk', 'Harga_Produk', 'required');
        $this->form_validation->set_rules('keterangan', 'Keteranagan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/admin/header', $data);
            $this->load->view('admin/editproduk', $data);
            $this->load->view('template/home/footer');
        } else {
            $this->Produk_model->editDataProduk($id_produk);
            $this->session->set_flashdata('flah', 'Diedit');
            redirect('admin/dataproduk');
        }
    }
    public function hapusProduk($id_produk)
    {

        $this->Produk_model->hapusDataProduk($id_produk);
        $this->session->set_flashdata('flah', 'Dihapus');
        redirect('admin/dataproduk');
    }

    public function tampilPesananAdmin(){
          $data['judul'] = 'Pesanan | Catering Mekar Jaya';
          $data['pemesanan'] = $this->Pemesanan_model->tampilPemesanan();
          $data['pemesanan_verifikasi'] = $this->Pemesanan_model->tampilPemesananVerifikasi();
           $this->load->view('template/admin/header', $data);
           $this->load->view('admin/datapesanan',$data);
           $this->load->view('template/home/footer'); 
    }

    public function verifikasi($id_pesanan){
        $data['pemesanan_verifikasi'] = $this->Pemesanan_model->verifikasiPesanan($id_pesanan);

            $this->load->view('template/admin/header', $data);
            $this->load->view('admin/datapesanan',$data);
            $this->load->view('template/home/footer');
            
            $this->session->set_flashdata('flah',' Pesanan Anda Sudah Berhasil Di Verifikasi  !!!');
            redirect('admin/tampilPesananAdmin');
        
    }
    public function laporanPenjualan(){
        $judul['judul'] = 'Laporan | Catering Mekar Jaya';

        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

            $data = array
            (
                'tanggal' => $tanggal,
                'bulan' => $bulan,
                'tahun' => $tahun,
                'laporan' => $this->Pemesanan_model->laporan($tanggal, $bulan ,$tahun),
            );

         $this->load->view('template/admin/header', $judul);
         $this->load->view('admin/laporan',$data);
         $this->load->view('template/home/footer'); 
  }    
    
}

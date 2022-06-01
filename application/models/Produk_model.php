<?php

class Produk_model extends CI_model{

    public function getAllProduk(){
        return $this->db->get('produk')->result_array();
    }

    public function tambahDataProduk(){

        $data = [
            "nama_produk" => $this->input->post('nama_produk', true),
            "harga_produk" => $this->input->post('harga_produk', true),
            "keterangan" => $this->input->post('keterangan', true),
            "gambar" => $_FILES['gambar'] ['name']
        ];
      if("gambar"){
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '4000';

        $this->load->library('upload', $config);
        
        if($this->upload->do_upload('gambar')){
            
            $this->db->insert('produk',$data);
        }else{
            echo $this->upload->display_errors();
        }
    }
       
}

public function getDataProdukById($id)
{
    return $this->db->get_where('produk', ['id_produk' => $id])->row_array();
}

public function editDataProduk($id)
{

    $data = [
        "nama_produk" => $this->input->post('nama_produk', true),
        "harga_produk" => $this->input->post('harga_produk', true),
        "keterangan" => $this->input->post('keterangan', true),
        "gambar" => $_FILES['gambar']['name']
    ];



    if ("gambar") {
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = '4000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $this->db->where('id_produk', $id);

            $this->db->update('produk', $data);
        } else {
            echo $this->upload->display_errors();
        }
    }
}

    public function hapusDataProduk($id_produk){

        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
    }

    public function getProdukCart($table_name,$id){
        $this->db->where('id_produk',$id);
        $ambilData = $this->db->get($table_name);
        return $ambilData->row();
 

    }
    
     }  


<?php

class Pemesanan_model extends CI_model{

        public function getAllPemesanan(){
                return $this->db->get('pemesanan')->result_array();
            }

        public function pesan()
        {
            date_default_timezone_set('Asia/Jakarta');
            
            $data = [
                "id_user" => $this->session->userdata('id_user'),
                "tgl_ambil" => $this->input->post('tgl_ambil',true),
                "nama" => $this->input->post('nama',true),
                "tgl_pemesanan" => date('Y-m-d H:i:s',true),
                "noHp" => $this->input->post('noHp',true),
                "alamat" => $this->input->post('alamat', true),
                "total_pesanan" => $this->input->post('total_pesanan', true)
                
            ];
            $this->db->insert('pemesanan',$data);
            $id_pesan = $this->db->insert_id();

            foreach ($this->cart->contents() as $item){
                $data = [
                    'id_pemesanan'  => $id_pesan,
                    'id_produk'     =>$item['id'],
                    'nama_produk'   =>$item['name'],
                    'jumlah'        =>$item['qty'],
                    'harga'         =>$item['price']
                ];
                $this->db->insert('detail_pemesanan',$data);
            }
            return TRUE; 

        }
        public function tampilPesanan(){

        return $this->db->get_where('pemesanan', ['id_user' => $this->session->userdata('id_user')])->result_array();
        }

        public function tampilTotal($id_pesanan)
        {
            return $this->db->get_where('pemesanan', ['id_pesanan' => $id_pesanan])->row_array();
        }

        public function tambahPembayaran($id_pesanan)
        {

            $data = [
                "status_bayar" =>'1',
                "atas_nama" => $this->input->post('atas_nama', true),
                "nama_bank" => $this->input->post('nama_bank', true),
                "noRek" => $this->input->post('noRek', true),
                "bukti" => $_FILES['bukti']['name']
            ];



            if ("bukti") {
                $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = '2048';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('bukti')) {
                    $this->db->where('id_pesanan', $id_pesanan);

                    $this->db->update('pemesanan', $data);
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }

        }
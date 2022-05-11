<?php

class User_model extends CI_model{

    public function getAllUser(){
        return $this->db->get('user')->result_array();
     
    }

   
    public function hapusDataUser($id_user){

        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }

    public function getUserById(){
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    

}
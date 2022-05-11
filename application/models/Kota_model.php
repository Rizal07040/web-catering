<?php

class Kota_model extends CI_model{

    public function getAllKota(){
        return $this->db->get('kota')->result_array();
     
    }

   
   
}
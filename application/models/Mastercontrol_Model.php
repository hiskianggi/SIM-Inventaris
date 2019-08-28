<?php
class Mastercontrol_Model extends CI_Model{
  function hitungpegawai(){   
    $query = $this->db->get('pegawai');
    if($query->num_rows()>0){
      return $query->num_rows();
      }else{
          return 0;
      }
    }
    function hitungpetugas(){   
    $query = $this->db->get('petugas');
    if($query->num_rows()>0){
      return $query->num_rows();
      }else{
          return 0;
      }
    }
    function hitunginventaris(){   
    $query = $this->db->get('inventaris');
    if($query->num_rows()>0){
      return $query->num_rows();
      }else{
          return 0;
      }
    }
    function hitungbarangdipinjam(){   
    $query = $this->db->get('detail_pinjam');
    if($query->num_rows()>0){
      return $query->num_rows();
      }else{
          return 0;
      }
    }
}
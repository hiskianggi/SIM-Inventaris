<?php
class Ruang_Model extends CI_Model{
    function qw($cel,$table,$prop){
        return $this->db->query("SELECT $cel FROM $table $prop");
    }

    function ruang_list(){
        $hasil=$this->db->query("SELECT * FROM ruang");
        return $hasil->result();
    }
 
    function simpan_ruang($id_ruang,$nama_ruang,$kode_ruang,$keterangan){
        $hasil=$this->db->query("INSERT INTO ruang (id_ruang,nama_ruang,kode_ruang,keterangan)VALUES('$id_ruang','$nama_ruang','$kode_ruang','$keterangan')");
        return $hasil;
    }
 
    function get_ruang_by_kode($id_ruang){
        $hsl=$this->db->query("SELECT * FROM ruang WHERE id_ruang='$id_ruang'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_ruang' => $data->id_ruang,
                    'nama_ruang' => $data->nama_ruang,
                    'kode_ruang' => $data->kode_ruang,
                    'keterangan' => $data->keterangan,
                    );
            }
        }
        return $hasil;
    }
 
    function update_ruang($id_ruang,$nama_ruang,$kode_ruang,$keterangan){
        $hasil=$this->db->query("UPDATE ruang SET nama_ruang='$nama_ruang',kode_ruang='$kode_ruang',keterangan='$keterangan' WHERE id_ruang='$id_ruang'");
        return $hasil;
    }
    function hapus_ruang($id_ruang){
        $hasil=$this->db->query("DELETE FROM ruang WHERE id_ruang='$id_ruang'");
        return $hasil;
    }
}
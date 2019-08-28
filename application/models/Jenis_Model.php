<?php
class Jenis_Model extends CI_Model{
 	function qw($cel,$table,$prop){
		return $this->db->query("SELECT $cel FROM $table $prop");
	}

    function jenis_list(){
        $hasil=$this->db->query("SELECT * FROM jenis");
        return $hasil->result();
    }
 
    function simpan_jenis($id_jenis,$nama_jenis,$kode_jenis,$keterangan){
        $hasil=$this->db->query("INSERT INTO jenis (id_jenis,nama_jenis,kode_jenis,keterangan)VALUES('$id_jenis','$nama_jenis','$kode_jenis','$keterangan')");
        return $hasil;
    }
 
    function get_jenis_by_kode($id_jenis){
        $hsl=$this->db->query("SELECT * FROM jenis WHERE id_jenis='$id_jenis'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_jenis' => $data->id_jenis,
                    'nama_jenis' => $data->nama_jenis,
                    'kode_jenis' => $data->kode_jenis,
                    'keterangan' => $data->keterangan,
                    );
            }
        }
        return $hasil;
    }
 
    function update_jenis($id_jenis,$nama_jenis,$kode_jenis,$keterangan){
        $hasil=$this->db->query("UPDATE jenis SET nama_jenis='$nama_jenis',kode_jenis='$kode_jenis',keterangan='$keterangan' WHERE id_jenis='$id_jenis'");
        return $hasil;
    }
    function hapus_jenis($id_jenis){
		$hasil=$this->db->query("DELETE FROM jenis WHERE id_jenis='$id_jenis'");
		return $hasil;
	}
}
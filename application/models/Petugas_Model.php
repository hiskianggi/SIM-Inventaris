<?php
class Petugas_Model extends CI_Model{
 	function qw($cel,$table,$prop){
		return $this->db->query("SELECT $cel FROM $table $prop");
	}

    function petugas_list(){
        $hasil=$this->db->query("SELECT petugas.id_petugas,petugas.username,petugas.password,petugas.nama_petugas,petugas.id_level,level.nama_level FROM petugas INNER JOIN level on level.id_level=petugas.id_level");
        return $hasil->result();
    }
 
    function simpan_petugas($id_petugas,$username,$password,$nama_petugas,$id_level){
        $hasil=$this->db->query("INSERT INTO petugas (id_petugas,username,password,nama_petugas,id_level)VALUES('$id_petugas','$username','$password','$nama_petugas','$id_level')");
        return $hasil;
    }
 
    function get_petugas_by_kode($id_petugas){
        $hsl=$this->db->query("SELECT * FROM petugas WHERE id_petugas='$id_petugas'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_petugas' => $data->id_petugas,
                    'username' => $data->username,
                    'password' => $data->password,
                    'nama_petugas' => $data->nama_petugas,
                    'id_level' => $data->id_level,
                    );
            }
        }
        return $hasil;
    }
 
    function update_petugas($id_petugas,$username,$password,$nama_petugas,$id_level){
        $hasil=$this->db->query("UPDATE petugas SET username='$username',password='$password',nama_petugas='$nama_petugas',id_level='$id_level' WHERE id_petugas='$id_petugas'");
        return $hasil;
    }
    function hapus_petugas($id_petugas){
		$hasil=$this->db->query("DELETE FROM petugas WHERE id_petugas='$id_petugas'");
		return $hasil;
	}
}
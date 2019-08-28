<?php
class Pegawai_Model extends CI_Model{
 	function qw($cel,$table,$prop){
		return $this->db->query("SELECT $cel FROM $table $prop");
	}

    function pegawai_list(){
        $hasil=$this->db->query("SELECT * FROM pegawai");
        return $hasil->result();
    }
 
    function simpan_pegawai($id_pegawai,$nama_pegawai,$nip,$alamat){
        $hasil=$this->db->query("INSERT INTO pegawai (id_pegawai,nama_pegawai,nip,alamat)VALUES('$id_pegawai','$nama_pegawai','$nip','$alamat')");
        return $hasil;
    }
 
    function get_pegawai_by_kode($id_pegawai){
        $hsl=$this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_pegawai' => $data->id_pegawai,
                    'nama_pegawai' => $data->nama_pegawai,
                    'nip' => $data->nip,
                    'alamat' => $data->alamat,
                    );
            }
        }
        return $hasil;
    }
 
    function update_pegawai($id_pegawai,$nama_pegawai,$nip,$alamat){
        $hasil=$this->db->query("UPDATE pegawai SET nama_pegawai='$nama_pegawai',nip='$nip',alamat='$alamat' WHERE id_pegawai='$id_pegawai'");
        return $hasil;
    }
    function hapus_pegawai($id_pegawai){
		$hasil=$this->db->query("DELETE FROM pegawai WHERE id_pegawai='$id_pegawai'");
		return $hasil;
	}
}
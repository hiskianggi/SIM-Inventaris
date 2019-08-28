<?php
class Level_Model extends CI_Model{
 	function qw($cel,$table,$prop){
		return $this->db->query("SELECT $cel FROM $table $prop");
	}

    function level_list(){
        $hasil=$this->db->query("SELECT * FROM level");
        return $hasil->result();
    }
 
    function simpan_level($id_level,$nama_level){
        $hasil=$this->db->query("INSERT INTO level (id_level,nama_level)VALUES('$id_level','$nama_level')");
        return $hasil;
    }
 
    function get_level_by_kode($id_level){
        $hsl=$this->db->query("SELECT * FROM level WHERE id_level='$id_level'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_level' => $data->id_level,
                    'nama_level' => $data->nama_level,
                    );
            }
        }
        return $hasil;
    }
 
    function update_level($id_level,$nama_level){
        $hasil=$this->db->query("UPDATE level SET nama_level='$nama_level' WHERE id_level='$id_level'");
        return $hasil;
    }
    function hapus_level($id_level){
		$hasil=$this->db->query("DELETE FROM level WHERE id_level='$id_level'");
		return $hasil;
	}
}
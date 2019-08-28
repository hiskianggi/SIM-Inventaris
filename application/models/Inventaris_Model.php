<?php
class Inventaris_Model extends CI_Model{
	function inventaris_list(){
		$hasil=$this->db->query("SELECT inventaris.id_inventaris,inventaris.nama,inventaris.kondisi,inventaris.keterangan,inventaris.jumlah,jenis.nama_jenis,inventaris.tanggal_register,ruang.nama_ruang,inventaris.kode_inventaris,petugas.username FROM `inventaris` INNER JOIN jenis ON jenis.id_jenis=inventaris.id_jenis INNER JOIN ruang ON ruang.id_ruang=inventaris.id_ruang INNER JOIN petugas on petugas.id_petugas=inventaris.id_petugas");
		return $hasil->result();
	}
	function qw($cel,$table,$prop){
		return $this->db->query("SELECT $cel FROM $table $prop");
	}
	function simpan_inventaris($id_inventaris,$nama,$kondisi,$keterangan,$jumlah,$id_jenis,$tanggal_register,$id_ruang,$kode_inventaris,$id_petugas){
        $hasil=$this->db->query("INSERT INTO inventaris (id_inventaris,nama,kondisi,keterangan,jumlah,id_jenis,tanggal_register,id_ruang,kode_inventaris,id_petugas)VALUES('$id_inventaris','$nama','$kondisi','$keterangan','$jumlah','$id_jenis','$tanggal_register','$id_ruang','$kode_inventaris','$id_petugas')");
        return $hasil;
    }
	function hapus_inventaris($id_inventaris){
		$hasil=$this->db->query("DELETE FROM inventaris WHERE id_inventaris='$id_inventaris'");
		return $hasil;
	}
}
?>
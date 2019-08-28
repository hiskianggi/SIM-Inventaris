<?php
class Peminjaman_Model extends CI_Model{
	function qw($cel,$table,$prop){
		return $this->db->query("SELECT $cel FROM $table $prop");
	}
    function peminjaman_list(){
        $hasil=$this->db->query("SELECT peminjaman.id_peminjaman,inventaris.nama,peminjaman.tanggal_pinjam,peminjaman.tanggal_seharusnya_kembali,ruang.nama_ruang,pegawai.nama_pegawai FROM detail_pinjam INNER JOIN peminjaman on peminjaman.id_peminjaman=detail_pinjam.id_peminjaman INNER JOIN inventaris on inventaris.id_inventaris=detail_pinjam.id_inventaris INNER JOIN pegawai on peminjaman.id_pegawai=pegawai.id_pegawai INNER JOIN ruang on ruang.id_ruang=inventaris.id_ruang WHERE peminjaman.status_peminjaman='Di Pinjam'");
        return $hasil->result();
    }
    function update_status($id_peminjaman,$status_peminjaman,$tanggal_kembali,$kondisi){
        $hasil=$this->db->query("UPDATE peminjaman INNER JOIN detail_pinjam ON detail_pinjam.id_peminjaman = peminjaman.id_peminjaman INNER JOIN inventaris ON inventaris.id_inventaris=detail_pinjam.id_inventaris SET peminjaman.status_peminjaman='$status_peminjaman',peminjaman.tanggal_kembali='$tanggal_kembali',inventaris.kondisi='$kondisi',inventaris.jumlah=inventaris.jumlah+1 WHERE peminjaman.id_peminjaman='$id_peminjaman'");
        return $hasil;
    }
    function detail_pinjam_list($id_peminjaman){
        $hasil=$this->db->query("SELECT detail_pinjam.id_detail_pinjam,detail_pinjam.id_peminjaman,inventaris.nama,inventaris.kondisi,detail_pinjam.jumlah,ruang.nama_ruang FROM `detail_pinjam` INNER JOIN inventaris on inventaris.id_inventaris=detail_pinjam.id_inventaris INNER JOIN ruang on ruang.id_ruang=inventaris.id_ruang WHERE detail_pinjam.id_peminjaman='$id_peminjaman'");
        return $hasil->result();
    }
    function simpan_detail_pinjam($id_peminjaman,$id_inventaris,$jumlah){
        $query = $this->db->query("SELECT detail_pinjam.id_peminjaman FROM detail_pinjam WHERE detail_pinjam.id_peminjaman='$id_peminjaman'")->num_rows();
        if ($query=="0") {
            $hasil=$this->db->query("INSERT INTO detail_pinjam (id_peminjaman,id_inventaris,jumlah)VALUES('$id_peminjaman','$id_inventaris','$jumlah')");
            return $hasil;
        }
    }
    function simpan_peminjaman($id_peminjaman,$tanggal_pinjam,$tanggal_seharusnya_kembali,$status_peminjaman,$id_pegawai){
        $hasil=$this->db->query("INSERT INTO peminjaman (id_peminjaman,tanggal_pinjam,tanggal_seharusnya_kembali,status_peminjaman,id_pegawai)VALUES('$id_peminjaman','$tanggal_pinjam','$tanggal_seharusnya_kembali','$status_peminjaman','$id_pegawai')");
        return $hasil;
    }
    function cek_data_inventaris($id_inventaris){
        $hsl=$this->db->query("SELECT inventaris.nama,inventaris.jumlah,inventaris.kode_inventaris,inventaris.kondisi,inventaris.id_ruang,ruang.nama_ruang FROM `inventaris` INNER JOIN ruang ON ruang.id_ruang=inventaris.id_ruang WHERE id_inventaris='$id_inventaris'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'nama' => $data->nama,
                    'jumlah' => $data->jumlah,
                    'kode_inventaris' => $data->kode_inventaris,
                    'kondisi' => $data->kondisi,
                    'id_ruang' => $data->id_ruang,
                    'nama_ruang' => $data->nama_ruang,
                );
            }
        }
        return $hasil;
    }
    function cek_data_pegawai($id_pegawai){
        $hsl=$this->db->query("SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'nip' => $data->nip,
                    'nama_pegawai' => $data->nama_pegawai,
                    'alamat' => $data->alamat,
                );
            }
        }
        return $hasil;
    }
    function hapus_detail_pinjam($id_detail_pinjam){
        $hasil=$this->db->query("DELETE FROM detail_pinjam WHERE id_detail_pinjam='$id_detail_pinjam'");
        return $hasil;
    }
}
?>
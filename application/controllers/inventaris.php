<?php
class inventaris extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Inventaris_Model');
	}
	function data_inventaris(){
        $data=$this->Inventaris_Model->inventaris_list();
        echo json_encode($data);
    }

    function simpan_inventaris(){
        $id_inventaris=$this->input->post('id_inventaris');
        $nama=$this->input->post('nama');
        $kondisi=$this->input->post('kondisi');
        $keterangan=$this->input->post('keterangan');
        $jumlah=$this->input->post('jumlah');
        $id_jenis=$this->input->post('id_jenis');
        $tanggal_register=$this->input->post('tanggal_register');
        $id_ruang=$this->input->post('id_ruang');
        $kode_inventaris=$this->input->post('kode_inventaris');
        $id_petugas=$this->input->post('id_petugas');
        $data=$this->Inventaris_Model->simpan_inventaris($id_inventaris,$nama,$kondisi,$keterangan,$jumlah,$id_jenis,$tanggal_register,$id_ruang,$kode_inventaris,$id_petugas);
        echo json_encode($data);
    }

    function hapus_inventaris(){
        $id_inventaris=$this->input->post('id_inventaris');
        $data=$this->Inventaris_Model->hapus_inventaris($id_inventaris);
        echo json_encode($data);
    }
}

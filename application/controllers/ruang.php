<?php
class ruang extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Ruang_Model');
	}
	function data_ruang(){
        $data=$this->Ruang_Model->ruang_list();
        echo json_encode($data);
    }
    
    function id_ruang(){
        $qw=$this->Ruang_Model->qw("*","ruang","ORDER BY id_ruang DESC")->row_array();
        $kode_ruang=$qw['id_ruang'];
        $ambil=substr($kode_ruang,3,3);
        $jml=$ambil + 1;
        if ($jml < 10) {
          $nomot = "RNG00".$jml;
        }elseif ($jml>9 && jml<=99) {
              $nomot = "RNG0".$jml;
        }else{
              $nomot = "RNG".$jml;
        }
        echo '<input readonly="" type="text" value="'.$nomot.'" class="form-control" name="id_ruang" id="id_ruang" placeholder="ID Ruang">';
    }

    function get_ruang(){
        $id_ruang=$this->input->get('id_ruang');
        $data=$this->Ruang_Model->get_ruang_by_kode($id_ruang);
        echo json_encode($data);
    }
 
    function simpan_ruang(){
        $id_ruang=$this->input->post('id_ruang');
        $nama_ruang=$this->input->post('nama_ruang');
        $kode_ruang=$this->input->post('kode_ruang');
        $keterangan=$this->input->post('keterangan');
        $data=$this->Ruang_Model->simpan_ruang($id_ruang,$nama_ruang,$kode_ruang,$keterangan);
        echo json_encode($data);
    }
 
    function update_ruang(){
        $id_ruang=$this->input->post('id_ruang');
        $nama_ruang=$this->input->post('nama_ruang');
        $kode_ruang=$this->input->post('kode_ruang');
        $keterangan=$this->input->post('keterangan');
        $data=$this->Ruang_Model->update_ruang($id_ruang,$nama_ruang,$kode_ruang,$keterangan);
        echo json_encode($data);
    }
 
    function hapus_ruang(){
        $id_ruang=$this->input->post('id_ruang');
        $data=$this->Ruang_Model->hapus_ruang($id_ruang);
        echo json_encode($data);
    }
}
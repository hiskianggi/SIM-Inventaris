<?php
class pegawai extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Pegawai_Model');
	}
	function data_pegawai(){
        $data=$this->Pegawai_Model->pegawai_list();
        echo json_encode($data);
    }
    function id_pegawai(){
        $qw=$this->Pegawai_Model->qw("*","pegawai","ORDER BY id_pegawai DESC")->row_array();
        $kode_pegawai=$qw['id_pegawai'];
        $ambil=substr($kode_pegawai,3,3);
        $jml=$ambil + 1;
        if ($jml < 10) {
          $nomot = "PGW00".$jml;
      }elseif ($jml>9 && jml<=99) {
          $nomot = "PGW0".$jml;
      }else{
          $nomot = "PGW".$jml;
      }
      echo '<input readonly="" type="text" value="'.$nomot.'" class="form-control" name="id_pegawai" id="id_pegawai" placeholder="ID Pegawai">';
  }

  function get_pegawai(){
    $id_pegawai=$this->input->get('id_pegawai');
    $data=$this->Pegawai_Model->get_pegawai_by_kode($id_pegawai);
    echo json_encode($data);
}

function simpan_pegawai(){
    $id_pegawai=$this->input->post('id_pegawai');
    $nama_pegawai=$this->input->post('nama_pegawai');
    $nip=$this->input->post('nip');
    $alamat=$this->input->post('alamat');
    $data=$this->Pegawai_Model->simpan_pegawai($id_pegawai,$nama_pegawai,$nip,$alamat);
    echo json_encode($data);
}

function update_pegawai(){
    $id_pegawai=$this->input->post('id_pegawai');
    $nama_pegawai=$this->input->post('nama_pegawai');
    $nip=$this->input->post('nip');
    $alamat=$this->input->post('alamat');
    $data=$this->Pegawai_Model->update_pegawai($id_pegawai,$nama_pegawai,$nip,$alamat);
    echo json_encode($data);
}

function hapus_pegawai(){
    $id_pegawai=$this->input->post('id_pegawai');
    $data=$this->Pegawai_Model->hapus_pegawai($id_pegawai);
    echo json_encode($data);
}
}
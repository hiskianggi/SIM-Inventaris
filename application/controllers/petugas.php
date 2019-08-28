<?php
class petugas extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Petugas_Model');
	}
	function data_petugas(){
        $data=$this->Petugas_Model->petugas_list();
        echo json_encode($data);
    }
    
    function id_petugas(){
        $qw=$this->Petugas_Model->qw("*","petugas","ORDER BY id_petugas DESC")->row_array();
        $kode_petugas=$qw['id_petugas'];
        $ambil=substr($kode_petugas,3,3);
        $jml=$ambil + 1;
        if ($jml < 10) {
          $nomot = "PTG00".$jml;
        }elseif ($jml>9 && jml<=99) {
              $nomot = "PTG0".$jml;
        }else{
              $nomot = "PTG".$jml;
        }
        echo '<input readonly="" type="text" value="'.$nomot.'" class="form-control" name="id_petugas" id="id_petugas" placeholder="ID Petugas">';
    }

    function get_petugas(){
        $id_petugas=$this->input->get('id_petugas');
        $data=$this->Petugas_Model->get_petugas_by_kode($id_petugas);
        echo json_encode($data);
    }
 
    function simpan_petugas(){
        $id_petugas=$this->input->post('id_petugas');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $nama_petugas=$this->input->post('nama_petugas');
        $id_level=$this->input->post('id_level');
        $data=$this->Petugas_Model->simpan_petugas($id_petugas,$username,$password,$nama_petugas,$id_level);
        echo json_encode($data);
    }
 
    function update_petugas(){
        $id_petugas=$this->input->post('id_petugas');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $nama_petugas=$this->input->post('nama_petugas');
        $id_level=$this->input->post('id_level');
        $data=$this->Petugas_Model->update_petugas($id_petugas,$username,$password,$nama_petugas,$id_level);
        echo json_encode($data);
    }
 
    function hapus_petugas(){
        $id_petugas=$this->input->post('id_petugas');
        $data=$this->Petugas_Model->hapus_petugas($id_petugas);
        echo json_encode($data);
    }
}
<?php
class level extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Level_Model');
	}
	function data_level(){
        $data=$this->Level_Model->level_list();
        echo json_encode($data);
    }
    
    function id_level(){
        $qw=$this->Level_Model->qw("*","level","ORDER BY id_level DESC")->row_array();
        $kode_level=$qw['id_level'];
        $ambil=substr($kode_level,3,3);
        $jml=$ambil + 1;
        if ($jml < 10) {
          $nomot = "LVL00".$jml;
        }elseif ($jml>9 && jml<=99) {
              $nomot = "LVL0".$jml;
        }else{
              $nomot = "LVL".$jml;
        }
        echo '<input readonly="" type="text" value="'.$nomot.'" class="form-control" name="id_level" id="id_level" placeholder="ID Level">';
    }

    function get_level(){
        $id_level=$this->input->get('id_level');
        $data=$this->Level_Model->get_level_by_kode($id_level);
        echo json_encode($data);
    }
 
    function simpan_level(){
        $id_level=$this->input->post('id_level');
        $nama_level=$this->input->post('nama_level');
        $data=$this->Level_Model->simpan_level($id_level,$nama_level);
        echo json_encode($data);
    }
 
    function update_level(){
        $id_level=$this->input->post('id_level');
        $nama_level=$this->input->post('nama_level');
        $data=$this->Level_Model->update_level($id_level,$nama_level);
        echo json_encode($data);
    }
 
    function hapus_level(){
        $id_level=$this->input->post('id_level');
        $data=$this->Level_Model->hapus_level($id_level);
        echo json_encode($data);
    }
}
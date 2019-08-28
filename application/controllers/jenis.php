<?php
class jenis extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Jenis_Model');
	}
	function data_jenis(){
        $data=$this->Jenis_Model->jenis_list();
        echo json_encode($data);
    }
    function id_jenis(){
        $qw=$this->Jenis_Model->qw("*","jenis","ORDER BY id_jenis DESC")->row_array();
        $kode_jenis=$qw['id_jenis'];
        $ambil=substr($kode_jenis,3,3);
        $jml=$ambil + 1;
        if ($jml < 10) {
          $nomot = "JNS00".$jml;
        }elseif ($jml>9 && jml<=99) {
              $nomot = "JNS0".$jml;
        }else{
              $nomot = "JNS".$jml;
        }
        echo '<input readonly="" type="text" value="'.$nomot.'" class="form-control" name="id_jenis" id="id_jenis" placeholder="ID Jenis">';
    }

    function get_jenis(){
        $id_jenis=$this->input->get('id_jenis');
        $data=$this->Jenis_Model->get_jenis_by_kode($id_jenis);
        echo json_encode($data);
    }

    function simpan_jenis(){
        $id_jenis=$this->input->post('id_jenis');
        $nama_jenis=$this->input->post('nama_jenis');
        $kode_jenis=$this->input->post('kode_jenis');
        $keterangan=$this->input->post('keterangan');
        $data=$this->Jenis_Model->simpan_jenis($id_jenis,$nama_jenis,$kode_jenis,$keterangan);
        echo json_encode($data);
    }

    function update_jenis(){
        $id_jenis=$this->input->post('id_jenis');
        $nama_jenis=$this->input->post('nama_jenis');
        $kode_jenis=$this->input->post('kode_jenis');
        $keterangan=$this->input->post('keterangan');
        $data=$this->Jenis_Model->update_jenis($id_jenis,$nama_jenis,$kode_jenis,$keterangan);
        echo json_encode($data);
    }

    function hapus_jenis(){
        $id_jenis=$this->input->post('id_jenis');
        $data=$this->Jenis_Model->hapus_jenis($id_jenis);
        echo json_encode($data);
    }
}

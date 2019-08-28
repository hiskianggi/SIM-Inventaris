<?php
class jenis extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Laporan_Model');
		if($this->session->userdata('status') == "login"){
		}else{
			redirect('login');
		}
	}

	function laporan_peminjaman{
		
	}
}
?>
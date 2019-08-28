<?php
class login extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Login_Model');
		if($this->session->userdata('status') == "login"){
			redirect('mastercontrol');
		}
	}
	function index(){
		$this->load->view('login');
	}
	function action(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where=array(
			'username' =>$username,
			'password' =>$password
		);
		$cek=$this->Login_Model->log_check('petugas',$where)->num_rows();
		$query=$this->db->where('username',$username)->get('petugas');
		$row=$query->row();
		if($cek > 0){
			$data_session=array(
				'nama' =>$row->nama_petugas,
				'id_petugas' =>$row->id_petugas,
				'status' =>'login',
				'level' =>$row->id_level
			);
			$this->session->set_userdata($data_session);
			redirect('mastercontrol/page/dashboard');
		}else{
			redirect('login');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>
<?php
class mastercontrol extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Mastercontrol_Model');
		$this->load->model('Pegawai_Model');
		$this->load->model('Petugas_Model');
		$this->load->model('Jenis_Model');
		$this->load->model('Level_Model');
		$this->load->model('Ruang_Model');
		$this->load->model('Inventaris_Model');
		$this->load->model('Peminjaman_Model');
		$this->load->model('Laporan_Model');
		if($this->session->userdata('status') == "login"){
		}else{
			redirect('login');
		}
	}
	function index(){
		redirect('mastercontrol/page/dashboard');
	}
	function page(){
		$page=$this->uri->segment(3);
		if (empty($page)) {
			redirect('mastercontrol/page/dashboard');
		}
		$data['page']=$page;
		if ($page=='petugas') {
			$data['tmp_level']=$this->Petugas_Model->qw("*","level","")->result();
		}elseif ($page=='dashboard') {
			$data['total_pegawai'] = $this->Mastercontrol_Model->hitungpegawai();
			$data['total_petugas'] = $this->Mastercontrol_Model->hitungpetugas();
			$data['total_barang'] = $this->Mastercontrol_Model->hitunginventaris();
			$data['total_barang_dipinjam'] = $this->Mastercontrol_Model->hitungbarangdipinjam();
		}elseif ($page=='inventaris') {
			$data['tmp_jenis']=$this->Inventaris_Model->qw("*","jenis","")->result();
			$data['tmp_ruang']=$this->Inventaris_Model->qw("*","ruang","")->result();
			$data['tmp_petugas']=$this->Inventaris_Model->qw("*","petugas","")->result();
		}elseif ($page=='peminjaman') {
			$data['tmp_inventaris']=$this->Peminjaman_Model->qw("*","inventaris","")->result();
			$data['tmp_pegawai']=$this->Peminjaman_Model->qw("*","pegawai","")->result();
		}elseif($page=="laporan"){
			$bulan=$this->input->post('bulan');
			$tahun=$this->input->post('tahun');
			if(empty($bulan)){
				$data['qu']=$this->Laporan_Model->qw("peminjaman.id_peminjaman,peminjaman.tanggal_pinjam,peminjaman.tanggal_kembali,pegawai.nama_pegawai,peminjaman.status_peminjaman","peminjaman","inner join pegawai on peminjaman.id_pegawai=pegawai.id_pegawai")->result();
			}else{
				$data['qu']=$this->Laporan_Model->qw("peminjaman.id_peminjaman,peminjaman.tanggal_pinjam,peminjaman.tanggal_kembali,pegawai.nama_pegawai,peminjaman.status_peminjaman","peminjaman","inner join pegawai on peminjaman.id_pegawai=pegawai.id_pegawai WHERE month(peminjaman.tanggal_pinjam)='$bulan'and year(peminjaman.tanggal_pinjam) ='$tahun'")->result();
			}
		}
		$this->load->view('index',$data);
	}
	function cetak_laporan(){
        $bulan=$this->uri->segment(3);
        $tahun=$this->uri->segment(4);
          $data['qu']=$this->Laporan_Model->qw("peminjaman.id_peminjaman,peminjaman.tanggal_pinjam,peminjaman.tanggal_kembali,pegawai.nama_pegawai,peminjaman.status_peminjaman","peminjaman","inner join pegawai on peminjaman.id_pegawai=pegawai.id_pegawai WHERE month(peminjaman.tanggal_pinjam)='$bulan'and year(peminjaman.tanggal_pinjam) ='$tahun'")->result();
          $this->load->view('content/cetak_laporan',$data);
    }
}
?>
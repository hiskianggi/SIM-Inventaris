<?php
class peminjaman extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('Peminjaman_Model');
	}
	function data_detail_pinjam(){
		$id_peminjaman=$this->input->get('id_peminjaman');
        $data=$this->Peminjaman_Model->detail_pinjam_list($id_peminjaman);
        echo json_encode($data);
    }
    function hapus_detail_pinjam(){
        $id_detail_pinjam=$this->input->post('id_detail_pinjam');
        $data=$this->Peminjaman_Model->hapus_detail_pinjam($id_detail_pinjam);
        echo json_encode($data);
    }
    function simpan_detail_pinjam(){
        $id_peminjaman=$this->input->post('id_peminjaman');
        $id_inventaris=$this->input->post('id_inventaris');
        $jumlah=$this->input->post('jumlah');
        // validasi seadanya :v
        if ($id_inventaris == '') {
            $data['error']['IDInventaris'] = 'ID Inventaris tidak boleh kosong';
        }

        if (empty($data['error'])) {
            // jika validasi berhasil
            $data=$this->Peminjaman_Model->simpan_detail_pinjam($id_peminjaman,$id_inventaris,$jumlah);
        } else {
            // jika validasi gagal
            $data['aksi'] = 'gagal';
        }
        echo json_encode($data);
    }
    function simpan_peminjaman(){
        $id_peminjaman=$this->input->post('id_peminjaman');
        $tanggal_pinjam=$this->input->post('tanggal_pinjam');
        $tanggal_seharusnya_kembali=$this->input->post('tanggal_seharusnya_kembali');
        $status_peminjaman=$this->input->post('status_peminjaman');
        $id_pegawai=$this->input->post('id_pegawai');
        $data=$this->Peminjaman_Model->simpan_peminjaman($id_peminjaman,$tanggal_pinjam,$tanggal_seharusnya_kembali,$status_peminjaman,$id_pegawai);
        echo json_encode($data);
    }
    function get_inventaris(){
        $id_inventaris=$this->input->get('id_inventaris');
        $data=$this->Peminjaman_Model->cek_data_inventaris($id_inventaris);
        echo json_encode($data);
    }
    function get_pegawai(){
        $id_pegawai=$this->input->get('id_pegawai');
        $data=$this->Peminjaman_Model->cek_data_pegawai($id_pegawai);
        echo json_encode($data);
    }
    function update_peminjaman(){
        $id_peminjaman=$this->input->post('id_peminjaman');
        $status_peminjaman=$this->input->post('status_peminjaman');
        $tanggal_kembali=$this->input->post('tanggal_kembali');
        $kondisi=$this->input->post('kondisi');
        $data=$this->Peminjaman_Model->update_status($id_peminjaman,$status_peminjaman,$tanggal_kembali,$kondisi);
        echo json_encode($data);
    }
    function data_peminjaman(){
        $id_peminjaman=$this->input->get('id_peminjaman');
        $data=$this->Peminjaman_Model->peminjaman_list($id_peminjaman);
        echo json_encode($data);
    }
}
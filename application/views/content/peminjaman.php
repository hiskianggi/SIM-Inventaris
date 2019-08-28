<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row">
		</div>
		<div class="content-body">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title" id="horz-layout-colored-controls">Peminjaman</h4>
							<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
							<div class="heading-elements">
								<ul class="list-inline mb-0">
									<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
									<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
									<li><a data-action="close"><i class="ft-x"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="card-content collapse show">
							<div class="card-body">
								<form class="form form-horizontal">
									<div class="form-body">
										<h4 class="form-section"><i class="fa fa-eye"></i> Form Peminjaman</h4>
										<div class="row">
											<div class="col-md-4 mb-3">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="ft-filter"></i></span>
													</div>
													<?php
													$qw=$this->Peminjaman_Model->qw("*","peminjaman","ORDER BY id_peminjaman DESC")->row_array();
													$kode_level=$qw['id_peminjaman'];
													$ambil=substr($kode_level,3,3);
													$jml=$ambil + 1;
													if ($jml < 10) {
														$nomot = "PMJ00".$jml;
													}elseif ($jml>9 && jml<=99) {
														$nomot = "PMJ0".$jml;
													}else{
														$nomot = "PMJ".$jml;
													}
													?>
													<input type="text" id="id_peminjaman" name="id_peminjaman" class="form-control" placeholder="ID Peminjaman" value="<?php echo $nomot;?>" readonly>
												</div>
											</div>
											<div class="col-md-4 mb-3">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="ft-align-justify"></i></span>
													</div>
													<input type="text" id="id_inventaris" name="id_inventaris" class="form-control" placeholder="ID Inventaris" value="" data-toggle="modal"
													data-target="#modalinventaris">
												</div>
											</div>
											<!-- START Modal Inventaris -->
											<div class="modal fade text-left" id="modalinventaris" role="dialog">
												<div class="modal-dialog modal-xl" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h3 class="modal-title" id="myModalLabel35"> Tabel Inventaris</h3>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<table id="tabelinventaris" class="table table-striped table-bordered zero-configuration">
															<thead>
																<tr>
																	<th>ID Inventaris</th>
																	<th>Nama</th>
																	<th>Jumlah</th>
																	<th>Kode Inventaris</th>
																	<th>Kondisi</th>
																	<th>ID Ruang</th>
																</tr>
															</thead>
															<tbody>
																<?php
																foreach ($tmp_inventaris as $tampil) {
																	?>
																	<tr class="pilihinventaris" data-idinventaris="<?php echo $tampil->id_inventaris;?>">
																		<td><?php echo $tampil->id_inventaris;?></td>
																		<td><?php echo $tampil->nama;?></td>
																		<td><?php echo $tampil->jumlah;?></td>
																		<td><?php echo $tampil->kode_inventaris;?></td>
																		<td><?php echo $tampil->kondisi;?></td>
																		<td><?php echo $tampil->id_ruang;?></td>
																	</tr>
																<?php } ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<!-- END Modal Edit Pegawai -->
											<div class="col-md-4 mb-3">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="ft-file-text"></i></span>
													</div>
													<input type="text" id="id_pegawai" name="id_pegawai" class="form-control" placeholder="ID Pegawai" value="" data-toggle="modal"
													data-target="#modalpegawai">
												</div>
											</div>
											<!-- START Modal Pegawai -->
											<div class="modal fade text-left" id="modalpegawai" role="dialog">
												<div class="modal-dialog modal-xl" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h3 class="modal-title" id="myModalLabel35"> Tabel Pegawai</h3>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<table id="tabelpegawai" class="table table-striped table-bordered zero-configuration">
															<thead>
																<tr>
																	<th>NIP</th>
																	<th>Nama Pegawai</th>
																	<th>Alamat</th>
																</tr>
															</thead>
															<tbody>
																<?php
																foreach ($tmp_pegawai as $tampil) {
																	?>
																	<tr class="pilihpegawai" data-idpegawai="<?php echo $tampil->id_pegawai;?>">
																		<td><?php echo $tampil->nip;?></td>
																		<td><?php echo $tampil->nama_pegawai;?></td>
																		<td><?php echo $tampil->alamat;?></td>
																	</tr>
																<?php } ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<!-- END Modal Edit Pegawai -->
										</div>
										<h4 class="form-section"><i class="fa fa-eye"></i> Detail Inventaris</h4>
										<div class="row">
											<div class="col-md-6 mb-1">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="ft-folder"></i></span>
													</div>
													<input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Barang" readonly="">
												</div>
											</div>
											<div class="col-md-6 mb-1">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="ft-hash"></i></span>
													</div>
													<input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah Barang" readonly="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 mb-3">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="ft-filter"></i></span>
													</div>
													<input type="text" id="kode_inventaris" name="kode_inventaris" class="form-control" placeholder="Kode Inventaris" value="" readonly>
												</div>
											</div>
											<div class="col-md-4 mb-3">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="ft-compass"></i></span>
													</div>
													<input type="text" id="kondisi" name="kondisi" class="form-control" placeholder="Kondisi" value="" readonly="">
												</div>
											</div>
											<div class="col-md-4 mb-3">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="ft-file-text"></i></span>
													</div>
													<input type="text" id="nama_ruang" name="nama_ruang" class="form-control" placeholder="Nama Ruang" value="" readonly="">
													<input hidden="" value="" type="text" id="id_ruang" name="id_ruang">
												</div>
											</div>
										</div>
										<h4 class="form-section"><i class="fa fa-eye"></i> Detail Pegawai</h4>
										<div class="row">
											<div class="col-md-4 mb-3">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="ft-filter"></i></span>
													</div>
													<input type="text" id="nip" name="nip" class="form-control" placeholder="Nomor Induk Pegawai" value="" readonly>
												</div>
											</div>
											<div class="col-md-4 mb-3">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text"><i class="ft-user"></i></span>
													</div>
													<input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai" value="" readonly="">
												</div>
											</div>
											<div class="col-md-4 mb-3">
												<div class="input-group">
													<textarea id="alamat" rows="1" class="form-control" name="alamat"
													placeholder="Alamat" readonly=""></textarea>
												</div>
											</div>
										</div>
										<h4 class="form-section"><i class="fa fa-eye"></i> Action</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-md-3 label-control" for="jumlah_pinjam">Jumlah Pinjam</label>
													<div class="col-md-9">
														<div class="input-group">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="ft-file-text"></i></span>
															</div>
															<input type="number" id="jumlah_pinjam" name="jumlah_pinjam" class="form-control" placeholder="Jumlah Pinjam" value="1" readonly="">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<button type="reset" class="btn btn-warning mr-1">
													<i class="ft-x"></i> Batal
												</button>
												<button id="simpan_detail_peminjaman" class="btn btn-primary">
													<i class="fa fa-check-square-o"></i> Simpan
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Data Peminjaman</h4>
							<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
							<div class="heading-elements">
								<ul class="list-inline mb-0">
									<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
									<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
									<li><a data-action="close"><i class="ft-x"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="card-content collapse show">
							<div class="card-body card-dashboard">
								<table class="table table-striped table-bordered zero-configuration">
									<thead>
										<tr>
											<th>ID Peminjaman</th>
											<th>Nama</th>
											<th>Kode Kondisi</th>
											<th>Jumlah Pinjam</th>
											<th>Ruang</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody id="show_data">

									</tbody>
								</table>
								<div class="modal fade text-left" id="hapus_detail_pinjam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header bg-warning white">
												<h4 class="modal-title" id="myModalLabel12"><i class="fa fa-tree"></i> Hapus Detail Pinjam</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<h5><i class="fa fa-arrow-right"></i> Anda Yakin?</h5>
												<input type="hidden" name="kode" id="textkode" value="">
												<p>Apakah Anda Yakin Ingin Menghapus Detail Pinjam Ini?
												</p>
												<div class="alert alert-warning" role="alert">
													<span class="text-bold-600">Perhatian!</span> Anda Tidak Akan Bisa Mengembalikannya Seperti Semula.
												</div>
											</div>
											<div class="modal-footer">
												<button class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
												<button id="btn_hapus" class="btn btn-outline-warning">Hapus</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Data Peminjaman</h4>
							<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
							<div class="heading-elements">
								<ul class="list-inline mb-0">
									<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
									<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
									<li><a data-action="close"><i class="ft-x"></i></a></li>
								</ul>
							</div>
						</div>
						<?php
						$tanggalini=date('Y-m-d');
						$minggu_depan=date('Y-m-d', strtotime('+1 week', strtotime($tanggalini)));
						?>
						<div class="card-content collapse show">
							<div class="card-body card-dashboard">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-3 label-control" for="tanggal_pinjam">Tanggal Pinjam</label>
											<div class="col-md-9">
												<input type="date" id="tanggal_pinjam" name="tanggal_pinjam" class="form-control" value="<?php echo $tanggalini;?>" readonly="">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-3 label-control" for="tanggal_seharusnya_kembali">Tanggal Kembali</label>
											<div class="col-md-9">
												<input type="date" id="tanggal_seharusnya_kembali" name="tanggal_seharusnya_kembali" class="form-control" value="<?php echo $minggu_depan;?>" readonly>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div hidden="" class="col-md-6">
										<div class="form-group row">
											<label class="col-md-3 label-control" for="jumlah_pinjam">Status Peminjaman</label>
											<div class="col-md-9">
												<select readonly id="status_peminjaman" name="status_peminjaman" class="form-control">
													<option>== PILIH ==</option>
													<option selected="">Di Pinjam</option>
													<option>Di Kembalikan</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="button" class="btn btn-warning mr-1">
											<i class="ft-x"></i> Cancel
										</button>
										<button id="simpan_peminjaman" class="btn btn-primary">
											<i class="fa fa-check-square-o"></i> Save
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo base_url();?>app-assets/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		tampil_data_detail_pinjam();
	});
	function tampil_data_detail_pinjam(){
		var id_peminjaman=$('#id_peminjaman').val();
		$.ajax({
			type  : 'ajax',
			url   : '<?php echo base_url()?>peminjaman/data_detail_pinjam?id_peminjaman='+id_peminjaman,
			async : false,
			dataType : 'json',
			success : function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html += '<tr>'+
					'<td>'+data[i].id_peminjaman+'</td>'+
					'<td>'+data[i].nama+'</td>'+
					'<td>'+data[i].kondisi+'</td>'+
					'<td>'+data[i].jumlah+'</td>'+
					'<td>'+data[i].nama_ruang+'</td>'+
					'<td style="text-align:center;">'+
					'<div class="kotak"><a href="javascript:;" class="item_hapus" data="'+data[i].id_detail_pinjam+'"><img src="<?php echo base_url();?>assets/img/hapus.png"></a></div>'+
					'</td>'+
					'</tr>';
				}
				$('#show_data').html(html);
			}

		});
	}
	$('#simpan_detail_peminjaman').on('click',function(){
		var id_peminjaman=$('#id_peminjaman').val();
		var id_inventaris=$('#id_inventaris').val();
		var jumlah=$('#jumlah_pinjam').val();
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('peminjaman/simpan_detail_pinjam')?>",
			dataType : "JSON",
			data : {id_peminjaman:id_peminjaman,
				id_inventaris:id_inventaris,
				jumlah:jumlah
			},
			success: function(hasil){
				var hasilnya = JSON.parse(hasil);
				if (hasilnya.aksi == "gagal") {
					alert('Data Masih Ada Yang Salah, Silahkan Dicek Lagi!')
				}else{
					tampil_data_detail_pinjam();
				}

			}
		});
		return false;
	});
	$('#show_data').on('click','.item_hapus',function(){
		var id=$(this).attr('data');
		$('#hapus_detail_pinjam').modal('show');
		$('[name="kode"]').val(id);
	});
	$('#btn_hapus').on('click',function(){
		var kode=$('#textkode').val();
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('peminjaman/hapus_detail_pinjam')?>",
			dataType : "JSON",
			data : {id_detail_pinjam: kode},
			success: function(data){
				$('#hapus_detail_pinjam').modal('hide');
				tampil_data_detail_pinjam();
			}
		});
		return false;
	});
	$('#simpan_peminjaman').on('click',function(){
		var id_peminjaman=$('#id_peminjaman').val();
		var tanggal_pinjam=$('#tanggal_pinjam').val();
		var tanggal_seharusnya_kembali=$('#tanggal_seharusnya_kembali').val();
		var status_peminjaman=$('#status_peminjaman').val();
		var id_pegawai=$('#id_pegawai').val();
		$.ajax({
			type : "POST",
			url  : "<?php echo base_url('peminjaman/simpan_peminjaman')?>",
			dataType : "JSON",
			data : {id_peminjaman:id_peminjaman, tanggal_pinjam:tanggal_pinjam, tanggal_seharusnya_kembali:tanggal_seharusnya_kembali, status_peminjaman:status_peminjaman, id_pegawai:id_pegawai},
			success: function(data){
				alert('Berhasil Disimpan');
				document.location.href='<?php echo base_url('mastercontrol/page/data_peminjaman')?>'
			}
		});
		return false;
	});
	function cari_inventaris() {
		$.ajax({
			type : "GET",
			url  : "<?php echo base_url('peminjaman/get_inventaris')?>",
			dataType : "JSON",
			data : {id_inventaris:$("#id_inventaris").val()},
			success: function(data){
				$.each(data,function(nama, jumlah, kode_inventaris, kondisi, id_ruang){
					$('[name="nama"]').val(data.nama);
					$('[name="jumlah"]').val(data.jumlah);
					$('[name="kode_inventaris"]').val(data.kode_inventaris);
					$('[name="kondisi"]').val(data.kondisi);
					$('[name="id_ruang"]').val(data.id_ruang);
					$('[name="nama_ruang"]').val(data.nama_ruang);
				});
			}
		});
		return false;
	}
	function cari_pegawai() {
		$.ajax({
			type : "GET",
			url  : "<?php echo base_url('peminjaman/get_pegawai')?>",
			dataType : "JSON",
			data : {id_pegawai:$("#id_pegawai").val()},
			success: function(data){
				$.each(data,function(nip, nama_pegawai, alamat){
					$('[name="nip"]').val(data.nip);
					$('[name="nama_pegawai"]').val(data.nama_pegawai);
					$('[name="alamat"]').val(data.alamat);
				});
			}
		});
		return false;
	}
	$(document).on('click', '.pilihinventaris', function (e) {
		document.getElementById("id_inventaris").value = $(this).attr('data-idinventaris');
		$('#modalinventaris').modal('hide');
		cari_inventaris();
	});
	$(document).on('click', '.pilihpegawai', function (e) {
		document.getElementById("id_pegawai").value = $(this).attr('data-idpegawai');
		$('#modalpegawai').modal('hide');
		cari_pegawai();
	});
</script>
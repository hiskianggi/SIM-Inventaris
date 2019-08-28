<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" id="horz-layout-colored-controls">Inventaris</h4>
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
                    <h4 class="form-section"><i class="fa fa-eye"></i> Form Inventaris</h4>
                    <div class="row">
                      <div class="col-md-4 mb-1">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ft-filter"></i></span>
                          </div>
                          <?php
                          $qw=$this->Inventaris_Model->qw("*","inventaris","ORDER BY id_inventaris DESC")->row_array();
                          $kode_inventaris=$qw['id_inventaris'];
                          $ambil=substr($kode_inventaris,3,3);
                          $jml=$ambil + 1;
                          if ($jml < 10) {
                            $nomot = "INV00".$jml;
                          }elseif ($jml>9 && jml<=99) {
                            $nomot = "INV0".$jml;
                          }else{
                            $nomot = "INV".$jml;
                          }
                          ?>
                          <input type="text" id="id_inventaris" name="id_inventaris" class="form-control" placeholder="ID Inventaris" value="<?php echo $nomot;?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-4 mb-1">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ft-user"></i></span>
                          </div>
                          <input type="text" id="id_petugas" name="id_petugas" class="form-control" placeholder="Kode Petugas" value="<?php echo $this->session->userdata('id_petugas');?>" readonly>
                        </div>
                      </div>
                      <div class="col-md-4 mb-1">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ft-file-text"></i></span>
                          </div>
                          <input type="date" id="tanggal_register" name="tanggal_register" class="form-control" placeholder="Tanggal Register" value="<?php echo date('Y-m-d');?>" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-1">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ft-folder"></i></span>
                          </div>
                          <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Barang">
                        </div>
                      </div>
                      <div class="col-md-6 mb-1">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ft-hash"></i></span>
                          </div>
                          <select class="form-control" name="id_jenis" id="id_jenis">
                            <option selected disabled>Jenis Barang</option>
                            <?php
                            foreach ($tmp_jenis as $tampiljenis) {
                              ?>
                              <option value="<?php echo $tampiljenis->id_jenis;?>"><?php echo $tampiljenis->nama_jenis;?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-1">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ft-hash"></i></span>
                          </div>
                          <select class="form-control" name="id_ruang" id="id_ruang">
                            <option selected disabled>Nama Ruang</option>
                            <?php
                            foreach ($tmp_ruang as $tampilruang) {
                              ?>
                              <option value="<?php echo $tampilruang->id_ruang;?>"><?php echo $tampilruang->nama_ruang;?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 mb1">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ft-hash"></i></span>
                          </div>
                          <select class="form-control" name="kondisi" id="kondisi">
                            <option selected disabled>Kondisi</option>
                            <option>Baik</option>
                            <option>Rusak</option>
                            <option>Sedang Diperbaiki</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-1">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ft-folder"></i></span>
                          </div>
                          <input type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah">
                        </div>
                      </div>
                      <div class="col-md-6 mb-1">
                        <div class="input-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="ft-folder"></i></span>
                            </div>
                            <input type="text" id="kode_inventaris" name="kode_inventaris" class="form-control" placeholder="Kode Inventaris">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-1">
                        <div class="input-group">
                          <textarea id="keterangan" rows="3" class="form-control" name="bio"
                          placeholder="Keterangan"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions right">
                    <button type="reset" class="btn btn-warning mr-1">
                      <i class="ft-x"></i> Cancel
                    </button>
                    <button id="simpan_inventaris" class="btn btn-primary">
                      <i class="fa fa-check-square-o"></i> Save
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Data Inventaris</h4>
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
                <table id="tabelinventaris" class="table table-striped table-bordered zero-configuration">
                  <thead>
                    <tr>
                      <th>ID Inventaris</th>
                      <th>Nama</th>
                      <th>Kondisi</th>
                      <th>Keterangan</th>
                      <th>Jumlah</th>
                      <th>Jenis</th>
                      <th>Tgl Register</th>
                      <th>Nama Ruang</th>
                      <th>Kode Inventaris</th>
                      <th>ID Petugas</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="show-data">

                  </tbody>
                </table>
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
    tampil_data_inventaris();
    function tampil_data_inventaris(){
      $.ajax({
        type  : 'ajax',
        url   : '<?php echo base_url()?>inventaris/data_inventaris',
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html += '<tr>'+
            '<td>'+data[i].id_inventaris+'</td>'+
            '<td>'+data[i].nama+'</td>'+
            '<td>'+data[i].kondisi+'</td>'+
            '<td>'+data[i].keterangan+'</td>'+
            '<td>'+data[i].jumlah+'</td>'+
            '<td>'+data[i].nama_jenis+'</td>'+
            '<td>'+data[i].tanggal_register+'</td>'+
            '<td>'+data[i].nama_ruang+'</td>'+
            '<td>'+data[i].kode_inventaris+'</td>'+
            '<td>'+data[i].username+'</td>'+
            '<td style="text-align:center;">'+
            '<div class="kotak"><a href="javascript:;" class="item_edit" data="'+data[i].id_jenis+'"><img src="<?php echo base_url();?>assets/img/edit.png"></a>'+' '+
            '<a href="javascript:;" class="item_hapus" data="'+data[i].id_jenis+'"><img src="<?php echo base_url();?>assets/img/hapus.png"></a></div>'+
            '</td>'+
            '</tr>';
          }
          $('#show-data').html(html);
        }

      });
    }
    $('#simpan_inventaris').on('click',function(){
          var id_inventaris=$('#id_inventaris').val();
          var nama=$('#nama').val();
          var kondisi=$('#kondisi').val();
          var keterangan=$('#keterangan').val();
          var jumlah=$('#jumlah').val();
          var id_jenis=$('#id_jenis').val();
          var tanggal_register=$('#tanggal_register').val();
          var id_ruang=$('#id_ruang').val();
          var kode_inventaris=$('#kode_inventaris').val();
          var id_petugas=$('#id_petugas').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('inventaris/simpan_inventaris')?>",
            dataType : "JSON",
            data : {id_inventaris:id_inventaris, nama:nama, kondisi:kondisi, keterangan:keterangan, jumlah:jumlah, id_jenis:id_jenis, tanggal_register:tanggal_register, id_ruang:id_ruang, kode_inventaris:kode_inventaris, id_petugas:id_petugas},
            success: function(data){
              tampil_data_inventaris();
            }
          });
          return false;
        });
  });
</script>

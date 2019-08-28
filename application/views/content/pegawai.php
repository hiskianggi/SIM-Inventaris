<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Data Pegawai</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('mastercontrol');?>">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Data Pegawai</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
          <button class="btn btn-outline-primary" data-toggle="modal"
          data-target="#ModalTambah"><i class="ft-edit"></i> Tambah</button>
        </div>
      </div>
    </div>
    <div class="content-body">
      <section id="configuration">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data Pegawai</h4>
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
                        <th>ID Pegawai</th>
                        <th>Nama Pegawai</th>
                        <th>NIP</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="show_data">

                    </tbody>
                  </table>
                </div>
              </div>
              <!-- START Modal Tambah Pegawai -->
              <div class="modal fade text-left" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="myModalLabel35"> Input Data Pegawai</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form>
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <div class="alert bg-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <strong>Peringatan!</strong> Data Masih Ada Yang Kosong Atau Yang Salah.
                            <a href="#" class="alert-link">Silahkan Dicek.</a>.
                          </div>
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="id_pegawai">ID Pegawai</label>
                          <div id="tampil_id_pegawai"></div>
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="nip">NIP</label>
                          <input required="" type="text" class="form-control" name="nip" id="nip" placeholder="Nomor Induk Penduduk">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="nama_pegawai">Nama Pegawai</label>
                          <input required="" type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Nama Pegawai">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="alamat">Alamat</label>
                          <textarea required="" class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat"></textarea>
                        </fieldset>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Batal</button>
                        <button id="btn_simpan" class="btn btn-outline-primary btn-lg">Simpan</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- END Modal Tambah Pegawai -->

              <!-- START Modal Edit Pegawai -->
              <div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="myModalLabel35"> Edit Data Pegawai</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form>
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="id_pegawai2">ID Pegawai</label>
                          <input readonly="" type="text" class="form-control" name="id_pegawai2" id="id_pegawai2">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="nip2">NIP</label>
                          <input required="" type="text" class="form-control" name="nip2" id="nip2">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="nama_pegawai2">Nama Pegawai</label>
                          <input required="" type="text" class="form-control" id="nama_pegawai2" name="nama_pegawai2">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="alamat2">Alamat</label>
                          <textarea required="" class="form-control" id="alamat2" name="alamat2" rows="3"></textarea>
                        </fieldset>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Batal</button>
                        <button id="btn_update" class="btn btn-outline-primary btn-lg">Edit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <!-- END Modal Edit Pegawai -->

              <!-- START Modal HAPUS Pegawai -->
              <div class="modal fade text-left" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-warning white">
                      <h4 class="modal-title" id="myModalLabel12"><i class="fa fa-tree"></i> Hapus Pegawai</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h5><i class="fa fa-arrow-right"></i> Anda Yakin?</h5>
                      <input type="hidden" name="kode" id="textkode" value="">
                      <p>Apakah Anda Yakin Ingin Menghapus Pegawai Ini?
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
              <!-- END Modal HAPUS Pegawai -->
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<script src="<?php echo base_url();?>app-assets/js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
        tampil_data_pegawai();   //pemanggilan fungsi tampil pegawai.
        id_pegawai();
        function id_pegawai() {
          $("#tampil_id_pegawai").load("<?php echo base_url()?>pegawai/id_pegawai");
        }
        //fungsi tampil pegawai
        function tampil_data_pegawai(){
          $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>pegawai/data_pegawai',
            async : false,
            dataType : 'json',
            success : function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                html += '<tr>'+
                '<td>'+data[i].id_pegawai+'</td>'+
                '<td>'+data[i].nama_pegawai+'</td>'+
                '<td>'+data[i].nip+'</td>'+
                '<td>'+data[i].alamat+'</td>'+
                '<td style="text-align:center;">'+
                '<div class="kotak"><a href="javascript:;" class="item_edit" data="'+data[i].id_pegawai+'"><img src="<?php echo base_url();?>assets/img/edit.png"></a>'+' '+
                '<a href="javascript:;" class="item_hapus" data="'+data[i].id_pegawai+'"><img src="<?php echo base_url();?>assets/img/hapus.png"></a></div>'+
                '</td>'+
                '</tr>';
              }
              $('#show_data').html(html);
              id_pegawai();
            }

          });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
          var id=$(this).attr('data');
          $.ajax({
            type : "GET",
            url  : "<?php echo base_url('pegawai/get_pegawai')?>",
            dataType : "JSON",
            data : {id_pegawai:id},
            success: function(data){
              $.each(data,function(id_pegawai, nama_pegawai, nip, alamat){
                $('#ModalEdit').modal('show');
                $('[name="id_pegawai2"]').val(data.id_pegawai);
                $('[name="nama_pegawai2"]').val(data.nama_pegawai);
                $('[name="nip2"]').val(data.nip);
                $('[name="alamat2"]').val(data.alamat);
              });
            }
          });
          return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
          var id=$(this).attr('data');
          $('#ModalHapus').modal('show');
          $('[name="kode"]').val(id);
        });

        //Simpan pegawai
        $('#btn_simpan').on('click',function(){
          var id_pegawai=$('#id_pegawai').val();
          var nama_pegawai=$('#nama_pegawai').val();
          var nip=$('#nip').val();
          var alamat=$('#alamat').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('pegawai/simpan_pegawai')?>",
            dataType : "JSON",
            data : {id_pegawai:id_pegawai , nama_pegawai:nama_pegawai,nip:nip, alamat:alamat},
            success: function(data){
              $('[name="id_pegawai"]').val("");
              $('[name="nama_pegawai"]').val("");
              $('[name="nip"]').val("");
              $('[name="alamat"]').val("");
              $('#ModalTambah').modal('hide');
              tampil_data_pegawai();
            }
          });
          return false;
        });

        //Update pegawai
        $('#btn_update').on('click',function(){
          var id_pegawai=$('#id_pegawai2').val();
          var nama_pegawai=$('#nama_pegawai2').val();
          var nip=$('#nip2').val();
          var alamat=$('#alamat2').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('pegawai/update_pegawai')?>",
            dataType : "JSON",
            data : {id_pegawai:id_pegawai , nama_pegawai:nama_pegawai, nip:nip, alamat:alamat},
            success: function(data){
              $('[name="id_pegawai2"]').val("");
              $('[name="nama_pegawai2"]').val("");
              $('[name="nip2"]').val("");
              $('[name="alamat2"]').val("");
              $('#ModalEdit').modal('hide');
              tampil_data_pegawai();
            }
          });
          return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
          var kode=$('#textkode').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('pegawai/hapus_pegawai')?>",
            dataType : "JSON",
            data : {id_pegawai: kode},
            success: function(data){
              $('#ModalHapus').modal('hide');
              tampil_data_pegawai();
            }
          });
          return false;
        });

      });
    </script>
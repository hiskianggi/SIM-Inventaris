<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Data Jenis</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('mastercontrol');?>">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Data Jenis</a>
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
                <h4 class="card-title">Data Jenis</h4>
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
                        <th>ID Jenis</th>
                        <th>Nama Jenis</th>
                        <th>Kode Jenis</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="show_data">

                    </tbody>
                  </table>
                </div>
              </div>
              <!-- START Modal Tambah Jenis -->
              <div class="modal fade text-left" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="myModalLabel35"> Input Data Jenis</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form>
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="id_jenis">ID Jenis</label>
                          <div id="tampil_id_jenis"></div>
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="nama_jenis">Nama Jenis</label>
                          <input required="" type="text" class="form-control" id="nama_jenis" name="nama_jenis" placeholder="Nama Jenis">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="kode_jenis">Kode Jenis</label>
                          <input required="" type="text" class="form-control" name="kode_jenis" id="kode_jenis" placeholder="Kode Jenis">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="keterangan">Keterangan</label>
                          <textarea required="" class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="Keterangan"></textarea>
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
              <!-- END Modal Tambah Jenis -->

              <!-- START Modal Edit Jenis -->
              <div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="myModalLabel35"> Edit Data Jenis</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form>
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="id_jenis2">ID Jenis</label>
                          <input readonly="" type="text" class="form-control" name="id_jenis2" id="id_jenis2">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="nama_jenis2">Nama Jenis</label>
                          <input required="" type="text" class="form-control" id="nama_jenis2" name="nama_jenis2">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="kode_jenis2">Kode Jenis</label>
                          <input required="" type="text" class="form-control" name="kode_jenis2" id="kode_jenis2">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="keterangan2">Keterangan</label>
                          <textarea required="" class="form-control" id="keterangan2" name="keterangan2" rows="3"></textarea>
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
              <!-- END Modal Edit Jenis -->

              <!-- START Modal HAPUS Jenis -->
              <div class="modal fade text-left" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-warning white">
                      <h4 class="modal-title" id="myModalLabel12"><i class="fa fa-tree"></i> Hapus Jenis</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h5><i class="fa fa-arrow-right"></i> Anda Yakin?</h5>
                      <input type="hidden" name="kode" id="textkode" value="">
                      <p>Apakah Anda Yakin Ingin Menghapus Jenis Ini?
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
              <!-- END Modal HAPUS Jenis -->
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
        tampil_data_jenis();   //pemanggilan fungsi tampil jenis.
        id_jenis();
          function id_jenis() {
            $("#tampil_id_jenis").load("<?php echo base_url()?>jenis/id_jenis");
          }
        //fungsi tampil jenis
        function tampil_data_jenis(){
          $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>jenis/data_jenis',
            async : false,
            dataType : 'json',
            success : function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                html += '<tr>'+
                '<td>'+data[i].id_jenis+'</td>'+
                '<td>'+data[i].nama_jenis+'</td>'+
                '<td>'+data[i].kode_jenis+'</td>'+
                '<td>'+data[i].keterangan+'</td>'+
                '<td style="text-align:center;">'+
                '<div class="kotak"><a href="javascript:;" class="item_edit" data="'+data[i].id_jenis+'"><img src="<?php echo base_url();?>assets/img/edit.png"></a>'+' '+
                '<a href="javascript:;" class="item_hapus" data="'+data[i].id_jenis+'"><img src="<?php echo base_url();?>assets/img/hapus.png"></a></div>'+
                '</td>'+
                '</tr>';
              }
              $('#show_data').html(html);
              id_jenis();
            }

          });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
          var id=$(this).attr('data');
          $.ajax({
            type : "GET",
            url  : "<?php echo base_url('jenis/get_jenis')?>",
            dataType : "JSON",
            data : {id_jenis:id},
            success: function(data){
              $.each(data,function(id_jenis, nama_jenis, kode_jenis, keterangan){
                $('#ModalEdit').modal('show');
                $('[name="id_jenis2"]').val(data.id_jenis);
                $('[name="nama_jenis2"]').val(data.nama_jenis);
                $('[name="kode_jenis2"]').val(data.kode_jenis);
                $('[name="keterangan2"]').val(data.keterangan);
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

        //Simpan jenis
        $('#btn_simpan').on('click',function(){
          var id_jenis=$('#id_jenis').val();
          var nama_jenis=$('#nama_jenis').val();
          var kode_jenis=$('#kode_jenis').val();
          var keterangan=$('#keterangan').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('jenis/simpan_jenis')?>",
            dataType : "JSON",
            data : {id_jenis:id_jenis , nama_jenis:nama_jenis,kode_jenis:kode_jenis, keterangan:keterangan},
            success: function(data){
              $('[name="id_jenis"]').val("");
              $('[name="nama_jenis"]').val("");
              $('[name="kode_jenis"]').val("");
              $('[name="keterangan"]').val("");
              $('#ModalTambah').modal('hide');
              tampil_data_jenis();
            }
          });
          return false;
        });

        //Update jenis
        $('#btn_update').on('click',function(){
          var id_jenis=$('#id_jenis2').val();
          var nama_jenis=$('#nama_jenis2').val();
          var kode_jenis=$('#kode_jenis2').val();
          var keterangan=$('#keterangan2').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('jenis/update_jenis')?>",
            dataType : "JSON",
            data : {id_jenis:id_jenis , nama_jenis:nama_jenis, kode_jenis:kode_jenis, keterangan:keterangan},
            success: function(data){
              $('[name="id_jenis2"]').val("");
              $('[name="nama_jenis2"]').val("");
              $('[name="kode_jenis2"]').val("");
              $('[name="keterangan2"]').val("");
              $('#ModalEdit').modal('hide');
              tampil_data_jenis();
            }
          });
          return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
          var kode=$('#textkode').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('jenis/hapus_jenis')?>",
            dataType : "JSON",
            data : {id_jenis: kode},
            success: function(data){
              $('#ModalHapus').modal('hide');
              tampil_data_jenis();
            }
          });
          return false;
        });

      });
    </script>
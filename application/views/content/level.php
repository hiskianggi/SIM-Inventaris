<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Data Level</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('mastercontrol');?>">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Data Level</a>
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
                <h4 class="card-title">Data Level</h4>
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
                        <th>ID Level</th>
                        <th>Nama Level</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="show_data">

                    </tbody>
                  </table>
                </div>
              </div>
              <!-- START Modal Tambah Level -->
              <div class="modal fade text-left" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="myModalLabel35"> Input Data Level</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form>
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="id_level">ID Level</label>
                          <div id="tampil_id_level"></div>
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="nama_level">Nama Level</label>
                          <input required="" type="text" class="form-control" id="nama_level" name="nama_level" placeholder="Nama Level">
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
              <!-- END Modal Tambah Level -->

              <!-- START Modal Edit Level -->
              <div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="myModalLabel35"> Edit Data Level</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form>
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="id_level2">ID Level</label>
                          <input readonly="" type="text" class="form-control" name="id_level2" id="id_level2">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="nama_level2">Nama Level</label>
                          <input required="" type="text" class="form-control" id="nama_level2" name="nama_level2">
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
              <!-- END Modal Edit Level -->

              <!-- START Modal HAPUS Level -->
              <div class="modal fade text-left" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-warning white">
                      <h4 class="modal-title" id="myModalLabel12"><i class="fa fa-tree"></i> Hapus Level</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h5><i class="fa fa-arrow-right"></i> Anda Yakin?</h5>
                      <input type="hidden" name="kode" id="textkode" value="">
                      <p>Apakah Anda Yakin Ingin Menghapus Level Ini?
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
              <!-- END Modal HAPUS Level -->
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
        tampil_data_level();   //pemanggilan fungsi tampil level.
        id_level();
        function id_level() {
          $("#tampil_id_level").load("<?php echo base_url()?>level/id_level");
        }
        //fungsi tampil level
        function tampil_data_level(){
          $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>level/data_level',
            async : false,
            dataType : 'json',
            success : function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                html += '<tr>'+
                '<td>'+data[i].id_level+'</td>'+
                '<td>'+data[i].nama_level+'</td>'+
                '<td style="text-align:center;">'+
                '<div class="kotak"><a href="javascript:;" class="item_edit" data="'+data[i].id_level+'"><img src="<?php echo base_url();?>assets/img/edit.png"></a>'+' '+
                '<a href="javascript:;" class="item_hapus" data="'+data[i].id_level+'"><img src="<?php echo base_url();?>assets/img/hapus.png"></a></div>'+
                '</td>'+
                '</tr>';
              }
              $('#show_data').html(html);
              id_level();
            }

          });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
          var id=$(this).attr('data');
          $.ajax({
            type : "GET",
            url  : "<?php echo base_url('level/get_level')?>",
            dataType : "JSON",
            data : {id_level:id},
            success: function(data){
              $.each(data,function(id_level, nama_level){
                $('#ModalEdit').modal('show');
                $('[name="id_level2"]').val(data.id_level);
                $('[name="nama_level2"]').val(data.nama_level);
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

        //Simpan level
        $('#btn_simpan').on('click',function(){
          var id_level=$('#id_level').val();
          var nama_level=$('#nama_level').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('level/simpan_level')?>",
            dataType : "JSON",
            data : {id_level:id_level ,nama_level:nama_level},
            success: function(data){
              $('[name="id_level"]').val("");
              $('[name="nama_level"]').val("");
              $('#ModalTambah').modal('hide');
              tampil_data_level();
            }
          });
          return false;
        });

        //Update level
        $('#btn_update').on('click',function(){
          var id_level=$('#id_level2').val();
          var nama_level=$('#nama_level2').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('level/update_level')?>",
            dataType : "JSON",
            data : {id_level:id_level ,nama_level:nama_level},
            success: function(data){
              $('[name="id_level2"]').val("");
              $('[name="nama_level2"]').val("");
              $('#ModalEdit').modal('hide');
              tampil_data_level();
            }
          });
          return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
          var kode=$('#textkode').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('level/hapus_level')?>",
            dataType : "JSON",
            data : {id_level: kode},
            success: function(data){
              $('#ModalHapus').modal('hide');
              tampil_data_level();
            }
          });
          return false;
        });

      });
    </script>
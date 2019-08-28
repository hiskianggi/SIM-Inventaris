<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Data Petugas</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('mastercontrol');?>">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Data Petugas</a>
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
                <h4 class="card-title">Data Petugas</h4>
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
                        <th>ID Petugas</th>
                        <th>Username</th>
                        <th>Nama Petugas</th>
                        <th>Level</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="show_data">

                    </tbody>
                  </table>
                </div>
              </div>
              <!-- START Modal Tambah Petugas -->
              <div class="modal fade text-left" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="myModalLabel35"> Input Data Petugas</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form>
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="id_petugas">ID Petugas</label>
                          <div id="tampil_id_petugas"></div>
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="username">Username</label>
                          <input required="" type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="password">Password</label>
                          <input required="" type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="password">Nama Petugas</label>
                          <input required="" type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="Nama Petugas">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="id_level">Level</label>
                          <select class="form-control" name="id_level" id="id_level">
                            <option value="" selected disabled>== PILIH LEVEL ==</option>
                            <?php
                            foreach ($tmp_level as $tampillevel) {
                              ?>
                              <option value="<?php echo $tampillevel->id_level;?>"><?php echo $tampillevel->nama_level;?></option>
                            <?php } ?>
                          </select>
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
              <!-- END Modal Tambah Petugas -->

              <!-- START Modal Edit Petugas -->
              <div class="modal fade text-left" id="ModalEdit" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h3 class="modal-title" id="myModalLabel35"> Edit Data Petugas</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form>
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="id_petugas">ID Petugas</label>
                          <input readonly="" type="text" value="<?php echo $nomot;?>" class="form-control" name="id_petugas2" id="id_petugas2" placeholder="ID Petugas">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="username">Username</label>
                          <input required="" type="text" class="form-control" id="username2" name="username2" placeholder="Username">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="password">Password</label>
                          <input required="" type="password" class="form-control" name="password2" id="password2" placeholder="Password">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="password">Nama Petugas</label>
                          <input required="" type="text" class="form-control" name="nama_petugas2" id="nama_petugas2" placeholder="Nama Petugas">
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="id_level">Level</label>
                          <select class="form-control" name="id_level2" id="id_level2">
                            <option value="" selected disabled>== PILIH LEVEL ==</option>
                            <?php
                            foreach ($tmp_level as $tampillevel) {
                              ?>
                              <option value="<?php echo $tampillevel->id_level;?>"><?php echo $tampillevel->nama_level;?></option>
                            <?php } ?>
                          </select>
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
              <!-- END Modal Edit Petugas -->

              <!-- START Modal HAPUS Petugas -->
              <div class="modal fade text-left" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-warning white">
                      <h4 class="modal-title" id="myModalLabel12"><i class="fa fa-tree"></i> Hapus Petugas</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h5><i class="fa fa-arrow-right"></i> Anda Yakin?</h5>
                      <input type="hidden" name="kode" id="textkode" value="">
                      <p>Apakah Anda Yakin Ingin Menghapus Petugas Ini?
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
              <!-- END Modal HAPUS Petugas -->
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
        tampil_data_petugas();   //pemanggilan fungsi tampil petugas.
        id_petugas();
          function id_petugas() {
            $("#tampil_id_petugas").load("<?php echo base_url()?>petugas/id_petugas");
          }
        //fungsi tampil petugas
        function tampil_data_petugas(){
          $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>petugas/data_petugas',
            async : false,
            dataType : 'json',
            success : function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                html += '<tr>'+
                '<td>'+data[i].id_petugas+'</td>'+
                '<td>'+data[i].username+'</td>'+
                '<td>'+data[i].nama_petugas+'</td>'+
                '<td>'+data[i].nama_level+'</td>'+
                '<td style="text-align:center;">'+
                '<div class="kotak"><a href="javascript:;" class="item_edit" data="'+data[i].id_petugas+'"><img src="<?php echo base_url();?>assets/img/edit.png"></a>'+' '+
                '<a href="javascript:;" class="item_hapus" data="'+data[i].id_petugas+'"><img src="<?php echo base_url();?>assets/img/hapus.png"></a></div>'+
                '</td>'+
                '</tr>';
              }
              $('#show_data').html(html);
              id_petugas();
            }

          });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
          var id=$(this).attr('data');
          $.ajax({
            type : "GET",
            url  : "<?php echo base_url('petugas/get_petugas')?>",
            dataType : "JSON",
            data : {id_petugas:id},
            success: function(data){
              $.each(data,function(id_petugas, username, password, id_level){
                $('#ModalEdit').modal('show');
                $('[name="id_petugas2"]').val(data.id_petugas);
                $('[name="username2"]').val(data.username);
                $('[name="password2"]').val(data.password);
                $('[name="nama_petugas2"]').val(data.nama_petugas);
                $('[name="id_level2"]').val(data.id_level);
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

        //Simpan petugas
        $('#btn_simpan').on('click',function(){
          var id_petugas=$('#id_petugas').val();
          var username=$('#username').val();
          var password=$('#password').val();
          var nama_petugas=$('#nama_petugas').val();
          var id_level=$('#id_level').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('petugas/simpan_petugas')?>",
            dataType : "JSON",
            data : {id_petugas:id_petugas ,username:username, password:password, nama_petugas:nama_petugas, id_level:id_level},
            success: function(data){
              $('[name="id_petugas"]').val("");
              $('[name="username"]').val("");
              $('[name="password"]').val("");
              $('[name="nama_petugas"]').val("");
              $('[name="id_level"]').val("");
              $('#ModalTambah').modal('hide');
              tampil_data_petugas();
            }
          });
          return false;
        });

        //Update petugas
        $('#btn_update').on('click',function(){
          var id_petugas=$('#id_petugas2').val();
          var username=$('#username2').val();
          var password=$('#password2').val();
          var nama_petugas=$('#nama_petugas2').val();
          var id_level=$('#id_level2').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('petugas/update_petugas')?>",
            dataType : "JSON",
            data : {id_petugas:id_petugas ,username:username, password:password, nama_petugas:nama_petugas, id_level:id_level},
            success: function(data){
              $('[name="id_petugas2"]').val("");
              $('[name="username2"]').val("");
              $('[name="password2"]').val("");
              $('[name="nama_petugas2"]').val("");
              $('[name="id_level2"]').val("");
              $('#ModalEdit').modal('hide');
              tampil_data_petugas();
            }
          });
          return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
          var kode=$('#textkode').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('petugas/hapus_petugas')?>",
            dataType : "JSON",
            data : {id_petugas: kode},
            success: function(data){
              $('#ModalHapus').modal('hide');
              tampil_data_petugas();
            }
          });
          return false;
        });

      });
    </script>
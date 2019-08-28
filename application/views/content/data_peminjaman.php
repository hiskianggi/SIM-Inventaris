<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Data Peminjaman</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('mastercontrol');?>">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Data Peminjaman</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
      <div class="content-header-right col-md-6 col-12">
        <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
          <a href="http://localhost/inventaris/mastercontrol/page/peminjaman" class="btn btn-outline-primary"><i class="ft-edit"></i> Tambah</a>
        </div>
      </div>
    </div>
    <div class="content-body">
      <section id="configuration">
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
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Pinjam</th>
                        <th>Jadwal Kembali</th>
                        <th>Ruang</th>
                        <th>Nama Peminjam</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody id="show_data">

                    </tbody>
                  </table>
                </div>
              </div>
              <!-- START Modal Ganti Status -->
              <div class="modal fade text-left" id="ModalGanti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header bg-warning white">
                      <h4 class="modal-title" id="myModalLabel12"><i class="fa fa-tree"></i> Ganti Status Ke "Dikembalikan"</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <h5><i class="fa fa-arrow-right"></i> Anda Yakin?</h5>
                      <input type="date" hidden name="tanggal_kembali" id="tanggal_kembali" value="<?php echo date('Y-m-d');?>">
                      <input type="text" hidden name="kembali" id="kembali" value="Dikembalikan">
                      <input type="text" hidden name="id_peminjaman" id="id_peminjaman" value="">
                      <p>Apakah Anda Yakin Ingin Mengubah Status Peminjaman Ini Dari "Dipinjam" Ke "Dikembalikan"?
                      </p>
                      <div class="alert alert-warning" role="alert">
                        <span class="text-bold-600">Perhatian!</span> Anda Tidak Akan Bisa Mengembalikannya Seperti Semula.
                      </div>
                      <fieldset class="form-group">
                          <label for="basicSelect">Pilih Kondisi Barang Yang Dikembalikan</label>
                          <select class="form-control" id="kondisi" name="kondisi">
                            <option>Baik</option>
                            <option>Rusak</option>
                            <option>Masih Diperbaiki</option>
                          </select>
                        </fieldset>
                    </div>
                    <div class="modal-footer">
                      <button class="btn grey btn-outline-secondary" data-dismiss="modal">Batal</button>
                      <button id="btn_ganti" class="btn btn-outline-warning">Ganti</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END Modal HAPUS Peminjaman -->
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
        tampil_data_peminjaman();   //pemanggilan fungsi tampil peminjaman.

        //fungsi tampil peminjaman
        function tampil_data_peminjaman(){
          $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>peminjaman/data_peminjaman',
            async : false,
            dataType : 'json',
            success : function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                html += '<tr>'+
                '<td>'+data[i].id_peminjaman+'</td>'+
                '<td>'+data[i].nama+'</td>'+
                '<td>'+data[i].tanggal_pinjam+'</td>'+
                '<td>'+data[i].tanggal_seharusnya_kembali+'</td>'+
                '<td>'+data[i].nama_ruang+'</td>'+
                '<td>'+data[i].nama_pegawai+'</td>'+
                '<td style="text-align:center;">'+
                '<button type="button" id="status_peminjaman" data="'+data[i].id_peminjaman+'" class="btn btn-outline-secondary btn-min-width mr-1 mb-1">Di Kembalikan</button>'+
                '</td>'+
                '</tr>';
              }
              $('#show_data').html(html);
            }

          });
        }


        //GET HAPUS
        $('#show_data').on('click','#status_peminjaman',function(){
          var id=$(this).attr('data');
          $('#ModalGanti').modal('show');
          $('[name="id_peminjaman"]').val(id);
        });

        //Hapus Barang
        $('#btn_ganti').on('click',function(){
          var kode=$('#kembali').val();
          var tanggal_kembali=$('#tanggal_kembali').val();
          var id_peminjaman=$('#id_peminjaman').val();
          var kondisi=$('#kondisi').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('peminjaman/update_peminjaman')?>",
            dataType : "JSON",
            data : {status_peminjaman:kode, tanggal_kembali:tanggal_kembali, id_peminjaman:id_peminjaman, kondisi:kondisi},
            success: function(data){
              $('#ModalGanti').modal('hide');
              tampil_data_peminjaman();
            }
          });
          return false;
        });

      });
    </script>
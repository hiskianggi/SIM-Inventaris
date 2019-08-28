<?php echo $bulan='00';?>
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0">Laporan</h3>
        <div class="row breadcrumbs-top">
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('mastercontrol');?>">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">Laporan</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content-body">
      <section id="configuration">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Laporan</h4>
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
                  <form action="<?php echo site_url('mastercontrol/page/laporan');?>" method="POST">
                    <select style="width: 20%;margin-left: 20px;margin-right: 20px;" id="bulan" name="bulan" class="form">
                      <option value="01" <?php if($this->input->post('bulan')=="01"){echo "selected";}?>>Januari</option>
                      <option value="02" <?php if($this->input->post('bulan')=="02"){echo "selected";}?>>Februari</option>
                      <option value="03" <?php if($this->input->post('bulan')=="03"){echo "selected";}?>>Maret</option>
                      <option value="04" <?php if($this->input->post('bulan')=="04"){echo "selected";}?>>April</option>
                      <option value="05" <?php if($this->input->post('bulan')=="05"){echo "selected";}?>>Mei</option>
                      <option value="06" <?php if($this->input->post('bulan')=="06"){echo "selected";}?>>Juni</option>
                      <option value="07" <?php if($this->input->post('bulan')=="07"){echo "selected";}?>>Juli</option>
                      <option value="08" <?php if($this->input->post('bulan')=="08"){echo "selected";}?>>Agustus</option>
                      <option value="09" <?php if($this->input->post('bulan')=="09"){echo "selected";}?>>September</option>
                      <option value="10" <?php if($this->input->post('bulan')=="10"){echo "selected";}?>>Oktober</option>
                      <option value="11" <?php if($this->input->post('bulan')=="11"){echo "selected";}?>>November</option>
                      <option value="12" <?php if($this->input->post('bulan')=="12"){echo "selected";}?>>Desember</option>
                    </select>
                    <select style="width: 20%;margin-left: 5px;margin-right: 20px;" id="tahun" name="tahun" class="form">
                      <?php 
                      $qw=$this->Laporan_Model->qw('*','peminjaman',"GROUP BY year(tanggal_pinjam)")->result();
                      foreach($qw as $tpa){
                        $data = explode('-',$tpa->tanggal_pinjam);
                        $thn = $data[0];
                        ?>
                        <option <?php if($thn==$this->input->post('tahun')){echo "selected";}?>><?php echo $thn;?></option>
                        <?php
                      }
                      ?>
                    </select>
                    <input class="btn waves-effect waves-light" type="submit" name="cari" value="Cari">
                    <input class="btn waves-effect waves-light" type="submit" name="cetak" value="Cetak" onclick="ctk()">
                  </form>
                  <hr>
                  <table class="table table-striped table-bordered zero-configuration">
                    <thead>
                      <tr>
                        <th>ID Peminjaman</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Nama Pegawai</th>
                        <th>Status Pinjam</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      foreach ($qu as $tmp){
                        ?>
                        <tr>
                          <td><?php echo $tmp->id_peminjaman;?></td>
                          <td><?php echo $tmp->tanggal_pinjam;?></td>
                          <td><?php echo $tmp->tanggal_kembali;?></td>
                          <td><?php echo $tmp->nama_pegawai;?></td>
                          <td><?php echo $tmp->status_peminjaman;?></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<script type="text/javascript">
  function ctk(){
    bulan=$("#bulan").val();
    tahun=$("#tahun").val();
    window.open("<?php echo site_url('mastercontrol/cetak_laporan');?>"+"/"+bulan+"/"+tahun,"_blank");
  }
</script>
<link rel="stylesheet" type="text/css" href="/simpenjualan/assets/css/style.css">
<title>Laporan Peminjaman</title>
<body style="background-color: #fff;">
  <center>
    <div class="isi-content">
      <div class="judul-content">
        <center>
          <h1>Laporan Peminjaman</h1>
          <h3>Bulan : <?php echo $this->uri->segment(3);?> </span><span> Tahun : <?php echo $this->uri->segment(4);?></h3>
          </center>
        </div>
        <br>
        <table class="tabel">
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
            foreach ($qu as $tamp) {
              ?>
              <tr>
                <td><?php echo $tamp->id_peminjaman;?></td>
                <td><?php echo $tamp->tanggal_pinjam;?></td>
                <td><?php echo $tamp->tanggal_kembali;?></td>
                <td><?php echo $tamp->nama_pegawai;?></td>
                <td><?php echo $tamp->status_peminjaman;?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
        <p style="float: right;font-size: 21px;margin-right: 50px;">
        <b>
          Jepara, <?php echo date("d-m-Y");?><br>
          Kepala Inventaris
          <br>
          <br>
          <br>
          <br>
          (Irvan Syafi'i)
        </b>
      </p>
      </div>
    </body>
    </html>
    <script type="text/javascript">window.print();</script>
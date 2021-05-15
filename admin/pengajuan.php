<?php include('header.php') ?>
<?php include('../function.php') ?>

<!-- END LEFT SIDEBAR -->
<!-- MAIN -->
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="main-content">
    <div class="container-fluid">
      <!-- <h3 class="page-title">Halaman Dashboard</h3> -->
      <div class="panel panel-headline">
        <div class="panel-body">
          <center>
            <h2 style="margin-top: 30px; margin-bottom: 50px">Daftar Pengajuan Prakerin</h2>
          </center>

          <?php include('../alert.php') ?>

          <table class="table table-bordered table-hover" id="example">
            <thead>
              <tr>
                <th>
                  <center>No
                </th>
                <th>
                  <center>Nama Siswa
                </th>
                <th>
                  <center>Tempat Prakerin
                </th>
                <th>
                  <center>Tanggal Pengajuan
                </th>
                <th>
                  <center>Kondisi
                </th>
                <th>
                  <center>Pilihan
                </th>
              </tr>
            </thead>
            <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * from tb_pengajuan, tb_industri, tb_siswa
                      where tb_pengajuan.id_industri=tb_industri.id_industri and tb_siswa.nisn_siswa=tb_pengajuan.nisn_siswa ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
            <tr>
              <td>
                <center><?php echo $no++ ?>
              </td>
              <td>
                <?= $d['nama_siswa']; ?>
              </td>
              <td>
                <?= $d['nama_industri']; ?>
              </td>
              <td><center>
                <?= $d['tgl_pengajuan']; ?>
              </td>
              <td><center>
                <?= $d['kondisi']; ?>
              </td>

              <td>
                <center>
                  <a href="<?= $d['link_industri'] ?>">
                    <span class="label label-success">Lihat Pengajuan</span>
                  </a>
              </td>
            </tr>

            <?php } ?>
          </table>

        </div>
      </div>
    </div>
  </div>
  <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<?php include('footer.php') ?>

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
            <h2 style="margin-top: 30px">Daftar Mata Pelajaran</h2>
          </center>

          <?php include('../alert.php') ?>

          <a style=" margin-bottom: 20px" type="button" class="btn btn-success btn-xs" href="mapel_tambah.php">Tambah Mata Pelajaran</a>

          <table class="table table-bordered table-hover" id="example">
            <thead>
              <tr>
                <th>
                  <center>No
                </th>
                <th>
                  <center>Mata Pelajaran
                </th>
                <th>
                  <center>Nama Guru
                </th>
                <th>
                  <center>Kelas
                </th>
                <th>
                  <center>Pilihan
                </th>
              </tr>
            </thead>
            <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * from tb_mapel, tb_guru, tb_kelas WHERE (tb_mapel.id_guru=tb_guru.id_guru) AND (tb_mapel.id_kelas=tb_kelas.id_kelas)  ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
            <tr>
              <td>
                <center><?php echo $no++ ?>
              </td>
              <td>

                <?= $d['nama_mapel']; ?>
              </td>
              <td>
                <?= $d['nama_guru']; ?>
              </td>
              <td><center>
                <?= $d['tingkat'].' '.$d['jurusan'].' '.$d['kode_kelas'] ?>
              </td>

              <td>
                <center>
                  <a href="mapel_hapus.php?id_mapel=<?= $d['id_mapel']; ?>"
                    onclick="return confirm('Anda yakin Hapus data Mata Pelajaran <?= $d['nama_mapel']; ?> ?')">
                    <span class="label label-danger">Hapus</span>
                  </a>
                  <a href="mapel_edit.php?id_mapel=<?= $d['id_mapel'] ?>">
                    <span class="label label-primary">Edit</span>
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

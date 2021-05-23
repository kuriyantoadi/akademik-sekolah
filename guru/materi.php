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
            <h2 style="margin-top: 30px">Daftar Materi</h2>
          </center>

          <?php include('../alert.php') ?>
          <a style="margin-top: 10px; margin-bottom: 20px" type="button" class="btn btn-success btn-xs" href="materi_tambah.php">Tambah Materi</a>


          <table class="table table-bordered table-hover" id="example">
            <thead>
              <tr>
                <th>
                  <center>No
                </th>
                <th>
                  <center>Judul Materi
                </th>
                <th>
                  <center>Mata Pelajaran
                </th>
                <th>
                  <center>Tanggal Upload
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
                    $id_mapel = $_GET['id_mapel'];
                    $data = mysqli_query($koneksi, "SELECT * from tb_materi, tb_mapel, tb_guru, tb_kelas WHERE
                      (tb_mapel.id_mapel='$id_mapel') AND (tb_materi.id_mapel='$id_mapel') AND (tb_guru.id_guru='$id_guru') AND (tb_kelas.id_kelas=tb_mapel.id_kelas)");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
            <tr>
              <td>
                <center><?php echo $no++ ?>
              </td>
              <td>
                <?= $d['nama_materi']; ?>
              </td>
              <td>
                <?= $d['nama_mapel']; ?>
              </td>

              <td>
                <?= $d['tgl_upload']; ?>
              </td>
              <td><center>
                <?= $d['tingkat'].' '.$d['jurusan'].' '.$d['kode_kelas'] ?>
              </td>

              <td>
                <center>
                  <a href="materi_hapus.php?file_materi=<?= $d['file_materi'] ?>&id_materi=<?= $d['id_materi'] ?>&id_mapel=<?= $d['id_mapel'] ?>" onclick="return confirm('Anda yakin Hapus data Materi <?php echo $d['nama_materi']; ?> ?')">
                    <span class="label label-danger">Hapus</span>
                  </a>
                  <a href="materi_edit.php?id_materi=<?= $d['id_materi'] ?>">
                    <span class="label label-primary">Edit</span>
                  </a>
                  <a href="../assets/file_materi/<?= $d['file_materi'] ?>">
                    <span class="label label-success">Download</span>
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

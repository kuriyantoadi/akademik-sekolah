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
            <h2 style="margin-top: 30px">Daftar Industri</h2>
          </center>

          <?php include('../alert.php') ?>

          <a style=" margin-bottom: 20px" type="button" class="btn btn-success btn-xs" href="industri_tambah.php">Tambah Industri</a>

          <table class="table table-bordered table-hover" id="example">
            <thead>
              <tr>
                <th>
                  <center>No
                </th>
                <th>
                  <center>Nama Tempat industri
                </th>
                <th>
                  <center>Jenis Tempat industri
                </th>
                <th>
                  <center>Link Industri
                </th>
                <th>
                  <center>Pilihan
                </th>
              </tr>
            </thead>
            <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * from tb_industri ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
            <tr>
              <td>
                <center><?php echo $no++ ?>
              </td>
              <td>
                <?= $d['nama_industri']; ?>
              </td>
              <td>
                <?= $d['jenis_industri']; ?>
              </td>
              <td>
                <?= $d['link_industri']; ?>
              </td>

              <td>
                <center>
                  <a href="industri_hapus.php?id_industri=<?php echo $d['id_industri']; ?>" onclick="return confirm('Anda yakin Hapus data industri <?= $d['nama_industri']; ?> ?')">
                    <span class="label label-danger">Hapus</span>
                  </a>
                  <a href="industri_edit.php?id_industri=<?php echo $d['id_industri'] ?>">
                    <span class="label label-primary">Edit</span>
                  </a>
                  <a href="https://<?= $d['link_industri'] ?>">
                    <span class="label label-default">Lihat Web</span>
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

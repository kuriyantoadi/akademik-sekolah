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
                  <center>Kuota
                </th>
                <th>
                  <center>Status
                </th>
                <th>
                  <center>Pilihan
                </th>
              </tr>
            </thead>
            <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * from tb_industri, tb_jadwal_pkl where
                      tb_industri.id_industri=tb_jadwal_pkl.id_industri and tb_jadwal_pkl.status='buka' ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
            <tr>
              <td>
                <center><?php echo $no++ ?>
              </td>
              <td>
                <?= $d['nama_industri']; ?>
              </td>

              <td><center>
                <?= $d['kuota']; ?>
              </td>
              <td><center>
                <?= $d['status']; ?>
              </td>

              <td>
                <center>

                  <a href="https://<?= $d['link_industri'] ?>">
                    <span class="label label-default">Lihat Web</span>
                  </a>
                  <a href="industri_lihat.php?id_jadwal_pkl=<?= $d['id_jadwal_pkl'] ?>">
                    <span class="label label-success">Lihat</span>
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

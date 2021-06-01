<?php include('header.php') ?>
<?php include('function.php') ?>

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
            <h2 style="margin-top: 30px">Jadwal Prakerin</h2>
          </center>

          <?php include('alert.php') ?>


          <table class="table table-bordered table-hover" id="example">
            <thead>
              <tr>
                <th>
                  <center>No
                </th>
                <th>
                  <center>Nama Tempat Prakerin
                </th>
                <th>
                  <center>Tanggal Mulai
                </th>
                <th>
                  <center>Tanggal Selesai
                </th>
                <th>
                  <center>Kouta
                </th>
                <th>
                  <center>Status
                </th>
              
              </tr>
            </thead>
            <?php
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * from tb_jadwal_pkl,tb_industri where tb_industri.id_industri=tb_jadwal_pkl.id_industri ");
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
                <?= $d['tgl_mulai']; ?>
              </td>
              <td><center>
                <?= $d['tgl_selesai']; ?>
              </td>
              <td><center>
                <?= $d['kuota']; ?>
              </td>
              <td><center>
                <?= $d['status']; ?>
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

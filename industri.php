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
            <h2 style="margin-top: 30px">Daftar Industri</h2>
          </center>

          <?php include('alert.php') ?>


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
              
              </tr>
            </thead>
            <?php
                    include 'koneksi.php';
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

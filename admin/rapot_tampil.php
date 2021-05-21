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
            <h2 style="margin-top: 30px">Tampil Rapot</h2>
          </center>

          <?php include('../alert.php') ?>

          <table class="table table-bordered table-hover" id="example">

            <?php
              include '../koneksi.php';
              $no = 1;
              $id_siswa = $_GET['id_siswa'];
              $sms = $_GET['sms'];
              $nm_rapot = $_GET['nm_rapot'];
              $data = mysqli_query($koneksi, "SELECT * from tb_siswa, tb_kelas where tb_siswa.id_kelas=tb_kelas.id_kelas and tb_siswa.id_siswa='$id_siswa'");
              while ($d = mysqli_fetch_array($data)) {
              ?>
            <tr>
              <td>Nama Siswa</td>
              <td>
                <?= $d['nama_siswa']; ?>
              </td>
            </tr>
            <tr>
              <td>Nama Kelas</td>
              <td>
                <?php echo $d['tingkat']." ".$d['jurusan']." ".$d['kode_kelas'];  ?>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <center>
                <embed type="application/pdf" src="../assets/<?= $sms ?>/<?= $nm_rapot ?>" width="100%" height="500">
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

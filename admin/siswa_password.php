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
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title"><center>Ganti Kata Sandi Siswa</h3>
              </div>

              <?php
              $id_siswa = $_GET['id_siswa'];
              include('../koneksi.php');
              $data = mysqli_query($koneksi, "SELECT * from tb_siswa where id_siswa='$id_siswa'");
              while ($d = mysqli_fetch_array($data)) {
               ?>

              <form class="" action="siswa_password_up.php" method="post">
              <div class="panel-body">
                <?php include '../alert.php'; ?>
                <p>NISN</p>
                  <input type="hidden" name="id_siswa" class="form-control" value="<?= $d['id_siswa'] ?>" readonly>
                  <input type="text" name="nisn_siswa" class="form-control" value="<?= $d['nisn_siswa'] ?>" readonly>
                <br>
                <p>Nama Siswa</p>
                  <input type="text" name="nisn_siswa" class="form-control" value="<?= $d['nama_siswa'] ?>" readonly>
                <br>
                <p>Kata Sandi Baru</p>
                  <input type="text" name="password" class="form-control" value="" required>
                <br>
                <p>Konfirmasi Kata Sandi</p>
                  <input type="password" name="konfirmasi_password" class="form-control" value="" required>
                <br>
                <center><input type="submit" class="btn btn-primary btn-xs" name="" value="submit">
              </form>
            <?php } ?>
            </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php include('footer.php') ?>

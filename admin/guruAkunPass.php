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
                <h3 class="panel-title"><center>Ganti Kata Sandi</h3>
              </div>

              <form class="" action="guruAkunPassUp.php" method="post">
              <div class="panel-body">
                <?php
                include '../alert.php';
                include '../koneksi.php';
                $id_guru = $_GET['id_guru'];
                $id_guru = $_GET['id_guru'];
                $data = mysqli_query($koneksi, "SELECT * from tb_guru where id_guru='$id_guru'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <p>Nama Guru</p>
                  <input type="hidden" name="id_guru" value="<?= $d['id_guru'] ?>">
                  <input type="text" name="username" class="form-control" value="<?= $d['nama_guru'] ?>" readonly>
                <br>
                <p>Username</p>
                  <input type="text" name="username" class="form-control" value="<?= $d['username'] ?>" readonly>
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

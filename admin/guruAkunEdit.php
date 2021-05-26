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
                <h3 class="panel-title"><center>Edit Akun guru</h3>
              </div>

              <?php
              include '../koneksi.php';
              $id_guru = $_GET['id_guru'];
              $data = mysqli_query($koneksi, "SELECT * from tb_guru where id_guru='$id_guru'");
              while ($d = mysqli_fetch_array($data)) {
              ?>

              <form class="" action="guruAkunEditUp.php" method="post">
              <div class="panel-body">

                <p>Nama guru</p>
                  <input type="hidden" name="id_guru" class="form-control" value="<?= $d['id_guru'] ?>" readonly>
                  <input type="text" name="nama_guru" class="form-control" value="<?= $d['nama_guru'] ?>" readonly>
                <br>
                <p>Username Guru</p>
                  <input type="text" name="username" class="form-control" value="<?= $d['username'] ?>" required>
                <br>
                <p>Status</p>
                  <select class="form-control" name="status">
                    <option value="<?= $d['status'] ?>">Pilihan Awal - <?= $d['status'] ?></option>
                    <?php s_status() ?>
                  </select>
                <br>
                <center><input type="submit" class="btn btn-primary btn-xs" name="" value="submit">
                <br>
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

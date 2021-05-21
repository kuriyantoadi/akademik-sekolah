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

              <form class="" action="password_up.php" method="post">
              <div class="panel-body">
                <?php include '../alert.php'; ?>
                <p>Username</p>
                  <input type="text" name="username" class="form-control" value="<?= $username ?>" readonly>
                <br>
                <p>Kata Sandi Baru</p>
                  <input type="text" name="password" class="form-control" value="" required>
                <br>
                <p>Konfirmasi Kata Sandi</p>
                  <input type="password" name="konfirmasi_password" class="form-control" value="" required>
                <br>
                <center><input type="submit" class="btn btn-primary btn-xs" name="" value="submit">
              </form>

            </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php include('footer.php') ?>

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
                <h3 class="panel-title"><center>Akun Guru</h3>
              </div>



              <form class="" action=".php" method="post">
              <div class="panel-body">
                <?php
                include '../koneksi.php';
                include '../alert.php';
                $id_guru = $_GET['id_guru'];
                $data = mysqli_query($koneksi, "SELECT * from tb_guru where id_guru='$id_guru'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                
                <a style="margin-bottom: 15px" href="guruAkunEdit.php?id_guru=<?= $id_guru ?>" class="btn btn-primary btn-sm">Edit</a>
                <a style="margin-bottom: 15px" href="guruAkunPass.php?id_guru=<?= $id_guru ?>" class="btn btn-danger btn-sm">Password</a>

                <p>Nama guru</p>
                  <input type="text" name="nama_guru" class="form-control" value="<?= $d['nama_guru'] ?>" readonly>
                <br>
                <p>Username Guru</p>
                  <input type="text" name="username" class="form-control" value="<?= $d['username'] ?>" readonly>
                <br>
                <p>Password enkripsi</p>
                  <input type="text" name="password" class="form-control" value="<?= $d['password'] ?>" readonly>
                <br>
                <p>Status</p>
                  <input type="text" name="password" class="form-control" value="<?= $d['status'] ?>" readonly>
                <br>
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

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
                <h3 class="panel-title"><center>Edit Industri</h3>
              </div>

              <?php
              include '../koneksi.php';
              $id_industri = $_GET['id_industri'];
              $data = mysqli_query($koneksi, "SELECT * from tb_industri where id_industri='$id_industri'");
              while ($d = mysqli_fetch_array($data)) {
              ?>

              <form class="" action="industri_edit_up.php" method="post">

              <div class="panel-body">
                <p>Nama industri</p>
									<input type="hidden" name="id_industri" class="form-control" value="<?= $d['id_industri'] ?>">
                  <input type="text" name="nama_industri" class="form-control" value="<?= $d['nama_industri'] ?>" required>
                <br>
                <p>Jenis industri</p>
                  <input type="text" name="jenis_industri" class="form-control" value="<?= $d['jenis_industri'] ?>" required>
                <br>
                <p>Link industri</p>
                  <input type="text" name="link_industri" class="form-control" value="<?= $d['link_industri'] ?>" required>
                <br>

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

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
                <h3 class="panel-title"><center>Edit Jurusan</h3>
              </div>

              <?php
              include '../koneksi.php';
              $id_jurusan = $_GET['id_jurusan'];
              $data = mysqli_query($koneksi, "SELECT * from tb_jurusan where id_jurusan='$id_jurusan'");
              while ($d = mysqli_fetch_array($data)) {
              ?>

              <form class="" action="jurusan_edit_up.php" method="post">

              <div class="panel-body">
                <p>Nama Jurusan</p>
                  <input type="text" name="nama_jurusan" class="form-control" value="<?= $d['nama_jurusan'] ?>">
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

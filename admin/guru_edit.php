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
                <h3 class="panel-title"><center>Edit Guru</h3>
              </div>

              <?php
              include '../koneksi.php';
              $id_guru = $_GET['id_guru'];
              $data = mysqli_query($koneksi, "SELECT * from tb_guru where id_guru='$id_guru'");
              while ($d = mysqli_fetch_array($data)) {
              ?>

              <form class="" action="guru_edit_up.php" method="post">

              <div class="panel-body">
                 <!-- ganti sesuaikan dengan yg ada di tambah guru -->
                <p>Nama guru</p>
                  <!-- tinggal ganti isi name dan value nya seperti yg ada di tb_guru -->
                  <input type="text" name="nama_guru" class="form-control" value="<?= $d['nama_guru'] ?>">
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

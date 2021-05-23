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
                <h3 class="panel-title"><center>Tambah Materi Tambah</h3>
              </div>

              <form class="" action="industri_tambah_up.php" method="post">
                <?php
                include '../koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * from tb_industri ");
                while ($d = mysqli_fetch_array($data)) {
                 ?>
              <div class="panel-body">
                <p>Nama Guru</p>
                  <input type="text" name="nama_industri" class="form-control" value="" required>
                <br>
                <p>Nama Mapel</p>
                  <input type="text" name="jenis_industri" class="form-control" value="" required>
                <br>
                <p>Nama Kelas</p>
                  <input type="text" name="link_industri" class="form-control" value="" required>
                <br>
                <p>Nama Materi</p>
                  <input type="text" name="link_industri" class="form-control" value="" required>
                <br>
                <p>Upload Materi</p>
                  <input type="text" name="link_industri" class="form-control" value="" required>
                <br>
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

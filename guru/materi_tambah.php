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

              <form class="" action="materi_tambah_up.php" method="post" enctype="multipart/form-data">
                <?php
	                include '../koneksi.php';
									$data = mysqli_query($koneksi, "SELECT * from tb_guru where tb_guru.id_guru='$id_guru' ");
	                while ($d = mysqli_fetch_array($data)) {
                ?>
              <div class="panel-body">
                <p>Nama Guru</p>
									<input type="hidden" name="id_guru" class="form-control" value="<?= $d['id_guru'] ?>" readonly>
                  <input type="text" name="nama_guru" class="form-control" value="<?= $d['nama_guru'] ?>" readonly>
                <br>


                <p>Nama Mapel</p>
									<select class="form-control" name="id_mapel" required>
										<option value=""> Pilih </option>

										<?php
										$db_mapel = mysqli_query($koneksi, "SELECT * from tb_mapel where tb_mapel.id_guru='$id_guru' ");
										while ($mapel = mysqli_fetch_array($db_mapel)) {
										 ?>
										<option value="<?= $mapel['id_mapel'] ?>"> <?= $mapel['nama_mapel'] ?> </option>
										<?php } ?>

									</select>
                <br>

                <p>Nama Kelas</p>
									<select class="form-control" name="id_kelas">
										<option value=""> Pilih </option>
										<?php select_kelas() ?>
									</select>
                <br>
                <p>Nama Materi</p>
                  <input type="text" name="nama_materi" class="form-control" value="" required>
                <br>
                <p>Upload Materi</p>
									<input type="file" name="file_materi" accept="application/pdf" class="form-control-file" required>
                <br>
                <br>
                <center><input type="submit" class="btn btn-primary btn-xs" name="upload" value="submit">
              </form>
            <?php
						}
						 ?>
            </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php include('footer.php') ?>

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

              <form class="" action="materi_edit_up.php" method="post" enctype="multipart/form-data">
                <?php
	                include '../koneksi.php';
                  $id_materi = $_GET['id_materi'];
									$data = mysqli_query($koneksi, "SELECT * from tb_materi, tb_mapel, tb_kelas where
                    (tb_materi.id_materi='$id_materi') AND (tb_mapel.id_mapel=tb_materi.id_mapel) AND (tb_kelas.id_kelas=tb_materi.id_kelas) ");
	                while ($d = mysqli_fetch_array($data)) {
                ?>

              <div class="panel-body">
                <p>Nama Mapel</p>
                  <input type="hidden" name="id_mapel" value="<?= $d['id_mapel'] ?>">
									<select class="form-control" name="id_mapel" required>
										<option value="<?= $d['id_mapel'] ?>"> Pilihan Awal - <?= $d['nama_mapel'] ?> </option>

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
										<option value="<?= $d['id_kelas'] ?>"> Pilihan Awal - <?= $d['tingkat'].' '.$d['jurusan'].' '.$d['kode_kelas'] ?> </option>
										<?php select_kelas() ?>
									</select>
                <br>
                <p>Nama Materi</p>
                  <input type="text" name="nama_materi" class="form-control" value="<?= $d['nama_materi'] ?>" required>
                <br>
                <p>Upload Materi</p>
									<input type="file" name="file_materi" accept="application/pdf" class="form-control-file" disabled>
                  <p>Jika salah upload file materi, silahkan hapus materi dan upload ulang</p>
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

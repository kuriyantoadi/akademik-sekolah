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
                <h3 class="panel-title"><center>Upload Laporan Prakerin</h3>
              </div>

              <?php
              include '../koneksi.php';
              $data = mysqli_query($koneksi, "SELECT * from tb_siswa where id_siswa='$id_siswa' ");
              while ($d = mysqli_fetch_array($data)) {
								$d_prakerin = mysqli_query($koneksi, "SELECT * from tb_lap_prakerin where id_siswa='$id_siswa' ");
								$d_file_prakerin = mysqli_fetch_array($d_prakerin);


               ?>

              <form class="" action="lap_prakerin_up.php" method="post" enctype="multipart/form-data">
              <div class="panel-body">
								<!-- <?php include('../alert.php') ?> -->
                <p>Nama Siswa</p>
                  <input type="hidden" name="id_siswa" value="<?= $id_siswa ?>">
                  <input type="text" name="nama_siswa" class="form-control" value="<?= $d['nama_siswa'] ?>" readonly>
                <br>
                <p>NISN Siswa</p>
                  <input type="text" name="nisn_siswa" class="form-control" value="<?= $nisn_siswa ?>" readonly>
                <br>

                <?php

								if (($d_file_prakerin['id_siswa']) == $id_siswa) {

									?>
									File sudah diupload
									<br><a href="../assets/lap_prakerin/<?= $d_file_prakerin['file_prakerin'] ?>" class="btn btn-success">Download</a>
								<?php }else{ ?>
									<p>Uploaf File PDF</p>
									<input type="file" name="file_prakerin" class="form-control" value="">
									<p>Maksimal file upload 1.5 MB</p>
								<?php
                  }?>
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

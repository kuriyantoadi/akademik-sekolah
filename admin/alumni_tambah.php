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
                <h3 class="panel-title"><center>Tambah Alumni</h3>
              </div>

              <form class="" action="alumni_edit_up.php" method="post">

              <div class="panel-body">
                <p>Nama Alumni</p>
                  <input type="text" name="nama_alumni" class="form-control" value="" required>
                <br>
                <p>Jurusan Alumni</p>
                  <select class="form-control" name="jurusan_alumni">
                    <option value="">Pilih</option>
                    <?php select_jurusan() ?>
                  </select>
                <br>
                <p>Tahun Angkatan</p>
                  <input type="text" class="form-control yearpicker" value="<?= $d['angkatan'] ?>" name="angkatan"/>
                <br>
                <p>Tempat Kerja/Kuliah</p>
                  <input type="text" name="tempat_kerja" class="form-control" value="<?= $d['tempat_kerja'] ?>" required>
                <br>

                <p>Status</p>
                  <select class="form-control" name="status" required>
                    <option value="">Pilih</option>
                    <option value="aktif">Aktif</option>
                    <option value="tidak aktif">Tidak Aktif</option>
                  </select>
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

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
                <h3 class="panel-title"><center>Tambah Mata Pelajaran</h3>
              </div>

              <form class="" action="mapel_tambah_up.php" method="post">

              <div class="panel-body">
                <p>Nama Mata Pelajaran</p>
                  <input type="text" name="nama_mapel" class="form-control" value="">
                <br>
                <p>Nama Guru</p>
                  <select class="form-control" name="id_guru" required>
                    <option value=""> Pilih </option>
                    <?php s_guru() ?>
                  </select>
                <br>
                <p>Kelas</p>
                <select class="form-control" name="id_kelas" required>
                  <option value=""> Pilih </option>
                  <?php select_kelas() ?>
                </select>
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

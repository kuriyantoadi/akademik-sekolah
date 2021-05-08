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
                <h3 class="panel-title"><center>Tambah Kelas Baru</h3>
              </div>

              <form class="" action="kelas_tambah_up.php" method="post">

              <div class="panel-body">
                <p>Tingkat</p>
                  <select class="form-control" name="tingkat">
                    <option value="">Pilih</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                  </select>
                <br>
                <p>Jurusan</p>
                  <select class="form-control" name="jurusan">
                    <option value="">Pilih</option>
                    <?php select_jurusan() ?>
                  </select>
                <br>

                <p>Kode Kelas</p>
                  <select class="form-control" name="kode_kelas">
                    <option value="">Pilih</option>
                    <?php select_kode_kelas() ?>
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

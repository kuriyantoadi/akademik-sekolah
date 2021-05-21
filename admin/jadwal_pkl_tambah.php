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
                <h3 class="panel-title"><center>Tambah Jadwal Prakerin</h3>
              </div>

              <form class="" action="jadwal_pkl_tambah_up.php" method="post">

              <div class="panel-body">
                <p>Nama Industri</p>
                  <select class="form-control" name="id_industri" required>
                    <option value="">Pilih</option>
                    <?php s_industri() ?>
                  </select>
                <br>
                <p>Tanggal Mulai</p>
                  <input type="text" name="tgl_mulai" class="form-control datepicker" value="" required>
                <br>
                <p>Tanggal Selesai</p>
                  <input type="text" name="tgl_selesai" class="form-control datepicker" value="" required>
                <br>
                <p>Kuota Prakerin</p>
                  <input type="number" name="kuota" class="form-control" value="" required>
                <br>
                <p>Status</p>
                  <select class="form-control" name="status" required>
                    <option value="">Pilihan</option>
                    <option value="buka">Buka</option>
                    <option value="tutup">Tutup</option>
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

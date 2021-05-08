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
                <h3 class="panel-title"><center>Tambah Jurusan Baru</h3>
              </div>

              <form class="" action="jurusan_tambah_up.php" method="post">

              <div class="panel-body">
                <p>Nama Jurusan</p>
                  <input type="text" name="nama_jurusan" class="form-control" value="">
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

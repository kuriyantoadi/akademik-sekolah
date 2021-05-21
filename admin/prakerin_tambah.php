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
                <h3 class="panel-title"><center>Tambah Tempat Prakerin Baru</h3>
              </div>

              <form class="" action="prakerin_tambah_up.php" method="post">

              <div class="panel-body">
                <p>Nama Tempat Prakerin</p>
                  <input type="text" name="nama_industri" class="form-control" value="">
                <br>
                <p>Jenis Industri</p>
                  <input type="text" name="jenis_industri" class="form-control" value="">
                <br>
                <p>Link Industri</p>
                  <input type="text" name="industri" class="form-control" value="">
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

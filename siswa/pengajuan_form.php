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
                <h3 class="panel-title"><center>Form Pengajuan Prakerin</h3>
              </div>

              <?php
              include '../koneksi.php';
              $id_jadwal_pkl = $_GET['id_jadwal_pkl'];
              $jdw_db = mysqli_query($koneksi, "SELECT * from tb_industri, tb_jadwal_pkl where tb_industri.id_industri=tb_jadwal_pkl.id_industri and id_jadwal_pkl='$id_jadwal_pkl' ");
              while ($jdw = mysqli_fetch_array($jdw_db)) {

              $siswa_db = mysqli_query($koneksi, "SELECT * from tb_siswa, tb_kelas where nisn_siswa='$nisn_siswa' and tb_siswa.id_kelas=tb_kelas.id_kelas ");
              while ($siswa = mysqli_fetch_array($siswa_db)) {

               ?>

              <form class="" action="pengajuan_form_up.php" method="post">
              <div class="panel-body">
								<?php include('../alert.php') ?>
                <p>Tanggal Pengajuan</p>
									<input type="hidden" name="id_jadwal_pkl" class="form-control" value="<?= $jdw['id_jadwal_pkl'] ?>" readonly>
                  <input type="text" name="tgl_pengajuan" class="form-control" value="<?= date('d-m-Y'); ?>" readonly>
                <br>
                <p>Nama Siswa</p>
                  <input type="text" name="nama_siswa" class="form-control" value="<?= $siswa['nama_siswa'] ?>" readonly>
                <br>
                <p>NISN Siswa</p>
                  <input type="text" name="nisn_siswa" class="form-control" value="<?= $nisn_siswa ?>" readonly>
                <br>
                <p>Kelas</p>
									<input type="hidden" name="kelas" class="form-control" value="<?= $siswa['id_kelas'] ?>" readonly>
                  <input type="text" name="" class="form-control" value="<?= $siswa['tingkat'].' '.$siswa['jurusan'].' '.$siswa['kode_kelas'] ?>" readonly>
                <br>
                <p>Tempat Prakerin</p>
									<input type="hidden" name="id_industri" class="form-control" value="<?= $jdw['id_industri'] ?>" readonly>
                  <input type="text" name="" class="form-control" value="<?= $jdw['nama_industri'] ?>" readonly>
                <br>
                <p>Tanggal Mulai Prakerin</p>
                  <input type="text" name="tgl_mulai" class="form-control" value="<?= $jdw['tgl_mulai'] ?>" readonly>
                <br>
								<p>Tanggal Selesai Prakerin</p>
									<input type="text" name="tgl_selesai" class="form-control" value="<?= $jdw['tgl_selesai'] ?>" readonly>
								<br>
                <br>
                <center><input type="submit" class="btn btn-primary btn-xs" name="" value="submit">
              </form>
            <?php
									}
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

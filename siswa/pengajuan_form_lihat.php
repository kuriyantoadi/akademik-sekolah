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
              $nisn_siswa = $_GET['nisn_siswa'];
              $data = mysqli_query($koneksi, "SELECT * from tb_industri, tb_siswa, tb_pengajuan, tb_kelas	where
								(tb_pengajuan.id_industri=tb_industri.id_industri and tb_pengajuan.nisn_siswa=tb_siswa.nisn_siswa	AND tb_siswa.id_kelas=tb_kelas.id_kelas) AND tb_pengajuan.nisn_siswa='$nisn_siswa' ");
							if (empty($data)) {
								echo "Maaf anda belum mengajukan Prakerin";
								exit;
							}

						  while ($d = mysqli_fetch_array($data)) {
               ?>

              <div class="panel-body">
								<?php include('../alert.php') ?>
                <p>Tanggal Pengajuan</p>
									<input type="hidden" name="id_jadwal_pkl" class="form-control" value="<?= $d['id_jadwal_pkl'] ?>" readonly>
                  <input type="text" name="tgl_pengajuan" class="form-control" value="<?= date('d-m-Y'); ?>" readonly>
                <br>
                <p>Nama Siswa</p>
                  <input type="text" name="nama_siswa" class="form-control" value="<?= $d['nama_siswa'] ?>" readonly>
                <br>
                <p>NISN Siswa</p>
                  <input type="text" name="nisn_siswa" class="form-control" value="<?= $nisn_siswa ?>" readonly>
                <br>
                <p>Kelas</p>
									<input type="hidden" name="kelas" class="form-control" value="<?= $d['id_kelas'] ?>" readonly>
                  <input type="text" name="" class="form-control" value="<?= $d['tingkat'].' '.$d['jurusan'].' '.$d['kode_kelas'] ?>" readonly>
                <br>
                <p>Tempat Prakerin</p>
									<input type="hidden" name="id_industri" class="form-control" value="<?= $d['id_industri'] ?>" readonly>
                  <input type="text" name="" class="form-control" value="<?= $d['nama_industri'] ?>" readonly>
                <br>
                <p>Tanggal Mulai Prakerin</p>
                  <input type="text" name="tgl_mulai" class="form-control" value="<?= $d['tgl_mulai'] ?>" readonly>
                <br>
								<p>Tanggal Selesai Prakerin</p>
									<input type="text" name="tgl_selesai" class="form-control" value="<?= $d['tgl_selesai'] ?>" readonly>
								<br>
								<p>Kondisi</p>
									<input type="text" name="tgl_selesai" class="form-control" value="<?= $d['kondisi'] ?>" readonly>
								<br>
								<p>Tanggal Konfrimasi</p>
									<input type="text" name="tgl_selesai" class="form-control" value="<?= $d['tgl_konfirmasi'] ?>" readonly>
								<br>
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

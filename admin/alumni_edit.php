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

              <form class="" action="alumni_tambah_up.php" method="post">
                <?php
                include '../koneksi.php';
                $id_alumni = $_GET['id_alumni'];
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * from tb_alumni where id_alumni='$id_alumni'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
              <div class="panel-body">
                <p>Nama Alumni</p>
                  <input type="text" name="nama_alumni" class="form-control" value="<?= $d['nama_alumni'] ?>" required>
                <br>
                <p>Jurusan Alumni</p>
                  <select class="form-control" name="jurusan_alumni">
                    <option value="<?= $d['jurusan'] ?>">Pilihan Awal ( <?= $d['jurusan_alumni'] ?> )</option>
                    <?php select_jurusan() ?>
                  </select>
                <br>
                <p>Tahun Angkatan</p>
                  <input type="text" class="form-control yearpicker" name="angkatan" value="<?= $d['angkatan'] ?>"/>
                <br>
                <p>Tempat Kerja/Kuliah</p>
                  <input type="text" name="tempat_kerja" class="form-control" value="<?= $d['tempat_kerja'] ?>" required>
                <br>

                <p>Status</p>
                  <select class="form-control" name="status" required>
                    <option value="<?php $d['status'] ?>">Pilihan Awal ( <?= $d['status'] ?> )</option>
                    <option value="aktif">Aktif</option>
                    <option value="tidak aktif">Tidak Aktif</option>
                  </select>
                <br>

                <br>
                <center><input type="submit" class="btn btn-primary btn-xs" name="" value="submit">
              </form>
            <?php } ?>
            </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php include('footer.php') ?>

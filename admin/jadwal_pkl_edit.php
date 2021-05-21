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

              <form class="" action="jadwal_pkl_edit_up.php" method="post">
                <?php
                include('../koneksi.php');
                $id_jadwal_pkl = $_GET['id_jadwal_pkl'];
                $data = mysqli_query($koneksi, "SELECT * from tb_jadwal_pkl,tb_industri where id_jadwal_pkl='$id_jadwal_pkl' and tb_jadwal_pkl.id_industri=tb_industri.id_industri");
                while ($d = mysqli_fetch_array($data)) {
                ?>
              <div class="panel-body">
                <p>Nama Industri</p>
                <input type="hidden" name="id_jadwal_pkl" class="form-control datepicker" value="<?= $d['id_jadwal_pkl'] ?>" required>
                  <select class="form-control" name="id_industri" required>
                    <option value="<?= $d['id_industri'] ?>">Pilihan Awal (<?= $d['nama_industri'] ?>)</option>
                    <?php s_industri() ?>
                  </select>
                <br>
                <p>Tanggal Mulai</p>
                  <input type="text" name="tgl_mulai" class="form-control datepicker" value="<?= $d['tgl_mulai'] ?>" required>
                <br>
                <p>Tanggal Selesai</p>
                  <input type="text" name="tgl_selesai" class="form-control datepicker" value="<?= $d['tgl_selesai'] ?>" required>
                <br>
                <p>Kuota Prakerin</p>
                  <input type="number" name="kuota" class="form-control" value="<?= $d['kuota'] ?>" required>
                <br>
                <p>Status</p>
                  <select class="form-control" name="status" required>
                    <option value="">Pilihan</option>
                    <option value="buka">Buka</option>
                    <option value="tutup">Tutup</option>
                  </select>
                <br>
              <?php } ?>
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
<?php  include('footer.php') ?>

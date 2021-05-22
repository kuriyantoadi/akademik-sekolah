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
                <h3 class="panel-title"><center>Edit Mata Pelajaran</h3>
              </div>

              <form class="" action="mapel_edit_up.php" method="post">
                <?php
                $id_mapel = $_GET['id_mapel'];
                include '../koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * from tb_mapel, tb_guru, tb_kelas
                  WHERE (tb_mapel.id_guru=tb_guru.id_guru) AND (tb_mapel.id_kelas=tb_kelas.id_kelas) AND (tb_mapel.id_mapel='$id_mapel') ");
                while ($d = mysqli_fetch_array($data)) {
                ?>

              <div class="panel-body">
                <p>Nama Mata Pelajaran</p>
                  <input type="hidden" name="id_mapel" class="form-control" value="<?= $d['id_mapel'] ?>" required>
                  <input type="text" name="nama_mapel" class="form-control" value="<?= $d['nama_mapel'] ?>" required>
                <br>
                <p>Nama Guru</p>
                  <select class="form-control" name="id_guru" required>
                    <option value="<?= $d['id_guru'] ?>"> Pilihan Awal ( <?= $d['nama_guru'] ?>) </option>
                    <?php s_guru() ?>
                  </select>
                <br>
                <p>Kelas</p>
                <select class="form-control" name="id_kelas" required>
                  <option value="<?= $d['id_kelas'] ?>"> Pilihan Awal ( <?= $d['tingkat'].' '.$d['jurusan'].' '.$d['kode_kelas'] ?>) </option>
                  <?php select_kelas() ?>
                </select>
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

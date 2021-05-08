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
                <h3 class="panel-title"><center>Edit Kelas</h3>
              </div>

              <?php
              include '../koneksi.php';
              $id_kelas = $_GET['id_kelas'];
              $data = mysqli_query($koneksi, "SELECT * from tb_kelas where id_kelas='$id_kelas'");
              while ($d = mysqli_fetch_array($data)) {
              ?>

              <form class="" action="kelas_edit_up.php" method="post">

              <div class="panel-body">
                <p>Tingkat</p>
									<input type="hidden" name="id_kelas" value="<?= $d['id_kelas'] ?>">
                  <select class="form-control" name="tingkat">
                    <option value="<?= $d['tingkat'] ?>">Pilihan Awal ( <?= $d['tingkat'] ?> )</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                  </select>
                <br>
                <p>Jurusan</p>
                  <select class="form-control" name="jurusan">
                    <option value="<?= $d['jurusan'] ?>">Pilihan Awal ( <?= $d['jurusan'] ?> )</option>
                    <?php select_jurusan() ?>
                  </select>
                <br>

                <p>Kode Kelas</p>
                  <select class="form-control" name="kode_kelas">
                    <option value="<?= $d['kode_kelas'] ?>">Pilihan Awal ( <?= $d['kode_kelas'] ?> ) </option>
                    <?php select_kode_kelas() ?>
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

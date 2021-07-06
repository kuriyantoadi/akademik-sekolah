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
						<div class="panel-body">
              <center>
                <h2 style="margin-top: 10px">Daftar Laporan Prakerin</h2>
              </center>
							<?php include('../alert.php') ?>

              <table class="table table-bordered table-hover" id="example">
                  <thead>
                      <tr>
                          <th>
                              <center>No
                          </th>
													<th>
															<center>NISN
													</th>
                          <th>
                              <center>Nama Siswa
                          </th>

                          <th>
                              <center>Status
                          </th>
                          <th>
                              <center>Pilihan
                          </th>
                      </tr>
                  </thead>
                  <?php
                  include '../koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi, "SELECT * from tb_siswa, tb_lap_prakerin
                  where tb_siswa.id_siswa=tb_lap_prakerin.id_siswa");

                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                      <tr>
                          <td>
                              <center><?php echo $no++ ?>
                          </td>
                          <td>
                              <?php echo $d['nisn_siswa']; ?>
                          </td>
													<td>
															<?php echo $d['nama_siswa']; ?>
													</td>

                          <td>
                              <center>Sudah Upload
                          </td>
                          <td><center>
                              <!-- <a type="button" class="btn-primary btn-xs" href="#">Kecil</a> -->
                              <a href="lap_prakerin_hapus.php?id_lap_prakerin=<?= $d['id_lap_prakerin']; ?>&file_prakerin=<?= $d['file_prakerin'] ?>" onclick="return confirm('Anda yakin Hapus data Prakerin <?php echo $d['nama_siswa']; ?> ?')">
                                <span class="label label-danger">Hapus</span>
                              </a>
                              <a href="../assets/lap_prakerin/<?= $d['file_prakerin'] ?>">
                                <span class="label label-success">Download</span>
                              </a>

                          </td>
                      </tr>
                  <?php
                  } ?>
              </table>

						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php include('footer.php') ?>

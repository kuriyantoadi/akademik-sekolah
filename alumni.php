<?php include('header.php') ?>
<?php include('function.php') ?>

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
                <h2 style="margin-top: 10px">Daftar Alumni</h2>
              </center>
							<?php include('alert.php') ?>

              <table class="table table-bordered table-hover" id="example">
                  <thead>
                      <tr>
                          <th>
                              <center>No
                          </th>
													<th>
															<center>Nama Alumni
													</th>
                          <th>
                              <center>Jurusan
                          </th>
                          <th>
                              <center>Angkatan
                          </th>
                          <th>
                              <center>Tempat Kerja/Kuliah
                          </th>
                          <th>
                              <center>Status
                          </th>

                      </tr>
                  </thead>
                  <?php
                  include 'koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi, "SELECT * from tb_alumni ");
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                      <tr>
                          <td>
                              <center><?php echo $no++ ?>
                          </td>
                          <td>
                              <?php echo $d['nama_alumni']; ?>
                          </td>
													<td>
															<?php echo $d['jurusan_alumni']; ?>
													</td>
                          <td>
                              <?php echo $d['angkatan']; ?>
                          </td>
                          <td>
                              <center><?= $d['tempat_kerja'];  ?>
                          </td>
                          <td>
                              <center><?= $d['status'];  ?>
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

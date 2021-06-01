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
                <h2 style="margin-top: 10px">Daftar Alumni</h2>
              </center>
							<?php include('../alert.php') ?>
							<a style="margin-top: 10px; margin-bottom: 20px" type="button" class="btn btn-success btn-xs" href="alumni_tambah.php">Tambah Alumni</a>

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
                          <th>
                              <center>Pilihan
                          </th>
                      </tr>
                  </thead>
                  <?php
                  include '../koneksi.php';
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
                          <td><center>
                              <!-- <a type="button" class="btn-primary btn-xs" href="#">Kecil</a> -->
                              <a href="alumni_hapus.php?id_alumni=<?php echo $d['id_alumni']; ?>"
                                onclick="return confirm('Anda yakin Hapus data Alumni <?php echo $d['nama_alumni']; ?> ?')">
                                <span class="label label-danger">Hapus</span>
                              </a>
                              <a href="alumni_edit.php?id_alumni=<?php echo $d['id_alumni'] ?>">
                                <span class="label label-primary">Edit</span>
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

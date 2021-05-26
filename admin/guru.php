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
                <h2 style="margin-top: 10px">Daftar Guru</h2>
              </center>
							<?php include('../alert.php') ?>
							<a style="margin-top: 10px; margin-bottom: 20px" type="button" class="btn btn-success btn-xs" href="guru_tambah.php">Tambah Guru</a>

              <table class="table table-bordered table-hover" id="example">
                  <thead>
                      <tr>
                          <th>
                              <center>No
                          </th>
													<th>
															<center>NIK
													</th>
                          <th>
                              <center>Nama Guru
                          </th>
                          <th>
                              <center>Kompetensi
                          </th>
                          <th>
                              <center>Tugas Tambahan
                          </th>
                          <th>
                              <center>Pilihan
                          </th>
                      </tr>
                  </thead>
                  <?php
                  include '../koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi, "SELECT * from tb_guru ");
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                      <tr>
                          <td>
                              <center><?php echo $no++ ?>
                          </td>
                          <td>
                              <?php echo $d['nik_guru']; ?>
                          </td>
													<td>
															<?php echo $d['nama_guru']; ?>
													</td>
                          <td>
                              <?php echo $d['kompetensi']; ?>
                          </td>
                          <td>
                              <center><?= $d['tugas_tambahan'];  ?>
                          </td>
                          <td><center>
                              <!-- <a type="button" class="btn-primary btn-xs" href="#">Kecil</a> -->
                              <a href="guru_hapus.php?id_guru=<?php echo $d['id_guru']; ?>" onclick="return confirm('Anda yakin Hapus data guru <?php echo $d['nama_guru']; ?> ?')">
                                <span class="label label-danger">Hapus</span>
                              </a>
                              <a href="guru_edit.php?id_guru=<?php echo $d['id_guru'] ?>">
                                <span class="label label-primary">Edit</span>
                              </a>
                              <a href="guru_detail.php?id_guru=<?php echo $d['id_guru'] ?>">
                                <span class="label label-success">Detail</span>
                              </a>
															<a href="guruAkun.php?id_guru=<?php echo $d['id_guru'] ?>">
                                <span class="label label-warning">Akun</span>
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

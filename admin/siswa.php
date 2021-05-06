<?php include('header.php') ?>
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
                <h2 style="margin-top: 30px">Daftar Siswa</h2>
              </center>

                <a href="siswa_tambah.php" data-toggle="modal" data-target="#tambah_siswa">
                  <span style="margin-top: 30px" class="label label-primary">Tambah Siswa</span>
                </a>

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
                              <center>Kelas
                          </th>
                          <th>
                              <center>Pilihan
                          </th>
                      </tr>
                  </thead>
                  <?php
                  include '../koneksi.php';
                  $no = 1;
                  $data = mysqli_query($koneksi, "SELECT * from tb_siswa, tb_kelas where tb_siswa.id_kelas=tb_kelas.id_kelas");
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
                              <center><?php echo $d['nama_kelas']; ?>
                          </td>
                          <td><center>
                              <!-- <a type="button" class="btn-primary btn-xs" href="#">Kecil</a> -->
                              <a href="siswa_hapus.php?id_siswa=<?php echo $d['id_siswa']; ?>" onclick="return confirm('Anda yakin Hapus data kelas <?php echo $d['nama_siswa']; ?> ?')">
                                <span class="label label-danger">Hapus</span>
                              </a>
                              <a href="siswa_edit.php?id_siswa=<?php echo $d['id_siswa'] ?>">
                                <span class="label label-primary">Edit</span>
                              </a>
                              <a href="siswa_detail.php?id_siswa=<?php echo $d['id_siswa'] ?>">
                                <span class="label label-success">Detail</span>
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

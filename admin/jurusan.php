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
                <h2 style="margin-top: 30px">Daftar Jurusan</h2>
              </center>

              <?php include('../alert.php') ?>

								<a style=" margin-bottom: 20px" type="button" class="btn btn-success btn-xs" href="jurusan_tambah.php">Tambah Jurusan</a>

                <table class="table table-bordered table-hover" id="example">
                    <thead>
                        <tr>
                            <th>
                                <center>No
                            </th>
                            <th>
                                <center>Nama Jurusan
                            </th>
                        </tr>
                    </thead>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * from tb_jurusan ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td>
                                <center><?php echo $no++ ?>
                            </td>
                            <td>
                                <?= $d['nama_jurusan']; ?>
                            </td>

                            <td><center>
                              <a href="jurusan_hapus.php?id_jurusan=<?php echo $d['id_jurusan']; ?>"
                                onclick="return confirm('Anda yakin Hapus data jurusan <?= $d['tingkat']." ".$d['jurusan']." ".$d['kode_jurusan']; ?> ?')">
                                <span class="label label-danger">Hapus</span>
                              </a>
                              <a href="jurusan_edit.php?id_jurusan=<?php echo $d['id_jurusan'] ?>">
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

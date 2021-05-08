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
                <h2 style="margin-top: 20px">Daftar Kelas</h2>
              </center>

              <?php include('../alert.php') ?>

								<a style=" margin-bottom: 20px" type="button" class="btn btn-success btn-xs" href="kelas_tambah.php">Tambah Kelas</a>

                <table class="table table-bordered table-hover" id="example">
                    <thead>
                        <tr>
                            <th>
                                <center>No
                            </th>
                            <th>
                                <center>Nama Kelas
                            </th>
                            <th>
                                <center>Tingkat
                            </th>
                            <th>
                                <center>Pilihan
                            </th>
                        </tr>
                    </thead>
                    <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * from tb_kelas ");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td>
                                <center><?php echo $no++ ?>
                            </td>
                            <td>
                                <center><?= $d['tingkat']." ".$d['jurusan']." ".$d['kode_kelas']; ?>
                            </td>
                            <td>
                                <center><?php echo $d['tingkat']; ?>
                            </td>
                            <td><center>
                              <a href="kelas_hapus.php?id_kelas=<?php echo $d['id_kelas']; ?>"
                                onclick="return confirm('Anda yakin Hapus data kelas <?= $d['tingkat']." ".$d['jurusan']." ".$d['kode_kelas']; ?> ?')">
                                <span class="label label-danger">Hapus</span>
                              </a>
                              <a href="kelas_edit.php?id_kelas=<?php echo $d['id_kelas'] ?>">
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

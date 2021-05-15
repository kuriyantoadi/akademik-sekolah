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
                <h2 style="margin-top: 30px">Data Industri</h2>
              </center>

                  <?php
                  include '../koneksi.php';
									include "../alert.php";
                  $id_industri = $_GET['id_industri'];
                  $data = mysqli_query($koneksi, "SELECT * from tb_industri where id_industri='$id_industri' ");
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                  <table class="table table-bordered">
                      <tr>
                        <td>
                          Nama Industri
                        </td>
                        <td>
                          <?= $d['nama_industri'] ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Jenis Industri
                        </td>
                        <td>
                          <?= $d['jenis_industri'] ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Link Industri
                        </td>
                        <td>
                          <?= $d['link_industri'] ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Kuota Prakerin
                        </td>
                        <td>
                          <?= $d['kuota'] ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Tanggal Mulai Prakerin
                        </td>
                        <td>
                          <?= $d['tgl_mulai'] ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Tanggal Selesai Prakerin
                        </td>
                        <td>
                          <?= $d['tgl_mulai'] ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Status
                        </td>
                        <td>
                          <?= $d['status'] ?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Pilih Status
                        </td>
                        <td>
                          <a type="button" class="btn btn-xs btn-danger" href="industri_tutup.php?id_industri=<?= $d['id_industri'] ?>">Tutup Pengajuan</a>
                          <a type="button" class="btn btn-xs btn-success" href="industri_buka.php?id_industri=<?= $d['id_industri'] ?>">Buka Pengajuan</a>
                        </td>
                      </tr>
                  </table>

                <?php } ?>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php include('footer.php') ?>

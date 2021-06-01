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
                  $id_jadwal_pkl = $_GET['id_jadwal_pkl'];
                  $data = mysqli_query($koneksi, "SELECT * from tb_industri,tb_jadwal_pkl where tb_industri.id_industri=tb_jadwal_pkl.id_industri and id_jadwal_pkl='$id_jadwal_pkl' ");
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
                        <td colspan="2"><center>
                          <a href="pengajuan_form.php?id_jadwal_pkl=<?= $d['id_jadwal_pkl'] ?>" type="button" class="btn btn-success btn-xs">
                            Ajukan Prakerin Disini
                          </a>
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

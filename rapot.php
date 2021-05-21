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
                <h2 style="margin-top: 30px">Rapot Siswa</h2>
              </center>

                  <?php
                  include 'koneksi.php';
									include "alert.php";
                  $nisn_siswa = $_GET['nisn_siswa'];
                  $data = mysqli_query($koneksi, "SELECT * from tb_siswa, tb_kelas where tb_siswa.id_kelas=tb_kelas.id_kelas and tb_siswa.nisn_siswa='$nisn_siswa' ");
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
									<form class="" action="rapot_up.php" method="post" enctype="multipart/form-data">

                  <table class="table table-bordered">
                      <tr>
                        <td>
                          NIS Siswa
                        </td>
                        <td>
													<input type="hidden" name="id_siswa" value="<?= $d['id_siswa'] ?>">
													<input type="hidden" name="nisn_siswa" value="<?= $d['nisn_siswa'] ?>">
                          <?= $d['nis_siswa'] ?>
                        </td>
                      </tr>
                      <tr>
                        <td>NISN Siswa</td>
                        <td><?= $d['nisn_siswa'] ?></td>
                      </tr>
                      <tr>
                        <td>Nama Siswa</td>
                        <td><?= $d['nama_siswa'] ?></td>
                      </tr>
                      <tr>
                        <td>Kelas</td>
                        <td><?= $d['tingkat']." ".$d['jurusan']." ".$d['kode_kelas'] ?></td>
                      </tr>
                      <tr>
                        <td>Rapot Semester 1</td>
                        <td>
                          <?php
	                          $rapot1 = $d['rapot_sms1'];
														if (empty($rapot1)) {
															?>
															rapot Tidak Tersedia
															<input type="file" name="rapot_sms1" accept="application/pdf" class="form-control-file" >
														<?php  }else { ?>
															Rapot Tersedia
															<br>
															<a class="btn btn-success btn-sm" href="assets/rapot_sms1/<?= $rapot1 ?>">Download </a>
															<?php
														}
													?>
                        </td>
                      </tr>
                      <tr>
                        <td>Rapot Semester 2</td>
												<td>
													<?php
														$rapot2 = $d['rapot_sms2'];
														if (empty($rapot2)) {
															?>
															rapot Tidak Tersedia
															<input type="file" name="rapot_sms2" accept="application/pdf" class="form-control-file" >
														<?php  }else { ?>
															Rapot Tersedia
															<br>
															<a class="btn btn-success btn-sm" href="assets/rapot_sms2/<?= $rapot2 ?>">Download </a>
														<?php
														}
														?>
												</td>
                      </tr>
                      <tr>
                        <td>Rapot Semester 3</td>
												<td>
													<?php
														$rapot3 = $d['rapot_sms3'];
														if (empty($rapot3)) {
															?>
															rapot Tidak Tersedia
															<input type="file" name="rapot_sms3" accept="application/pdf" class="form-control-file" >
														<?php  }else { ?>
															Rapot Tersedia
															<br>
															<a class="btn btn-success btn-sm" href="assets/rapot_sms3/<?= $rapot3 ?>">Download </a>
															<?php
														}
														?>
												</td>
											</tr>
                      <tr>
                        <td>Rapot Semester 4</td>
												<td>
													<?php
														$rapot4 = $d['rapot_sms4'];
														if (empty($rapot4)) {
															?>
															rapot Tidak Tersedia
															<input type="file" name="rapot_sms4" accept="application/pdf" class="form-control-file" >
														<?php  }else { ?>
															Rapot Tersedia
															<br>
															<a class="btn btn-success btn-sm" href="assets/rapot_sms4/<?= $rapot4 ?>">Download </a>
															<?php
														}
														?>
												</td>
                      </tr>
                      <tr>
                        <td>Rapot Semester 5</td>
												<td>
													<?php
														$rapot5 = $d['rapot_sms5'];
														if (empty($rapot5)) {
															?>
															rapot Tidak Tersedia
															<input type="file" name="rapot_sms5" accept="application/pdf" class="form-control-file" >
														<?php  }else { ?>
															Rapot Tersedia
															<br>
															<a class="btn btn-success btn-sm" href="assets/rapot_sms5/<?= $rapot5 ?>">Download </a>
																<?php
														}
														?>
												</td>
                      </tr>
                      <tr>
                        <td>Rapot Semester 6</td>
												<td>
													<?php
														$rapot6 = $d['rapot_sms6'];
														if (empty($rapot6)) {
															?>
															rapot Tidak Tersedia
															<input type="file" name="rapot_sms6" accept="application/pdf" class="form-control-file" >
														<?php  }else { ?>
															Rapot Tersedia
															<br>
															<a class="btn btn-success btn-sm" href="assets/rapot_sms6/<?= $rapot6 ?>">Download </a>
														<?php
														}
														?>
												</td>
											</tr>

                  </table>
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

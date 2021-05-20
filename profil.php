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
                <h2 style="margin-top: 30px; margin-bottom: 30px">Profil Siswa</h2>
              </center>

                  <?php
                  include 'koneksi.php';
									include "alert.php";
                  // $nisn_siswa = $_GET['nisn_siswa'];
                  $data = mysqli_query($koneksi, "SELECT * from tb_siswa, tb_kelas where tb_siswa.id_kelas=tb_kelas.id_kelas and tb_siswa.nisn_siswa='$nisn_siswa' ");
                  while ($d = mysqli_fetch_array($data)) {
                  ?>
                  <table class="table">
                      <tr>
                        <td>
                          NIS Siswa
                        </td>
                        <td>
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
                        <td>Jenis Kelamin</td>
                        <td><?= $d['jk'] ?></td>
                      </tr>
                      <tr>
                        <td>Tempat Lahir</td>
                        <td><?= $d['tempat_lahir'] ?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Lahir</td>
                        <td><?= $d['tgl_lahir'] ?></td>
                      </tr>
                      <tr>
                        <td>Agama</td>
                        <td><?= $d['agama'] ?></td>
                      </tr>
                      <tr>
                        <td>Anak ke</td>
                        <td><?= $d['anak_ke'] ?></td>
                      </tr>
                      <tr>
                        <td>Status Dalam Keluarga</td>
                        <td><?= $d['status_dlm_keluarga'] ?></td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td><?= $d['alamat'] ?></td>
                      </tr>
                      <tr>
                        <td>No Handphone</td>
                        <td><?= $d['no_hp'] ?></td>
                      </tr>
                      <tr>
                        <td>Tanggal Diterima</td>
                        <td><?= $d['tgl_diterima'] ?></td>
                      </tr>
                      <tr>
                        <td>Diterima dikelas</td>
                        <td><?= $d['diterima_kelas'] ?></td>
                      </tr>
                      <tr>
                        <td>Semester Diterima</td>
                        <td><?= $d['sms_diterima'] ?></td>
                      </tr>
                      <tr>
                        <td>Asal Sekolah SMP/MTS/Sederajat</td>
                        <td><?= $d['asal_sklh'] ?></td>
                      </tr>
                      <tr>
                        <td>Alamat Asal Sekolah</td>
                        <td><?= $d['almt_asal_sklh'] ?></td>
                      </tr>
                      <tr>
                        <td>No Ijazah</td>
                        <td><?= $d['no_ijzh_smp'] ?></td>
                      </tr>
                      <tr>
                        <td>Tahun Ijazah</td>
                        <td><?= $d['thn_ijzh_smp'] ?></td>
                      </tr>
                      <tr>
                        <td>No SKHUN</td>
                        <td><?= $d['no_skhun_smp'] ?></td>
                      </tr>
                      <tr>
                        <td>Tahun SKHUN</td>
                        <td><?= $d['thn_skhun_smp'] ?></td>
                      </tr>
                      <tr>
                        <td>Nama Ayah</td>
                        <td><?= $d['nama_ayah'] ?></td>
                      </tr>
                      <tr>
                        <td>Nama Ibu</td>
                        <td><?= $d['nama_ibu'] ?></td>
                      </tr>
                      <tr>
                        <td>Alamat Orang Tua</td>
                        <td><?= $d['alamat_orgtua'] ?></td>
                      </tr>
                      <tr>
                        <td>No Handphone Orang Tua</td>
                        <td><?= $d['no_hp_orgtua'] ?></td>
                      </tr>
                      <tr>
                        <td>Pekerjaan Ayah</td>
                        <td><?= $d['pekerjaan_ayah'] ?></td>
                      </tr>
                      <tr>
                        <td>Pekerjaan Ibu</td>
                        <td><?= $d['pekerjaan_ibu'] ?></td>
                      </tr>
                      <tr>
                        <td>Nama Wali</td>
                        <td><?= $d['nama_wali'] ?></td>
                      </tr>
                      <tr>
                        <td>Alamat Wali</td>
                        <td><?= $d['alamat_wali'] ?></td>
                      </tr>
                      <tr>
                        <td>No Handphone Wali</td>
                        <td><?= $d['no_hp_wali'] ?></td>
                      </tr>
                      <tr>
                        <td>Pekerjaan Wali</td>
                        <td><?= $d['pekerjaan_wali'] ?></td>
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

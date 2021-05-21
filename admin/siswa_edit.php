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
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title"><center>Edit Siswa</h3>
              </div>

              <?php
              include '../koneksi.php';
							$id_siswa=$_GET['id_siswa'];
              $data = mysqli_query($koneksi, "SELECT * from tb_siswa, tb_kelas where tb_siswa.id_kelas=tb_kelas.id_kelas and tb_siswa.id_siswa='$id_siswa' ");
              while ($d = mysqli_fetch_array($data)) {
              ?>

              <form class="" action="siswa_edit_up.php" method="post">

              <div class="panel-body">
                <p>NIS Siswa</p>
									<input type="hidden" name="id_siswa" class="form-control" value="<?= $d['id_siswa'] ?>" required>
                  <input type="text" name="nis_siswa" class="form-control" value="<?= $d['nis_siswa'] ?>" required>
                <br>
                <p>NISN Siswa</p>
                  <input type="text" name="nisn_siswa" class="form-control" value="<?= $d['nisn_siswa'] ?>" required>
                <br>
                <p>Nama Siswa</p>
                  <input type="text" name="nama_siswa" class="form-control" value="<?= $d['nama_siswa'] ?>" required>
                <br>
                <p>Kelas</p>
                  <!-- <input type="text" name="id_kelas" class="form-control" required> -->
									<select class="form-control" name="id_kelas" required>
										<option value="<?= $d['id_kelas'] ?>">Pilihan Awal (<?= $d['tingkat']." ".$d['jurusan']." ".$d['kode_kelas'] ?>)</option>
										<?php select_kelas(); ?>
									</select>
							  <br>
                <p>Jenis Kelamin</p>
                <select class="form-control" name="jk" required>
                  <option value="<?= $d['jk'] ?>">Pilihan Awal (<?= $d['jk'] ?>)</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
                <br>
                <p>Tempat Lahir</p>
                  <input type="text" name="tempat_lahir" value="<?= $d['tempat_lahir'] ?>" class="form-control" required>
                <br>
                <p>Tanggal Lahir</p>
									<input type="text" name="tgl_lahir" class="form-control datepicker" placeholder="Tanggal Lahir" value="<?= $d['tgl_lahir'] ?>" required />
                <br>
                <p>Agama</p>
                  <select class="form-control" name="agama" required>
                    <option value="<?= $d['agama'] ?>">Pilihan Awal (<?= $d['agama'] ?>)</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="budha">Budha</option>
                  </select>
                <br>
                <p>Anak Ke</p>
                  <input type="number" name="anak_ke" class="form-control" value="<?= $d['anak_ke'] ?>" required>
                <br>
                <p>Status Dalam Keluarga</p>
                  <input type="text" name="status_dlm_keluarga" class="form-control" value="<?= $d['status_dlm_keluarga'] ?>" required>
                <br>
                <p>Alamat</p>
                  <input type="text" name="alamat" class="form-control" value="<?= $d['alamat'] ?>" required>
                <br>
                <p>No Handphone</p>
                  <input type="number" name="no_hp" class="form-control" value="<?= $d['no_hp'] ?>" required>
                <br>
                <p>Tanggal Diterima</p>
                  <input type="text" name="tgl_diterima" class="form-control datepicker" value="<?= $d['tgl_diterima'] ?>" required>
                <br>
                <p>Diterima dikelas</p>
                  <input type="text" name="diterima_kelas" class="form-control" value="<?= $d['diterima_kelas'] ?>" required>
                <br>
                <p>Diterima disemester</p>
                  <input type="text" name="sms_diterima" class="form-control" value="<?= $d['sms_diterima'] ?>" required>
                <br>
                <p>Asal Sekolah SMP/MTS/Sederajat</p>
                  <input type="text" name="asal_sklh" class="form-control" value="<?= $d['asal_sklh']  ?>" required>
                <br>
                <p>Alamat Sekolah</p>
                  <input type="text" name="almt_asal_sklh" class="form-control" value="<?= $d['almt_asal_sklh'] ?>" required>
                <br>
                <p>No Ijazah</p>
                  <input type="text" name="no_ijzh_smp" class="form-control" value="<?= $d['no_ijzh_smp'] ?>" required>
                <br>
                <p>Tahun Ijazah</p>
                  <input type="text" name="thn_ijzh_smp" class="form-control" value="<?= $d['thn_ijzh_smp'] ?>" required>
                <br>
                <p>No SKHUN</p>
                  <input type="text" name="no_skhun_smp" class="form-control" value="<?= $d['no_skhun_smp'] ?>" required>
                <br>
                <p>Tahun SKHUN</p>
                  <input type="text" name="thn_skhun_smp" class="form-control" value="<?= $d['thn_skhun_smp'] ?>" required>
                <br>
                <p>Nama Ayah</p>
                  <input type="text" name="nama_ayah" class="form-control" value="<?= $d['nama_ayah'] ?>" required>
                <br>
                <p>Nama Ibu</p>
                  <input type="text" name="nama_ibu" class="form-control" value="<?= $d['nama_ibu'] ?>" required>
                <br>
                <p>Alamat Orang Tua</p>
                  <input type="text" name="alamat_orgtua" class="form-control"  value="<?= $d['alamat_orgtua'] ?>" required>
                <br>
                <p>No Handphone Orang Tua</p>
                  <input type="text" name="no_hp_orgtua" class="form-control" value="<?= $d['no_hp_orgtua'] ?>" required>
                <br>
                <p>Pekerjaan Ayah</p>
                  <input type="text" name="pekerjaan_ayah" class="form-control" value="<?= $d['pekerjaan_ayah'] ?>" required>
                <br>
                <p>Pekerjaan Ibu</p>
                  <input type="text" name="pekerjaan_ibu" class="form-control" value="<?= $d['pekerjaan_ibu'] ?>" required>
                <br>
                <p>Nama Wali</p>
                  <input type="text" name="nama_wali" class="form-control" value="<?= $d['nama_wali'] ?>" required>
                <br>
                <p>Alamat Wali</p>
                  <input type="text" name="alamat_wali" class="form-control" value="<?= $d['alamat_wali'] ?>" required>
                <br>
                <p>No Handphone Wali</p>
                  <input type="text" name="no_hp_wali" class="form-control" value="<?= $d['no_hp_wali'] ?>" required>
                <br>
                <p>Pekerjaan Wali</p>
                  <input type="text" name="pekerjaan_wali" class="form-control" value="<?= $d['pekerjaan_wali'] ?>" required>
                <br>
                <center><input type="submit" class="btn btn-primary btn-xs" name="" value="submit">
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

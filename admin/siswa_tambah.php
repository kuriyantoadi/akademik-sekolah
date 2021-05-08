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
                <h3 class="panel-title"><center>Tambah Siswa Baru</h3>
              </div>

              <form class="" action="siswa_tambah_up.php" method="post">

              <div class="panel-body">
                <p>NIS Siswa</p>
                  <input type="text" name="nis_siswa" class="form-control" required>
                <br>
                <p>NISN Siswa</p>
                  <input type="text" name="nisn_siswa" class="form-control" required>
                <br>
                <p>Nama Siswa</p>
                  <input type="text" name="nama_siswa" class="form-control" required>
                <br>
                <p>Kelas</p>
                  <!-- <input type="text" name="id_kelas" class="form-control" required> -->
									<select class="form-control" name="id_kelas" required>
										<option value="">Pilih</option>
										<?php select_kelas(); ?>
									</select>
							  <br>
                <p>Jenis Kelamin</p>
                <?php jk() ?>

                <br>
                <p>Tempat Lahir</p>
                  <input type="text" name="tempat_lahir" class="form-control" required>
                <br>
                <p>Tanggal Lahir</p>
                  <input type="text" name="tgl_lahir" class="form-control datepicker" required>
                <br>
                <p>Agama</p>
                  <?php s_agama() ?>
                <br>
                <p>Anak Ke</p>
                  <input type="number" name="anak_ke" class="form-control" required>
                <br>
                <p>Status Dalam Keluarga</p>
                  <input type="text" name="status_dlm_keluarga" class="form-control" required>
                <br>
                <p>Alamat</p>
                  <input type="text" name="alamat" class="form-control" required>
                <br>
                <p>No Handphone</p>
                  <input type="number" name="no_hp" class="form-control" required>
                <br>
                <p>Tanggal Diterima</p>
                  <input type="text" name="tgl_diterima" class="form-control datepicker" required>
                <br>
                <p>Diterima dikelas</p>
                  <input type="text" name="diterima_kelas" class="form-control" required>
                <br>
                <p>Diterima disemester</p>
                  <input type="text" name="sms_diterima" class="form-control" required>
                <br>
                <p>Asal Sekolah SMP/MTS/Sederajat</p>
                  <input type="text" name="asal_sekolah" class="form-control" required>
                <br>
                <p>Alamat Sekolah</p>
                  <input type="text" name="almt_asal_sklh" class="form-control" required>
                <br>
                <p>No Ijazah</p>
                  <input type="text" name="no_ijzh_smp" class="form-control" required>
                <br>
                <p>Tahun Ijazah</p>
                  <input type="text" name="thn_ijzh_smp" class="form-control" required>
                <br>
                <p>No SKHUN</p>
                  <input type="text" name="no_skhun_smp" class="form-control" required>
                <br>
                <p>Tahun SKHUN</p>
                  <input type="text" name="thn_skhun_smp" class="form-control" required>
                <br>
                <p>Nama Ayah</p>
                  <input type="text" name="nama_ayah" class="form-control" required>
                <br>
                <p>Nama Ibu</p>
                  <input type="text" name="nama_ibu" class="form-control" required>
                <br>
                <p>Alamat Orang Tua</p>
                  <input type="text" name="alamat_orgtua" class="form-control" required>
                <br>
                <p>No Handphone Orang Tua</p>
                  <input type="text" name="no_hp_orgtua" class="form-control" required>
                <br>
                <p>Pekerjaan Ayah</p>
                  <input type="text" name="pekerjaan_ayah" class="form-control" required>
                <br>
                <p>Pekerjaan Ibu</p>
                  <input type="text" name="pekerjaan_ibu" class="form-control" required>
                <br>
                <p>Nama Wali</p>
                  <input type="text" name="nama_wali" class="form-control" required>
                <br>
                <p>Alamat Wali</p>
                  <input type="text" name="alamat_wali" class="form-control" required>
                <br>
                <p>No Handphone Wali</p>
                  <input type="text" name="no_hp_wali" class="form-control" required>
                <br>
                <p>Pekerjaan Wali</p>
                  <input type="text" name="pekerjaan_wali" class="form-control" required>
                <br>
                <center><input type="submit" class="btn btn-primary btn-xs" name="" value="submit">
              </form>

            </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
<?php include('footer.php') ?>

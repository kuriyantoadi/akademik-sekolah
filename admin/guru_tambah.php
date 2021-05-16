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
                <h3 class="panel-title"><center>Tambah Guru Baru</h3>
              </div>

              <form class="" action="guru_tambah_up.php" method="post">

              <div class="panel-body">
                <p>Tanggal Perubahan</p>
                  <input type="text" name="tgl_perubahan" class="form-control datepicker" required>
                <br>
                <p>Sinkronisasi Terakhir</p>
                  <input type="text" name="sinkron_terakhir" class="form-control" required>
                <br>
                <p>Nomor Surat Tugas</p>
                  <input type="text" name="no_surat_tugas" class="form-control" required>
                <br>
                <p>Tanggal Surat Tugas</p>
                  <input type="text" name="tgl_surat_tugas" class="form-control datepicker" required>
                <br>
                <p>Tahun Ajaran</p>
                  <input type="text" name="thn_ajaran" class="form-control" required>
                <br>
                <p>Sekolah Induk</p>
                  <input type="text" name="sklh_induk" class="form-control" required>
                <br>
                <p>Nama Guru</p>
                  <input type="text" name="nama_guru" class="form-control" required>
                <br>
                <p>NIK Guru</p>
                  <input type="text" name="nik_guru" class="form-control" required>
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
                <p>Nama Ibu Kandung</p>
                  <input type="text" name="nama_ibu_kandung" class="form-control" required>
                <br>
                <p>Alamat</p>
                  <input type="text" name="alamat" class="form-control" required>
                <br>
                <p>Agama</p>
                  <?php s_agama() ?>
                <br>
                <p>Status Pekawinan</p>
                  <input type="text" name="status_perkawinan" class="form-control" required>
                <br>
                <p>Nama Suami/Istri</p>
                  <input type="text" name="nama_pasangan" class="form-control" required>
                <br>
								<p>Pekerjaan Suami/Istri</p>
                  <input type="text" name="pekerjaan_pasangan" class="form-control" required>
                <br>
                <p>Nomor NPWP</p>
                  <input type="text" name="npwp" class="form-control" required>
                <br>
                <p>Nama Wajib Pajak</p>
                  <input type="text" name="nama_wajib_pajak" class="form-control" required>
                <br>
                <p>Jenis GTK</p>
                  <input type="text" name="jenis_gtk" class="form-control" required>
                <br>
                <p>NUPTK</p>
                  <input type="text" name="nuptk" class="form-control" required>
                <br>
                <p>Status Pegawai</p>
                  <input type="text" name="status_peg" class="form-control" required>
                <br>
                <p>NIP</p>
                  <input type="text" name="nip" class="form-control" required>
                <br>
                <p>SK CPNS</p>
                  <input type="text" name="sk_cpns" class="form-control" required>
                <br>
                <p>tmt CPNS</p>
                  <input type="text" name="tmt_cpns" class="form-control" required>
                <br>
                <p>tmt SK Pengangkatan</p>
                  <input type="text" name="tmt_sk_pengangkatan" class="form-control" required>
                <br>
                <p>Sumber Gaji</p>
                  <input type="text" name="sumber_gaji" class="form-control" required>
                <br>
                <p>Pangkat Golongan</p>
                  <input type="text" name="pangkat_gol" class="form-control" required>
                <br>
                <p>tmt Pangkat Golongan</p>
                  <input type="text" name="tmt_pangkat_gol" class="form-control" required>
                <br>
                <p>Masa Kerja</p>
                  <input type="text" name="masa_kerja" class="form-control" required>
                <br>
                <p>SK Pengkatan</p>
                  <input type="text" name="sk_pengangkatan" class="form-control" required>
                <br>
                <p>tmt Pengangkatan</p>
                  <input type="text" name="tmt_pengkatan" class="form-control" required>
                <br>
                <p>Lembaga Pengangkatan</p>
                  <input type="text" name="lembaga_pengakatan" class="form-control" required>
                <br>
                <p>Kartu Pegawai</p>
                  <input type="text" name="kartu_pegawai" class="form-control" required>
                <br>
                <p>Kartu Pegawai Pasangan (Suami/Istri)</p>
                  <input type="text" name="kartu_pasangan" class="form-control" required>
                <br>
                <p>Kompetensi</p>
                  <input type="text" name="kompetensi" class="form-control" required>
                <br>
                <p>Pendidikan Terakhir</p>
                  <input type="text" name="pendidikan_terakhir" class="form-control" required>
                <br>
                <p>Status Kuliah</p>
                  <input type="text" name="status_kuliah" class="form-control" required>
                <br>
                <p>Email</p>
                  <input type="text" name="email" class="form-control" required>
                <br>
                <p>Tahun Pensiun</p>
                  <input type="text" name="tahun_pensiun" class="form-control" required>
                <br>
                <p>Tugas Tambahan</p>
                  <input type="text" name="tugas_tambahan" class="form-control" required>
                <br>
                <p>tmt Tugas Tambahan</p>
                  <input type="text" name="tmt_tugas_tambahan" class="form-control" required>
                <br>
                <p>Jumlah Jam Tugas Tambahan</p>
                  <input type="text" name="jml_jam_tugas_tambahan" class="form-control" required>
                <br>
                <p>Jumlah Jam Mengajar</p>
                  <input type="text" name="jml_jam_mengajar" class="form-control" required>
                <br>
                <p>Jumlah Mengajar Tugas Tambahan</p>
                  <input type="text" name="jml_mengajar_tugas_tmbh" class="form-control" required>
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

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
                <h3 class="panel-title"><center>Edit Guru</h3>
              </div>

              <?php
              include '../koneksi.php';
              $id_guru = $_GET['id_guru'];
              $data = mysqli_query($koneksi, "SELECT * from tb_guru where id_guru='$id_guru'");
              while ($d = mysqli_fetch_array($data)) {
              ?>

              <form class="" action="guru_edit_up.php" method="post">

              <div class="panel-body">
                 <!-- ganti sesuaikan dengan yg ada di tambah guru -->
                <p>Tanggal Perubahan</p>
                  <!-- tinggal ganti isi name dan value nya seperti yg ada di tb_guru -->
									<input type="hidden" name="id_guru" class="form-control" value="<?= $d['id_guru'] ?>" required>
                  <input type="text" name="tgl_perubahan" class="form-control" value="<?= $d['tgl_perubahan'] ?>" required>
                <br>
                <p>Sinkronisasi Terakhir</p>
                  <input type="text" name="sinkron_terakhir" class="form-control" value="<?= $d['sinkron_terakhir'] ?>" required>
                <br>
                <p>Nomor Surat Tugas</p>
                  <input type="text" name="no_surat_tugas" class="form-control" value="<?= $d['no_surat_tugas'] ?>" required>
                <br>
                <p>Tanggal Surat Tugas</p>
                  <input type="text" name="tgl_surat_tugas" class="form-control datepicker" value="<?= $d['tgl_surat_tugas'] ?>" required>
                <br>
                <p>Tahun Ajaran</p>
                  <input type="text" name="thn_ajaran" class="form-control" value="<?= $d['thn_ajaran'] ?>" required>
                <br>
                <p>Sekolah Induk</p>
                  <input type="text" name="sklh_induk" class="form-control" value="<?= $d['sklh_induk'] ?>" required>
                <br>
                <p>Nama Guru</p>
                  <input type="text" name="nama_guru" class="form-control" value="<?= $d['nama_guru'] ?>" required>
                <br>
                <p>NIK Guru</p>
                  <input type="text" name="nik_guru" class="form-control" value="<?= $d['nik_guru'] ?>" required>
                <br>
                <p>Jenis Kelamin</p>
									<select class="form-control" name="jk" required>
								  	<option value="<?= $d['jk'] ?>">Pilihan Awal (<?= $d['jk'] ?>)</option>
										<?php edit_jk() ?>
									</select>
								<br>
                <p>Tempat Lahir</p>
                  <input type="text" name="tempat_lahir" class="form-control" value="<?= $d['tempat_lahir'] ?>" required>
                <br>
                <p>Tanggal Lahir</p>
                  <input type="text" name="tgl_lahir" class="form-control datepicker" value="<?= $d['tgl_lahir'] ?>" required>
                <br>
                <p>Nama Ibu Kandung</p>
                  <input type="text" name="nama_ibu_kandung" class="form-control" value="<?= $d['nama_ibu_kandung'] ?>" required>
                <br>
                <p>Alamat</p>
                  <input type="text" name="alamat" class="form-control" value="<?= $d['alamat'] ?>" required>
                <br>
                <p>Agama</p>
								<select class="form-control" name="agama" required>
									<option value="<?= $d['agama'] ?>">Pilihan Awal (<?= $d['agama'] ?>)</option>
									<?php edit_agama() ?>
								</select>

                <br>
                <p>Status Pekawinan</p>
                  <input type="text" name="status_perkawinan" class="form-control" value="<?= $d['status_perkawinan'] ?>" required>
                <br>
                <p>Nama Suami/Istri</p>
                  <input type="text" name="nama_pasangan" class="form-control" value="<?= $d['nama_pasangan'] ?>" required>
                <br>
								<p>Pekerjaan Pasangan</p>
                  <input type="text" name="pekerjaan_pasangan" class="form-control" value="<?= $d['pekerjaan_pasangan'] ?>" required>
                <br>
                <p>Nomor NPWP</p>
                  <input type="text" name="npwp" class="form-control" value="<?= $d['npwp'] ?>" required>
                <br>
                <p>Nama Wajib Pajak</p>
                  <input type="text" name="nama_wajib_pajak" class="form-control" value="<?= $d['nama_wajib_pajak'] ?>" required>
                <br>
                <p>Jenis GTK</p>
                  <input type="text" name="jenis_gtk" class="form-control" value="<?= $d['jenis_gtk'] ?>" required>
                <br>
                <p>NUPTK</p>
                  <input type="text" name="nuptk" class="form-control" value="<?= $d['nuptk'] ?>" required>
                <br>
                <p>Status Pegawai</p>
                  <input type="text" name="status_peg" class="form-control" value="<?= $d['status_peg'] ?>" required>
                <br>
                <p>NIP</p>
                  <input type="text" name="nip" class="form-control" value="<?= $d['nip'] ?>" required>
                <br>
                <p>SK CPNS</p>
                  <input type="text" name="sk_cpns" class="form-control" value="<?= $d['sk_cpns'] ?>" required>
                <br>
                <p>tmt CPNS</p>
                  <input type="text" name="tmt_cpns" class="form-control" value="<?= $d['tmt_cpns'] ?>" required>
                <br>
                <p>tmt Pengangkatan</p>
                  <input type="text" name="tmt_sk_pengangkatan" class="form-control" value="<?= $d['tmt_sk_pengangkatan'] ?>" required>
                <br>
                <p>Sumber Gaji</p>
                  <input type="text" name="sumber_gaji" class="form-control" value="<?= $d['sumber_gaji'] ?>" required>
                <br>
                <p>Pangkat Golongan</p>
                  <input type="text" name="pangkat_gol" class="form-control" value="<?= $d['pangkat_gol'] ?>" required>
                <br>
                <p>tmt Pangkat Golongan</p>
                  <input type="text" name="tmt_pangkat_gol" class="form-control" value="<?= $d['tmt_pangkat_gol'] ?>" required>
                <br>
                <p>Masa Kerja</p>
                  <input type="text" name="masa_kerja" class="form-control" value="<?= $d['masa_kerja'] ?>" required>
                <br>
                <p>SK Pengkatan</p>
                  <input type="text" name="sk_pengangkatan" class="form-control" value="<?= $d['sk_pengangkatan'] ?>" required>
                <br>
                <p>tmt Pengangkatan</p>
                  <input type="text" name="tmt_pengangkatan" class="form-control" value="<?= $d['tmt_pengangkatan'] ?>" required>
                <br>
                <p>Lembaga Pengangkatan</p>
                  <input type="text" name="lembaga_pengangkatan" class="form-control" value="<?= $d['lembaga_pengangkatan'] ?>" required>
                <br>
                <p>Kartu Pegawai</p>
                  <input type="text" name="kartu_pegawai" class="form-control" value="<?= $d['kartu_pegawai'] ?>" required>
                <br>
                <p>Kartu Pegawai Pasangan (Suami/Istri)</p>
                  <input type="text" name="kartu_pasangan" class="form-control" value="<?= $d['kartu_pasangan'] ?>" required>
                <br>
                <p>Kompetensi</p>
                  <input type="text" name="kompetensi" class="form-control" value="<?= $d['kompetensi'] ?>" required>
                <br>
                <p>Pendidikan Terakhir</p>
                  <input type="text" name="pendidikan_terakhir" class="form-control" value="<?= $d['pendidikan_terakhir'] ?>" required>
                <br>
                <p>Status Kuliah</p>
                  <input type="text" name="status_kuliah" class="form-control" value="<?= $d['status_kuliah'] ?>" required>
                <br>
                <p>Email</p>
                  <input type="text" name="email" class="form-control" value="<?= $d['email'] ?>" required>
                <br>
                <p>Tahun Pensiun</p>
                  <input type="text" name="tahun_pensiun" class="form-control" value="<?= $d['tahun_pensiun'] ?>" required>
                <br>
                <p>Tugas Tambahan</p>
                  <input type="text" name="tugas_tambahan" class="form-control" value="<?= $d['tugas_tambahan'] ?>" required>
                <br>
                <p>tmt Tugas Tambahan</p>
                  <input type="text" name="tmt_tugas_tambahan" class="form-control" value="<?= $d['tmt_tugas_tambahan'] ?>" required>
                <br>
                <p>Jumlah Jam Tugas Tambahan</p>
                  <input type="text" name="jml_jam_tugas_tambahan" class="form-control" value="<?= $d['jml_jam_tugas_tambahan'] ?>" required>
                <br>
                <p>Jumlah Jam Mengajar</p>
                  <input type="text" name="jml_jam_mengajar" class="form-control" value="<?= $d['jml_jam_mengajar'] ?>" required>
                <br>
                <p>Jumlah Mengajar Tugas Tambahan</p>
                  <input type="text" name="jml_mengajar_tugas_tmbh" class="form-control" value="<?= $d['jml_mengajar_tugas_tmbh'] ?>" required>
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

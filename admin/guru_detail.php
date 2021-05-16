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
                <h3 class="panel-title"><center>Guru Detail</h3>
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
                  <input type="text" name="tgl_perubahan" class="form-control" value="<?= $d['tgl_perubahan'] ?>" readonly>
                <br>
                <p>Sinkronisasi Terakhir</p>
                  <input type="text" name="sinkron_terakhir" class="form-control" value="<?= $d['sinkron_terakhir'] ?>" readonly>
                <br>
                <p>Nomor Surat Tugas</p>
                  <input type="text" name="no_surat_tugas" class="form-control" value="<?= $d['no_surat_tugas'] ?>" readonly>
                <br>
                <p>Tanggal Surat Tugas</p>
                  <input type="text" name="tgl_surat_tugas" class="form-control datepicker" value="<?= $d['tgl_surat_tugas'] ?>" disabled>
                <br>
                <p>Tahun Ajaran</p>
                  <input type="text" name="thn_ajaran" class="form-control" value="<?= $d['thn_ajaran'] ?>" readonly>
                <br>
                <p>Sekolah Induk</p>
                  <input type="text" name="sklh_induk" class="form-control" value="<?= $d['sklh_induk'] ?>" readonly>
                <br>
                <p>Nama Guru</p>
                  <input type="text" name="nama_guru" class="form-control" value="<?= $d['nama_guru'] ?>" readonly>
                <br>
                <p>NIK Guru</p>
                  <input type="text" name="nik_guru" class="form-control" value="<?= $d['nik_guru'] ?>" readonly>
                <br>
                <p>Jenis Kelamin</p>
                  <input type="text" name="jk" class="form-control" value="<?= $d['jk'] ?>" readonly>
                <br>
                <p>Tempat Lahir</p>
                  <input type="text" name="tempat_lahir" class="form-control" value="<?= $d['tempat_lahir'] ?>" readonly>
                <br>
                <p>Tanggal Lahir</p>
                  <input type="text" name="tgl_lahir" class="form-control datepicker" value="<?= $d['tgl_lahir'] ?>" disabled>
                <br>
                <p>Nama Ibu Kandung</p>
                  <input type="text" name="nama_ibu_kandung" class="form-control" value="<?= $d['nama_ibu_kandung'] ?>" readonly>
                <br>
                <p>Alamat</p>
                  <input type="text" name="alamat" class="form-control" value="<?= $d['alamat'] ?>" readonly>
                <br>
                <p>Agama</p>
                  <input type="text" name="agama" class="form-control" value="<?= $d['agama'] ?>" readonly>
                <br>
                <p>Status Pekawinan</p>
                  <input type="text" name="status_perkawinan" class="form-control" value="<?= $d['status_perkawinan'] ?>" readonly>
                <br>
                <p>Nama Suami/Istri</p>
                  <input type="text" name="nama_pasangan" class="form-control" value="<?= $d['nama_pasangan'] ?>" readonly>
                <br>
                <p>Nomor NPWP</p>
                  <input type="text" name="npwp" class="form-control" value="<?= $d['npwp'] ?>" readonly>
                <br>
                <p>Nama Wajib Pajak</p>
                  <input type="text" name="nama_wajib_pajak" class="form-control" value="<?= $d['nama_wajib_pajak'] ?>" readonly>
                <br>
                <p>Jenis GTK</p>
                  <input type="text" name="jenis_gtk" class="form-control" value="<?= $d['jenis_gtk'] ?>" readonly>
                <br>
                <p>NUPTK</p>
                  <input type="text" name="nuptk" class="form-control" value="<?= $d['nuptk'] ?>" readonly>
                <br>
                <p>Status Pegawai</p>
                  <input type="text" name="status_peg" class="form-control" value="<?= $d['status_peg'] ?>" readonly>
                <br>
                <p>NIP</p>
                  <input type="text" name="nip" class="form-control" value="<?= $d['nip'] ?>" readonly>
                <br>
                <p>SK CPNS</p>
                  <input type="text" name="sk_cpns" class="form-control" value="<?= $d['sk_cpns'] ?>" readonly>
                <br>
                <p>tmt CPNS</p>
                  <input type="text" name="tmt_cpns" class="form-control" value="<?= $d['tmt_cpns'] ?>" readonly>
                <br>
                <p>tmt SK Pengangkatan</p>
                  <input type="text" name="tmt_sk_pengangkatan" class="form-control" value="<?= $d['tmt_sk_pengangkatan'] ?>" readonly>
                <br>
                <p>Sumber Gaji</p>
                  <input type="text" name="sumber_gaji" class="form-control" value="<?= $d['sumber_gaji'] ?>" readonly>
                <br>
                <p>Pangkat Golongan</p>
                  <input type="text" name="pangkat_gol" class="form-control" value="<?= $d['pangkat_gol'] ?>" readonly>
                <br>
                <p>tmt Pangkat Golongan</p>
                  <input type="text" name="tmt_pangkat_gol" class="form-control" value="<?= $d['tmt_pangkat_gol'] ?>" readonly>
                <br>
                <p>Masa Kerja</p>
                  <input type="text" name="masa_kerja" class="form-control" value="<?= $d['masa_kerja'] ?>" readonly>
                <br>
                <p>SK Pengkatan</p>
                  <input type="text" name="sk_pengangkatan" class="form-control" value="<?= $d['sk_pengangkatan'] ?>" readonly>
                <br>
                <p>tmt Pengangkatan</p>
                  <input type="text" name="tmt_pengangkatan" class="form-control" value="<?= $d['tmt_pengangkatan'] ?>" readonly>
                <br>
                <p>Lembaga Pengangkatan</p>
                  <input type="text" name="lembaga_pengangkatan" class="form-control" value="<?= $d['lembaga_pengangkatan'] ?>" readonly>
                <br>
                <p>Kartu Pegawai</p>
                  <input type="text" name="kartu_pegawai" class="form-control" value="<?= $d['kartu_pegawai'] ?>" readonly>
                <br>
                <p>Kartu Pegawai Pasangan (Suami/Istri)</p>
                  <input type="text" name="kartu_pasangan" class="form-control" value="<?= $d['kartu_pasangan'] ?>" readonly>
                <br>
                <p>Kompetensi</p>
                  <input type="text" name="kompetensi" class="form-control" value="<?= $d['kompetensi'] ?>" readonly>
                <br>
                <p>Pendidikan Terakhir</p>
                  <input type="text" name="pendidikan_terakhir" class="form-control" value="<?= $d['pendidikan_terakhir'] ?>" readonly>
                <br>
                <p>Status Kuliah</p>
                  <input type="text" name="status_kuliah" class="form-control" value="<?= $d['status_kuliah'] ?>" readonly>
                <br>
                <p>Email</p>
                  <input type="text" name="email" class="form-control" value="<?= $d['email'] ?>" readonly>
                <br>
                <p>Tahun Pensiun</p>
                  <input type="text" name="tahun_pensiun" class="form-control" value="<?= $d['tahun_pensiun'] ?>" readonly>
                <br>
                <p>Tugas Tambahan</p>
                  <input type="text" name="tugas_tambahan" class="form-control" value="<?= $d['tugas_tambahan'] ?>" readonly>
                <br>
                <p>tmt Tugas Tambahan</p>
                  <input type="text" name="tmt_tugas_tambahan" class="form-control" value="<?= $d['tmt_tugas_tambahan'] ?>" readonly>
                <br>
                <p>Jumlah Jam Tugas Tambahan</p>
                  <input type="text" name="jml_jam_tugas_tambahan" class="form-control" value="<?= $d['jml_jam_tugas_tambahan'] ?>" readonly>
                <br>
                <p>Jumlah Jam Mengajar</p>
                  <input type="text" name="jml_jam_mengajar" class="form-control" value="<?= $d['jml_jam_mengajar'] ?>" readonly>
                <br>
                <p>Jumlah Mengajar Tugas Tambahan</p>
                  <input type="text" name="jml_mengajar_tugas_tmbh" class="form-control" value="<?= $d['jml_mengajar_tugas_tmbh'] ?>" readonly>
                <br>
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

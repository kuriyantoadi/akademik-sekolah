<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

// buat post dari tambah guru
$tgl_perubahan = $_POST['tgl_perubahan'];
$sinkron_terakhir = $_POST['sinkron_terakhir'];
$no_surat_tugas = $_POST['no_surat_tugas'];
$tgl_surat_tugas = $_POST['tgl_surat_tugas'];
$thn_ajaran = $_POST['thn_ajaran'];
$sklh_induk = $_POST['sklh_induk'];
$nama_guru = $_POST['nama_guru'];
$nik_guru = $_POST['nik_guru'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$nama_ibu_kandung = $_POST['nama_ibu_kandung'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$status_perkawinan = $_POST['status_perkawinan'];
$nama_pasangan = $_POST['nama_pasangan'];
$pekerjaan_pasangan = $_POST['pekerjaan_pasangan'];
$npwp = $_POST['npwp'];
$nama_wajib_pajak = $_POST['nama_wajib_pajak'];
$jenis_gtk = $_POST['jenis_gtk'];
$nuptk = $_POST['nuptk'];
$status_peg = $_POST['status_peg'];
$nip = $_POST['nip'];
$sk_cpns = $_POST['sk_cpns'];
$tmt_cpns = $_POST['tmt_cpns'];
$tmt_sk_pengangkatan = $_POST['tmt_sk_pengangkatan'];
$sumber_gaji = $_POST['sumber_gaji'];
$pangkat_gol = $_POST['pangkat_gol'];
$tmt_pangkat_gol = $_POST['tmt_pangkat_gol'];
$masa_kerja = $_POST['masa_kerja'];
$sk_pengangkatan = $_POST['sk_pengangkatan'];
$tmt_pengkatan = $_POST['tmt_pengkatan'];
$lembaga_pengakatan = $_POST['lembaga_pengakatan'];
$kartu_pegawai = $_POST['kartu_pegawai'];
$kartu_pasangan = $_POST['kartu_pasangan'];
$kompetensi = $_POST['kompetensi'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$status_kuliah = $_POST['status_kuliah'];
$email = $_POST['email'];
$tahun_pensiun = $_POST['tahun_pensiun'];
$tugas_tambahan = $_POST['tugas_tambahan'];
$tmt_tugas_tambahan = $_POST['tmt_tugas_tambahan'];
$jml_jam_tugas_tambahan = $_POST['jml_jam_tugas_tambahan'];
$jml_jam_mengajar = $_POST['jml_jam_mengajar'];
$jml_mengajar_tugas_tmbh = $_POST['jml_mengajar_tugas_tmbh'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_guru Values('',
  -- masukan nama-nama variabel post urut dari seperti di tabel tb_guru
  '$tgl_perubahan',
  '$sinkron_terakhir',
  '$no_surat_tugas',
  '$tgl_surat_tugas',
  '$thn_ajaran',
  '$sklh_induk',
  '$nama_guru',
  '$nik_guru',
  '$jk',
  '$tempat_lahir',
  '$tgl_lahir',
  '$nama_ibu_kandung',
  '$alamat',
  '$agama',
  '$status_perkawinan',
  '$nama_pasangan',
  '$pekerjaan_pasangan',
  '$npwp',
  '$nama_wajib_pajak',
  '$jenis_gtk',
  '$nuptk',
  '$status_peg',
  '$nip',
  '$sk_cpns',
  '$tmt_cpns',
  '$tmt_sk_pengangkatan',
  '$sumber_gaji',
  '$pangkat_gol',
  '$tmt_pangkat_gol',
  '$masa_kerja',
  '$sk_pengangkatan',
  '$tmt_pengkatan',
  '$lembaga_pengakatan',
  '$kartu_pegawai',
  '$kartu_pasangan',
  '$kompetensi',
  '$pendidikan_terakhir',
  '$status_kuliah',
  '$email',
  '$tahun_pensiun',
  '$tugas_tambahan',
  '$tmt_tugas_tambahan',
  '$jml_jam_tugas_tambahan',
  '$jml_jam_mengajar',
  '$jml_mengajar_tugas_tmbh'
  )");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:guru.php?pesan=tambah-berhasil");
} else {
    // echo "tambah gagal";
    header("location:guru.php?pesan=tambah-gagal");
}

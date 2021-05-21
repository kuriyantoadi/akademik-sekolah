<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$nis_siswa = $_POST['nis_siswa'];
$nisn_siswa = $_POST['nisn_siswa'];
$nama_siswa = $_POST['nama_siswa'];
$id_kelas = $_POST['id_kelas'];
$jurusan = $_POST['jurusan'];
$jk = $_POST['jk'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$anak_ke = $_POST['anak_ke'];
$status_dlm_keluarga = $_POST['status_dlm_keluarga'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$tgl_diterima = $_POST['tgl_diterima'];
$diterima_kelas = $_POST['diterima_kelas'];
$sms_diterima = $_POST['sms_diterima'];
$asal_sklh = $_POST['asal_sekolah'];
$almt_asal_sklh = $_POST['almt_asal_sklh'];
$no_ijzh_smp = $_POST['no_ijzh_smp'];
$thn_ijzh_smp = $_POST['thn_ijzh_smp'];
$no_skhun_smp = $_POST['no_skhun_smp'];
$thn_skhun_smp = $_POST['thn_skhun_smp'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat_orgtua = $_POST['alamat_orgtua'];
$no_hp_orgtua = $_POST['no_hp_orgtua'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$nama_wali = $_POST['nama_wali'];
$alamat_wali = $_POST['alamat_wali'];
$no_hp_wali = $_POST['no_hp_wali'];
$pekerjaan_wali = $_POST['pekerjaan_wali'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_siswa Values(
  '',
  '$nis_siswa',
  md5('$nisn_siswa'),
  'siswa',
  '$nisn_siswa',
  '$nama_siswa',
  '$id_kelas',
  '$jk',
  '$tempat_lahir',
  '$tgl_lahir',
  '$agama',
  '$anak_ke',
  '$status_dlm_keluarga',
  '$alamat',
  '$no_hp',
  '$tgl_diterima',
  '$diterima_kelas',
  '$sms_diterima',
  '$asal_sklh',
  '$almt_asal_sklh',
  '$no_ijzh_smp',
  '$thn_ijzh_smp',
  '$no_skhun_smp',
  '$thn_skhun_smp',
  '$nama_ayah',
  '$nama_ibu',
  '$alamat_orgtua',
  '$no_hp_orgtua',
  '$pekerjaan_ayah',
  '$pekerjaan_ibu',
  '$nama_wali',
  '$alamat_wali',
  '$no_hp_wali',
  '$pekerjaan_wali'
  '',
  '',
  '',
  '',
  '',
  '')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:siswa.php?pesan=tambah-berhasil");
} else {
    echo "tambah gagal";
    // header("location:siswa.php?pesan=tambah-gagal");
}

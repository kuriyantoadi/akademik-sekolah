<?php
session_start();
if ($_SESSION['status'] != "siswa") {
    header("location:login.php?pesan=belum_login");
}

include 'koneksi.php';

$id_jadwal_pkl = $_POST['id_jadwal_pkl'];
$tgl_pengajuan = $_POST['tgl_pengajuan'];
$nisn_siswa = $_POST['nisn_siswa'];
$kelas = $_POST['kelas'];
$id_industri = $_POST['id_industri'];
$tgl_mulai = $_POST['tgl_mulai'];
$tgl_selesai = $_POST['tgl_selesai'];

$db_siswa = mysqli_query($koneksi, "SELECT * from tb_pengajuan where nisn_siswa='$nisn_siswa' ");
$cek_siswa = mysqli_fetch_array($db_siswa);

if ($cek_siswa) {
  header("location:pengajuan_form.php?id_jadwal_pkl=$id_jadwal_pkl&pesan=sudah_pkl");
  exit();
}

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_pengajuan Values('',
              '$id_industri',
              '$nisn_siswa',
              '$tgl_pengajuan',
              '$tgl_mulai',
              '$tgl_selesai',
              '',
              'Menunggu')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:pengajuan_form_lihat.php?pesan=pengajuan_berhasil&nisn_siswa=$nisn_siswa");
} else {
    // echo "tambah gagal";
    header("location:industri.php?pesan=pengajuan_gagal");
}

<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$nama_alumni = $_POST['nama_alumni'];
$jurusan_alumni = $_POST['jurusan_alumni'];
$angkatan = $_POST['angkatan'];
$tempat_kerja = $_POST['tempat_kerja'];
$status = $_POST['status'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_alumni Values('',
              '$nama_alumni',
              '$jurusan_alumni',
              '$angkatan',
              '$tempat_kerja',
              '$status')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:alumni.php?pesan=tambah-berhasil");
} else {
    // echo "tambah gagal";
    header("location:alumni.php?pesan=tambah-gagal");
}

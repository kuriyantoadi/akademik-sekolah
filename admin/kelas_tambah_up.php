<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$tingkat = $_POST['tingkat'];
$jurusan = $_POST['jurusan'];
$kode_kelas = $_POST['kode_kelas'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_kelas Values('','$tingkat','$jurusan','$kode_kelas')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:kelas.php?pesan=tambah-berhasil");
} else {
    // echo "tambah gagal";
    header("location:kelas.php?pesan=tambah-gagal");
}

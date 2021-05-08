<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$nama_jurusan = $_POST['nama_jurusan'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_jurusan Values('','$nama_jurusan')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:jurusan.php?pesan=tambah-berhasil");
} else {
    // echo "tambah gagal";
    header("location:jurusan.php?pesan=tambah-gagal");
}

<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$nama_industri = $_POST['nama_industri'];
$jenis_industri = $_POST['jenis_industri'];
$link_industri = $_POST['link_industri'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_industri Values('',
              '$nama_industri',
              '$jenis_industri',
              '$link_industri'
              )");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:industri.php?pesan=tambah-berhasil");
} else {
    // echo "tambah gagal";
    header("location:industri.php?pesan=tambah-gagal");
}

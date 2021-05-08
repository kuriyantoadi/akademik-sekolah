<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

// buat post dari tambah guru
$nama_guru = $_POST['nama_guru'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_guru Values('',
  -- masukan nama-nama variabel post urut dari seperti di tabel tb_guru
  '$nama_guru',
  )");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:guru.php?pesan=tambah-berhasil");
} else {
    // echo "tambah gagal";
    header("location:guru.php?pesan=tambah-gagal");
}

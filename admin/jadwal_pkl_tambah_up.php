<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$id_industri = $_POST['id_industri'];
$tgl_mulai = $_POST['tgl_mulai'];
$tgl_selesai = $_POST['tgl_selesai'];
$kuota = $_POST['kuota'];
$status = $_POST['status'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_jadwal_pkl Values('',
              '$id_industri',
              '$tgl_mulai',
              '$tgl_selesai',
              '$kuota',
              '$status')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:jadwal_pkl.php?pesan=tambah-berhasil");
} else {
    // echo "tambah gagal";
    header("location:jadwal_pkl.php?pesan=tambah-gagal");
}

<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:login.php?pesan=belum_login");
}

include '../koneksi.php';

$nama_mapel = $_POST['nama_mapel'];
$id_guru = $_POST['id_guru'];
$id_kelas = $_POST['id_kelas'];

$cek_tambah = mysqli_query($koneksi, "INSERT INTO tb_mapel Values('',
              '$nama_mapel',
              '$id_guru',
              '$id_kelas')");

if ($cek_tambah) {
    // echo "tambah berhasil";
    header("location:mapel.php?pesan=tambah-berhasil");
} else {
    // echo "tambah gagal";
    header("location:mapel.php?pesan=tambah-gagal");
}

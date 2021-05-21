<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_pengajuan = $_GET['id_pengajuan'];
$tgl_konfrimasi = date('d-m-Y');

$cek_pengajuan = mysqli_query($koneksi, "UPDATE tb_pengajuan SET
        tgl_konfirmasi = '$tgl_konfrimasi',
        kondisi = 'Di ijinkan'
        where id_pengajuan='$id_pengajuan'
        ");

if ($cek_pengajuan) {
  // echo "edit berhasil";
    header("location:pengajuan.php?pesan=konfirmasi-diijinkan-berhasil");
} else {
  echo "edit gagal";
    header("location:pengajuan.php?pesan=konfirmasi-diijinkan-gagal");
}

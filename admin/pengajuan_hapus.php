<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}
$id_pengajuan = $_GET['id_pengajuan'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_pengajuan where id_pengajuan='$id_pengajuan' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:pengajuan.php?pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:pengajuan.php?pesan=hapus-gagal");
}

<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}
$id_industri = $_GET['id_industri'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_industri where id_industri='$id_industri' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:industri.php?pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:industri.php?pesan=hapus-gagal");
}

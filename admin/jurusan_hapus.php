<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}
$id_jurusan = $_GET['id_jurusan'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_jurusan where id_jurusan='$id_jurusan' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:jurusan.php?pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:jurusan.php?pesan=hapus-gagal");
}

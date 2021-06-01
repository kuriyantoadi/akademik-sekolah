<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}
$id_alumni = $_GET['id_alumni'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_alumni where id_alumni='$id_alumni' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:alumni.php?pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:alumni.php?pesan=hapus-gagal");
}

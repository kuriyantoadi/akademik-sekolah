<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}
$id_jadwal_pkl = $_GET['id_jadwal_pkl'];
// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_jadwal_pkl where id_jadwal_pkl='$id_jadwal_pkl' ");

// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:jadwal_pkl.php?pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:jadwal_pkl.php?pesan=hapus-gagal");
}

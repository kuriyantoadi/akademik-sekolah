<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status'] != "guru") {
    header("location:index.php?pesan=belum_login");
}
$id_materi = $_GET['id_materi'];
$id_mapel = $_GET['id_mapel'];
$file_materi = $_GET['file_materi'];

// menghapus data dari database
$cek_hapus = mysqli_query($koneksi, "delete from tb_materi where id_materi='$id_materi' ");

unlink("../assets/file_materi/$file_materi");


// mengalihkan halaman kembali ke index.php
if ($cek_hapus) {
    // echo "hapus berhasil";
    header("location:materi.php?id_mapel=$id_mapel&pesan=hapus-berhasil");
} else {
    // echo "hapus gagal";
    header("location:materi.php?id_mapel=$id_mapel&pesan=hapus-gagal");
}

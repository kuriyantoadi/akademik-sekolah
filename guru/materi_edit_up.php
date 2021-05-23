<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

// $id_materi = $_POST['id_materi'];
$id_mapel = $_POST['id_mapel'];
$nama_materi = $_POST['nama_materi'];
$id_kelas = $_POST['id_kelas'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_materi SET
        id_mapel='$id_mapel',
        id_kelas = '$id_kelas',
        nama_materi = '$nama_materi'
        where id_materi='$id_materi'
        ");

if ($cek_edit) {
  echo "edit berhasil";
    header("location:materi.php?id_mapel=$id_mapel&pesan=edit-berhasil");
} else {
  echo "edit gagal";
    header("location:mapel.php?id_mapel=$id_mapel&pesan=edit-gagal");
}

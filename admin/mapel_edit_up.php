<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_mapel = $_POST['id_mapel'];
$nama_mapel = $_POST['nama_mapel'];
$id_guru = $_POST['id_guru'];
$id_kelas = $_POST['id_kelas'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_mapel SET
        nama_mapel='$nama_mapel',
        id_guru = '$id_guru',
        id_kelas = '$id_kelas'
        where id_mapel='$id_mapel'
        ");

if ($cek_edit) {
  echo "edit berhasil";
    header("location:mapel.php?id_mapel=$id_mapel&pesan=edit-berhasil");
} else {
  echo "edit gagal";
    header("location:mapel.php?id_mapel=$id_mapel&pesan=edit-gagal");
}

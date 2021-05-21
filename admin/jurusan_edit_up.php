<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_jurusan = $_POST['id_jurusan'];
$nama_jurusan = $_POST['nama_jurusan'];


$cek_edit = mysqli_query($koneksi, "UPDATE tb_jurusan SET
        nama_jurusan='$nama_jurusan'
        where id_jurusan='$id_jurusan'
        ");

if ($cek_edit) {
  echo "edit berhasil";
    header("location:jurusan.php?id_jurusan=$id_jurusan&pesan=edit-berhasil");
} else {
  echo "edit gagal";
    header("location:jurusan.php?id_jurusan=$id_jurusan&pesan=edit-gagal");
}

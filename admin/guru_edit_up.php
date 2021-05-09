<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_guru = $_POST['id_guru'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_guru SET
        -- nama_kolom=$variabel_dari_post
        nama_guru='$nama_guru'
        where id_guru='$id_guru'
        ");

if ($cek_edit) {
  echo "edit berhasil";
    header("location:guru.php?id_guru=$id_guru&pesan=edit-berhasil");
} else {
  echo "edit gagal";
    header("location:guru.php?id_guru=$id_guru&pesan=edit-gagal");
}

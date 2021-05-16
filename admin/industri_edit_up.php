<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_industri = $_POST['id_industri'];
$nama_industri = $_POST['nama_industri'];
$jenis_industri = $_POST['jenis_industri'];
$link_industri = $_POST['link_industri'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_industri SET
        -- nama_kolom=$variabel_dari_post
        nama_industri='$nama_industri',
        jenis_industri='$jenis_industri',
        link_industri='$link_industri'
        where id_industri='$id_industri'
        ");

if ($cek_edit) {
  // echo "edit berhasil";
    header("location:industri.php?pesan=edit-berhasil");
} else {
  // echo "edit gagal";
    header("location:industri.php?pesan=edit-gagal");
}

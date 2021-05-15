<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_jadwal_pkl = $_POST['id_jadwal_pkl'];
$id_industri = $_POST['id_industri'];
$tgl_mulai = $_POST['tgl_mulai'];
$tgl_selesai = $_POST['tgl_selesai'];
$kuota = $_POST['kuota'];
$status = $_POST['status'];

$cek_edit = mysqli_query($koneksi, "UPDATE tb_jadwal_pkl SET
        id_industri='$id_industri',
        tgl_mulai='$tgl_mulai',
        tgl_selesai='$tgl_selesai',
        kuota='$kuota',
        status='$status'
        where id_jadwal_pkl='$id_jadwal_pkl'
        ");

if ($cek_edit) {
  // echo "edit berhasil";
    header("location:jadwal_pkl.php?id_jadwal_pkl=$id_jadwal_pkl&pesan=edit-berhasil");
} else {
  // echo "edit gagal";
    header("location:jadwal_pkl.php?id_jadwal_pkl=$id_jadwal_pkl&pesan=edit-gagal");
}

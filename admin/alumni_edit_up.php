<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_alumni = $_POST['id_alumni'];
$nama_alumni = $_POST['nama_alumni'];
$jurusan_alumni = $_POST['jurusan_alumni'];
$angkatan = $_POST['angkatan'];
$tempat_kerja = $_POST['tempat_kerja'];
$status = $_POST['status'];


$cek_edit = mysqli_query($koneksi, "UPDATE tb_alumni SET
        -- nama_kolom=$variabel_dari_post
        nama_alumni='$nama_alumni',
        jurusan_alumni='$jurusan_alumni',
        angkatan='$angkatan',
        tempat_kerja='$tempat_kerja',
        Status='$status'
        where id_alumni='$id_alumni'
        ");

if ($cek_edit) {
  // echo "edit berhasil";
    header("location:alumni.php?pesan=edit-berhasil");
} else {
  // echo "edit gagal";
    header("location:alumni.php?pesan=edit-gagal");
}

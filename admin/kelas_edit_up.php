<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_kelas = $_POST['id_kelas'];
$tingkat = $_POST['tingkat'];
$jurusan = $_POST['jurusan'];
$kode_kelas = $_POST['kode_kelas'];


$cek_edit = mysqli_query($koneksi, "UPDATE tb_kelas SET
        tingkat='$tingkat',
        jurusan = '$jurusan',
        kode_kelas = '$kode_kelas'
        where id_kelas='$id_kelas'
        ");

if ($cek_edit) {
  echo "edit berhasil";
    header("location:kelas.php?id_kelas=$id_kelas&pesan=edit-berhasil");
} else {
  echo "edit gagal";
    header("location:kelas.php?id_kelas=$id_kelas&pesan=edit-gagal");
}

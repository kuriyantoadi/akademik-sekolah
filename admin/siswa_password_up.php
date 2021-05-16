<?php

include '../koneksi.php';

$id_siswa = $_POST['id_siswa'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['konfirmasi_password'];

if ("$password" != "$konfirmasi_password") {
  header("location:password.php?pesan=konfirmasi_password_salah");
  exit();
}

$password_baru = mysqli_query($koneksi, "UPDATE tb_siswa SET
        password=md5('$password')
        where id_siswa='$id_siswa'
        ");

if ($password_baru) {
    // echo "tambah berhasil";
    header("location:siswa.php?pesan=password_update");
} else {
    // echo "tambah gagal";
    header("location:siswa.php?pesan=password_update_gagal");
}


 ?>

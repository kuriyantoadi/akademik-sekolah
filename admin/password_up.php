<?php

include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['konfirmasi_password'];

if ("$password" != "$konfirmasi_password") {
  header("location:password.php?pesan=konfirmasi_password_salah");
  exit();
}

$password_baru = mysqli_query($koneksi, "UPDATE tb_user SET
        password=md5('$password')
        where username='$username'
        ");

if ($password_baru) {
    // echo "tambah berhasil";
    header("location:password.php?pesan=password_update");
} else {
    // echo "tambah gagal";
    header("location:password.php?pesan=password_update_gagal");
}


 ?>

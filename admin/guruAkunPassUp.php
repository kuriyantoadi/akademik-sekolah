<?php

include '../koneksi.php';

$id_guru = $_POST['id_guru'];
$username = $_POST['username'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['konfirmasi_password'];

if ("$password" != "$konfirmasi_password") {
  header("location:password.php?pesan=konfirmasi_password_salah");
  exit();
}

$password_baru = mysqli_query($koneksi, "UPDATE tb_guru SET
        password=md5('$password')
        where id_guru='$id_guru'
        ");

if ($password_baru) {
    // echo "tambah berhasil";
    header("location:guruAkun.php?id_guru=$id_guru&pesan=password_update");
} else {
    // echo "tambah gagal";
    header("location:guruAkun.php?id_guru=$id_guru&pesan=password_update_gagal");
}


 ?>

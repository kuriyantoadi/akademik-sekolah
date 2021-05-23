<?php
// echo "salah php";
// mengaktifkan session php

session_start();
// echo "salah php session";

// menghubungkan dengan koneksi
include 'koneksi.php';
// echo "salah php inlucde";

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$nisn_siswa = addslashes(trim($_POST['nisn_siswa']));
// $nisn_siswa = $_POST['nisn_siswa'];
$password = md5($_POST['password']);
// echo "salah php";


// menyeleksi data admin dengan nisn_siswa dan password yang sesuai
$data = mysqli_query($koneksi, "select * from tb_siswa where nisn_siswa='$nisn_siswa' and password='$password'");

// $d = mysqli_fetch_array($data);
// while ($d = mysqli_fetch_array($data)) {
//    $nama_siswa = $d['nama_siswa'];
//  }
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// echo "cek2";

if ($cek > 0) {
    $login = mysqli_fetch_assoc($data);

    if ($login['status']=="siswa") {
        $_SESSION['nisn_siswa'] = $nisn_siswa;
        $_SESSION['status'] = "siswa";
        // echo "cek";
        header("location:dashboard.php");

    } else {
        // echo "salah1";
        header("location:index.php?pesan=login-gagal");
    }
} else {
    // echo "salah2";
    header("location:index.php?pesan=login-gagal");
}

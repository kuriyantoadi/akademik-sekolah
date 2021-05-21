<?php
include('../koneksi.php');
$id_siswa = $_GET['id_siswa'];
$sms = $_GET['sms'];
$rapot = $_GET['rapot'];

// hapus file
unlink("../assets/$sms/$rapot");

// hapus database
mysqli_query($koneksi, "UPDATE tb_siswa SET
             $sms=''
             where id_siswa='$id_siswa'
             ");

//setelah selesai dihapus
header("location:rapot_lihat.php?id_siswa=$id_siswa&pesan=rapot_hapus");

 ?>

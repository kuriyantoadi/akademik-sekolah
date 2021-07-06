<?php
include('../koneksi.php');
$id_lap_prakerin = $_GET['id_lap_prakerin'];
$file_prakerin = $_GET['file_prakerin'];

// hapus file
unlink("../assets/lap_prakerin/$file_prakerin");

// hapus database
mysqli_query($koneksi, "DELETE from tb_lap_prakerin where id_lap_prakerin='$id_lap_prakerin' ");

//setelah selesai dihapus
// header("location:lap_prakerin.php");

 ?>

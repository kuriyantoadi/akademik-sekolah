<?php
include('../koneksi.php');
$nisn_siswa = $_GET['nisn_siswa'];
$sms = $_GET['sms'];
$rapot = $_GET['rapot'];

$data = mysqli_query($koneksi, "select * from tb_siswa where $sms='$rapot' ");
while ($d = mysqli_fetch_array($data)) {

// hapus file
unlink("../../raport/$nama_file/$d[$nama_file]");
unlink("../assets/$sms/$rapot");

// hapus database
mysqli_query($koneksi, "UPDATE tb_siswa SET
             $nama_file=''
             where id_siswa='$id_siswa'
             ");

//setelah selesai dihapus
// header("location:raport_tampil.php?id_siswa=$id_siswa&jns_file=$jns_file&nama_file=$nama_file");

}
 ?>

<?php
session_start();
if ($_SESSION['status'] != "siswa") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_siswa = $_POST['id_siswa'];
$nisn_siswa = $_POST['nisn_siswa'];
if ($_POST['upload']) {

      //proses upload
      // $nama_materi_ok = preg_replace("/\s+/", "_", $nama_materi);
      // $nama_guru_ok = preg_replace("/\s+/", "_", $nama_guru);


      $ekstensi_diperbolehkan = array('pdf');
      date_default_timezone_set('Asia/Jakarta');
      $tgl = date('d-m-Y  H:i' );
      $file_prakerin = $_FILES['file_prakerin']['name'];
      $x = explode('.', $file_prakerin);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['file_prakerin']['size'];
      $file_tmp = $_FILES['file_prakerin']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 1500000) {
              move_uploaded_file($file_tmp, '../assets/lap_prakerin/'.'lap_prakerin-'.$nisn_siswa.'.pdf');
          } else {
              echo 'file_prakerin';
              echo 'UKURAN FILE TERLALU BESAR';
              exit;
          }
      } else {
          echo 'File Rapot tidak pdf 1';
          echo "<br>";
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          exit;
      }
}

$cek_materi = mysqli_query($koneksi, "INSERT INTO tb_lap_prakerin Values(
              '',
              '$id_siswa',
              'lap_prakerin-$nisn_siswa.pdf',
              '$tgl')" );

if ($cek_materi) {
  // echo "edit berhasil";
    header("location:lap_prakerin.php?pesan=upload_prakerin_berhasil&id_mapel=$id_mapel");
} else {
  echo "edit gagal";
  // header("location:lap_prakerin.php?pesan=upload_prakerin_gagal&id_mapel=$id_mapel");
}

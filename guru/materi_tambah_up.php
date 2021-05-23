<?php
session_start();
if ($_SESSION['status'] != "guru") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_guru = $_POST['id_guru'];
$id_mapel = $_POST['id_mapel'];
$id_kelas = $_POST['id_kelas'];
$nama_materi = $_POST['nama_materi'];
$nama_guru = $_POST['nama_guru'];

if ($_POST['upload']) {

      //proses upload
      $ekstensi_diperbolehkan = array('pdf');
      date_default_timezone_set('Asia/Jakarta');
      $tgl = date('d-m-Y  H:i' );
      $file_materi = $_FILES['file_materi']['name'];
      $x = explode('.', $file_materi);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['file_materi']['size'];
      $file_tmp = $_FILES['file_materi']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 1500000) {
              move_uploaded_file($file_tmp, '../assets/file_materi/'.'file_materi-'.$nama_guru.'-'.$nama_materi.'.pdf');
          } else {
              echo 'file_materi';
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

$cek_materi = mysqli_query($koneksi, "INSERT INTO tb_materi Values(
              '',
              '$id_mapel',
              '$nama_materi',
              'file_materi-$nama_guru-$nama_materi.pdf',
              '$tgl') ");

if ($cek_materi) {
  // echo "edit berhasil";
    header("location:materi.php?pesan=tambah_materi_berhasil&id_mapel=$id_mapel");
} else {
  // echo "edit gagal";
  header("location:materi.php?pesan=tambah_materi_gagal&id_mapel=$id_mapel");
}

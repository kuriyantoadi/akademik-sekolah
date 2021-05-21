<?php
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}

include '../koneksi.php';

$id_siswa = $_POST['id_siswa'];
$nisn_siswa = $_POST['nisn_siswa'];


if ($_POST['upload']) {
    $c_rapot1 = $_FILES['rapot_sms1']['size'];
    $c_rapot2 = $_FILES['rapot_sms2']['size'];
    $c_rapot3 = $_FILES['rapot_sms3']['size'];
    $c_rapot4 = $_FILES['rapot_sms4']['size'];
    $c_rapot5 = $_FILES['rapot_sms5']['size'];
    $c_rapot6 = $_FILES['rapot_sms6']['size'];

// rapot semeste1
    if ($c_rapot1 > 0) {
      //proses upload
      $ekstensi_diperbolehkan = array('pdf');
      $waktu = date('d-m-Y');
      $rapot_sms1_up = "rapot_sms1";
      $rapot_sms1 = $_FILES['rapot_sms1']['name'];
      $x = explode('.', $rapot_sms1);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['rapot_sms1']['size'];
      $file_tmp = $_FILES['rapot_sms1']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 1500000) {
              move_uploaded_file($file_tmp, '../assets/rapot_sms1/'.'rapot_sms1-id-'.$id_siswa.'-'.$nisn_siswa.'.pdf');
              $cek_rapot = mysqli_query($koneksi, "UPDATE tb_siswa SET
                      rapot_sms1='rapot_sms1-id-$id_siswa-$nisn_siswa.pdf'
                      where nisn_siswa='$nisn_siswa'
                      ");
          } else {
              echo 'rapot_sms1';
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


  // rapot semester2
    if ($c_rapot2 > 0) {
      //proses upload
      $ekstensi_diperbolehkan = array('pdf');
      $waktu = date('d-m-Y');
      $rapot_sms2_up = "rapot_sms2";
      $rapot_sms2 = $_FILES['rapot_sms2']['name'];
      $x = explode('.', $rapot_sms2);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['rapot_sms2']['size'];
      $file_tmp = $_FILES['rapot_sms2']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 1500000) {
              move_uploaded_file($file_tmp, '../assets/rapot_sms2/'.'rapot_sms2-id-'.$id_siswa.'-'.$nisn_siswa.'.pdf');
              $cek_rapot = mysqli_query($koneksi, "UPDATE tb_siswa SET
                      rapot_sms2='rapot_sms2-id-$id_siswa-$nisn_siswa.pdf'
                      where nisn_siswa='$nisn_siswa'
                      ");
          } else {
              echo 'rapot_sms2';
              echo 'UKURAN FILE TERLALU BESAR';
              exit;
          }
      } else {
          echo 'File Rapot tidak pdf 2';
          echo "<br>";
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          exit;
      }
    }

// rapot semester 3
    if ($c_rapot3 > 0) {
      //proses upload
      $ekstensi_diperbolehkan = array('pdf');
      $rapot_sms3 = $_FILES['rapot_sms3']['name'];
      $x = explode('.', $rapot_sms3);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['rapot_sms3']['size'];
      $file_tmp = $_FILES['rapot_sms3']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 1500000) {
              move_uploaded_file($file_tmp, '../assets/rapot_sms3/'.'rapot_sms3-id-'.$id_siswa.'-'.$nisn_siswa.'.pdf');
              $cek_rapot = mysqli_query($koneksi, "UPDATE tb_siswa SET
                      rapot_sms3='rapot_sms3-id-$id_siswa-$nisn_siswa.pdf'
                      where nisn_siswa='$nisn_siswa'
                      ");
          } else {
              echo 'rapot_sms3';
              echo 'UKURAN FILE TERLALU BESAR';
              exit;
          }
      } else {
          echo 'File Rapot tidak pdf 3';
          echo "<br>";
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          exit;
      }
    }

// rapot semester 4
    if ($c_rapot4 > 0) {
      //proses upload
      $ekstensi_diperbolehkan = array('pdf');
      $rapot_sms4 = $_FILES['rapot_sms4']['name'];
      $x = explode('.', $rapot_sms4);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['rapot_sms4']['size'];
      $file_tmp = $_FILES['rapot_sms4']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 1500000) {
              move_uploaded_file($file_tmp, '../assets/rapot_sms4/'.'rapot_sms4-id-'.$id_siswa.'-'.$nisn_siswa.'.pdf');
              $cek_rapot = mysqli_query($koneksi, "UPDATE tb_siswa SET
                      rapot_sms4='rapot_sms4-id-$id_siswa-$nisn_siswa.pdf'
                      where nisn_siswa='$nisn_siswa'
                      ");
          } else {
              echo 'rapot_sms4';
              echo 'UKURAN FILE TERLALU BESAR';
              exit;
          }
      } else {
          echo 'File Rapot tidak pdf 2';
          echo "<br>";
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          exit;
      }
    }

// rapot semester 5
    if ($c_rapot5 > 0) {
      //proses upload
      $ekstensi_diperbolehkan = array('pdf');
      $waktu = date('d-m-Y');
      $rapot_sms5_up = "rapot_sms5";
      $rapot_sms5 = $_FILES['rapot_sms5']['name'];
      $x = explode('.', $rapot_sms5);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['rapot_sms5']['size'];
      $file_tmp = $_FILES['rapot_sms5']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 1500000) {
              move_uploaded_file($file_tmp, '../assets/rapot_sms5/'.'rapot_sms5-id-'.$id_siswa.'-'.$nisn_siswa.'.pdf');
              $cek_rapot = mysqli_query($koneksi, "UPDATE tb_siswa SET
                      rapot_sms5='rapot_sms5-id-$id_siswa-$nisn_siswa.pdf'
                      where nisn_siswa='$nisn_siswa'
                      ");
          } else {
              echo 'rapot_sms5';
              echo 'UKURAN FILE TERLALU BESAR';
              exit;
          }
      } else {
          echo 'File Rapot tidak pdf 2';
          echo "<br>";
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          exit;
      }
    }

// rapot semester 6
    if ($c_rapot6 > 0) {
      //proses upload
      $ekstensi_diperbolehkan = array('pdf');
      $rapot_sms6 = $_FILES['rapot_sms6']['name'];
      $x = explode('.', $rapot_sms6);
      $ekstensi = strtolower(end($x));
      $ukuran    = $_FILES['rapot_sms6']['size'];
      $file_tmp = $_FILES['rapot_sms6']['tmp_name'];
      if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
          if ($ukuran < 1500000) {
              move_uploaded_file($file_tmp, '../assets/rapot_sms6/'.'rapot_sms6-id-'.$id_siswa.'-'.$nisn_siswa.'.pdf');
              $cek_rapot = mysqli_query($koneksi, "UPDATE tb_siswa SET
                      rapot_sms6='rapot_sms6-id-$id_siswa-$nisn_siswa.pdf'
                      where nisn_siswa='$nisn_siswa'
                      ");
          } else {
              echo 'rapot_sms6';
              echo 'UKURAN FILE TERLALU BESAR';
              exit;
          }
      } else {
          echo 'File Rapot tidak pdf 2';
          echo "<br>";
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
          // header("location:gagal-upload.php");
          exit;
      }
    }


}


if ($cek_rapot) {
  // echo "edit berhasil";
    header("location:rapot_lihat.php?pesan=tambah_rapot_berhasil&id_siswa=$id_siswa");
} else {
  // echo "edit gagal";
    header("location:rapot_lihat.php?pesan=tambah_rapot_gagal&id_siswa=$id_siswa");
}

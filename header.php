<?php
ob_start();
session_start();
if ($_SESSION['status'] != "siswa") {
    header("location:index.php?pesan=belum_login");
}
$nisn_siswa = $_SESSION['nisn_siswa'];

include 'koneksi.php';
$cek_id = mysqli_query($koneksi, "SELECT * from tb_siswa, tb_kelas where (tb_kelas.id_kelas=tb_siswa.id_kelas) AND nisn_siswa='$nisn_siswa' ");
while ($d_id = mysqli_fetch_array($cek_id)) {
  $id_siswa =  $d_id['id_siswa'];
  $id_kelas =  $d_id['id_kelas'];
  $tingkat = $d_id['tingkat'];
}


 ?>

<!doctype html>
<html lang="en">

<head>
	<title>Sistem Informasi Akademik</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>

	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="dashboard.php"><img src="assets/img/logo-bg.png" alt="Sistem Informasi Akademik" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>


				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar">
								<span><?= $nisn_siswa ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<!-- <li><a href="profil.php"><i class="lnr lnr-user"></i> <span>Profil Saya</span></a></li> -->
								<li><a href="password.php"><i class="lnr lnr-cog"></i> <span>Ubah Kata Sandi</span></a></li>
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Keluar</span></a></li>
							</ul>
						</li>

					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="dashboard.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="profil.php" class=""><i class="lnr lnr-user"></i> <span>Profil Saya</span></a></li>
            <li><a href="mapel.php" class=""><i class="lnr lnr-enter"></i> <span>Materi Pelajaran</span></a></li>
            <li><a href="rapot.php?nisn_siswa=<?= $nisn_siswa ?>" class=""><i class="lnr lnr-book"></i> <span>Rapot</span></a></li>
            <li><a href="https://smkn1ciruas.sch.id/wp/" class=""><i class="lnr lnr-phone-handset"></i> <span>Konseling</span></a></li>
            <?php if ($tingkat == 'XI') { ?>
              <li><a href="industri.php" class=""><i class="lnr lnr-list"></i> <span>Daftar Industri</span></a></li>
              <li><a href="pengajuan_form_lihat.php?nisn_siswa=<?= $nisn_siswa ?>" class=""><i class="lnr lnr-upload"></i> <span>Form Pengajuan Prakerin</span></a></li>
            <?php }else {

            } ?>
					</ul>
				</nav>
			</div>
		</div>

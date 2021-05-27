<?php
ob_start();
session_start();
if ($_SESSION['status'] != "admin") {
    header("location:index.php?pesan=belum_login");
}
$username = $_SESSION['username'];
 ?>

<!doctype html>
<html lang="en">

<head>
	<title>Sistem Informasi Akademik</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="../assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link href="../assets/datepicker/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
</head>

<body>
  <?= $username ?>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="dashboard.php"><img src="../assets/img/logo-bg.png" alt="Sistem PKL" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>


				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../assets/img/user.png" class="img-circle" alt="Avatar">
                <span><?php echo $username ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<!-- <li><a href="#"><i class="lnr lnr-user"></i> <span>Profil Saya</span></a></li> -->
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
            <li>
              <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-license"></i> <span>Prakerin</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
              <div id="subPages" class="collapse ">
                <ul class="nav">
                  <li><a href="industri.php" class=""><i class="lnr lnr-list"></i> <span>Daftar Industri</span></a></li>
                  <li><a href="jadwal_pkl.php" class=""><i class="lnr lnr-clock"></i> <span>Jadwal Prakerin</span></a></li>
      						<li><a href="pengajuan.php" class=""><i class="lnr lnr-enter-down"></i> <span>Pengajuan Prakerin</span></a></li>
                </ul>
              </div>
            </li>
						<li><a href="rapot.php" class=""><i class="lnr lnr-book"></i> <span>Daftar Rapot</span></a></li>
          	<li><a href="guru.php" class=""><i class="lnr lnr-user"></i> <span>Daftar Guru</span></a></li>
						<li><a href="siswa.php" class=""><i class="lnr lnr-users"></i> <span>Data Siswa</span></a></li>
						<li><a href="kelas.php" class=""><i class="lnr lnr-list"></i> <span>Daftar Kelas</span></a></li>
						<li><a href="jurusan.php" class=""><i class="lnr lnr-inbox"></i> <span>Daftar Jurusan</span></a></li>
            <li><a href="mapel.php" class=""><i class="lnr lnr-alarm"></i> <span>Daftar Mapel</span></a></li>
            <li><a href="materi.php" class=""><i class="lnr lnr-bullhorn"></i> <span>Daftar Materi</span></a></li>
          </ul>
				</nav>
			</div>
		</div>

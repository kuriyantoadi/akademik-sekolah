<?php
ob_start();
session_start();
if ($_SESSION['status'] != "guru") {
    header("location:index.php?pesan=belum_login");
}
$username = $_SESSION['username'];
include '../koneksi.php';

$cek_id = mysqli_query($koneksi, "SELECT * from tb_guru where username='$username' ");
while ($d_id = mysqli_fetch_array($cek_id)) {
  $id_guru =  $d_id['id_guru'];
}


 ?>

<!doctype html>
<html lang="en">

<head>
	<title>Sistem Informasi Akamdemik</title>
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
        <a href="dashboard.php"><img src="../assets/img/logo-bg.png" alt="Sistem Akademik Sekolah" class="img-responsive logo"></a>
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
						<li><a href="profil.php" class=""><i class="lnr lnr-user"></i> <span>Profil</span></a></li>
            <li><a href="mapel.php" class=""><i class="lnr lnr-book"></i> <span>Mata Pelajaran</span></a></li>
          </ul>
				</nav>
			</div>
		</div>

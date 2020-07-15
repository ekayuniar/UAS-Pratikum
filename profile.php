<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Selamat Datang di W Store Kami</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">W STORE MLG</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
        <a class="nav-link" href="home.php">Beranda <span class="sr-only">(current)</span></a>

                        <li class="nav-item active">
		<a class="nav-link" href="profile.php">Profile WStore <span class="sr-only">(current)</span></a>
	  <li class="nav-item active">
		<a class="nav-link" href="tambah_data.php">Input Data Pengunjung <span class="sr-only">(current)</span></a>
	  <li class="nav-item active">
		<a class="nav-link" href="tampil_data2.php">Hasil Input Data Pengunjung <span class="sr-only">(current)</span></a>
      </li>
                    </ul>
                </div>
            </div>
        </nav>
		<main role="main" class="container">

  <div class="starter-template">
    <h1>Selamat Datang <?php echo $_SESSION['nama']; ?></h1>
    <h1>
      <!-- Masthead-->
    </h1>
  </div>

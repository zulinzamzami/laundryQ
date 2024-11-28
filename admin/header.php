<!DOCTYPE html>
<html>
<head>
<title>LAUNDRY Q</title>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="icon" type="image/png" href ="../iconl.png">
<style>
body {
  background-image: url("../image/bglaundry.jpg");
}
</style>
</head>
<body>


<?php
session_start();
if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
}
?>
<nav class="navbar navbar-inverse" style="border-radius: 0px">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" ariaexpanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php"> LAUNDRY Q</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="active"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
<li><a href="pelanggan.php"><i class="glyphicon glyphicon-user"></i> Pelanggan</a></li>
<li><a href="transaksi.php"><i class="glyphicon glyphicon-random"></i> Transaksi</a></li>
<li><a href="laporan.php"><i class="glyphicon glyphicon-list-alt"></i> Laporan</a></li>

<li class="dropdown"> 
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<i class="glyphicon glyphicon-wrench"></i> Pengaturan <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="harga.php"><i class="dorpdown-item glyphicon glyphicon-usd"></i> Pengaturan Harga</a></li>
        <li><a href="ganti_password.php"><i class="dropdown-item glyphicon glyphicon-lock"></i> Ganti Password</a></li>
    </ul>
</li>
<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><p class="navbar-text">Halo, <b> <?php echo $_SESSION['username']; ?></b> !</p></li>
</ul>
</div>
</div>
</nav>


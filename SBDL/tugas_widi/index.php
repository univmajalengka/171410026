<!DOCTYPE html>
<html>
<head>
	<title>Sistem Rekapitulasi Nilai</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
		<nav class="navbar navbar-info navabar-fixed-top" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Informatika</a>
			</div>
			<div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="?halaman=default">Home</a></li>
					<li><a href="?halaman=data_guru">Data Guru</a></li>
					<li><a href="?halaman=data_kelas">Data Kelas</a></li>
					<li><a href="?halaman=data_mata_diklat">Data Mata Diklat</a></li>
					<li><a href="?halaman=data_nilai_mhs">Data Nilai Mahasiswa</a></li>
					<li><a href="?halaman=data_siswa">Data Siswa</a></li>
				</ul>
			</div>
		</nav>
			<div class="container">
			
		<div>
			<div class="jumbotron">
			<?php
			include("halaman.php");
			?>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<div id="footer"><marquee>Created By Widyi Nadiah Febrianti</marquee></div>
				</div>
			</div>
		</div>
</body>
</html>
<?php
include'koneksi.php';
$query=("UPDATE data_mata_diklat SET kode_md='$_POST[kode_md]', tingkat='$_POST[tingkat]', semester='$_POST[semester]', jenis_md='$_POST[jenis_md]', mata_diklat='$_POST[mata_diklat]', nip='$_POST[nip]'");
$lihat=mysqli_query($koneksi, $query) or die('Error, query failed.'.mysqli_error());
	echo "<script>alert('Data Mata Diklat Berhasil Diupdate.');</script>";
	echo "<meta http-equiv='refresh' content='1, url=?halaman=data_mata_diklat'>";
?>
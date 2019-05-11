<?php
include'koneksi.php';
$query=("UPDATE data_kelas SET id='$_POST[id]', thn_ajar='$_POST[thn_ajar]', tingkat='$_POST[tingkat]', nama_kelas='$_POST[nama_kelas]', wali_kelas='$_POST[wali_kelas]', nis='$_POST[nis]'");
$lihat=mysqli_query($koneksi, $query) or die('Error, query failed.'.mysqli_error());
	echo "<script>alert('Data Kelas Berhasil Diupdate.');</script>";
	echo "<meta http-equiv='refresh' content='1, url=?halaman=data_kelas'>";
?>
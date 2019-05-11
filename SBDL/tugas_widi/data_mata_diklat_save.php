<?php
include'koneksi.php';
$query=("INSERT INTO data_mata_diklat (kode_md,tingkat,semester,jenis_md,mata_diklat,nip) 
VALUES ('$_POST[kode_md]', 
'$_POST[tingkat]', 
'$_POST[semester]', 
'$_POST[jenis_md]', 
'$_POST[mata_diklat]', 
'$_POST[nip]')");
$lihat=mysqli_query($koneksi, $query) or die('Error, query failed.' .mysqli_error());
	echo "<script>alert('Data Mata Diklat Berhasil Disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_mata_diklat'>";
?>

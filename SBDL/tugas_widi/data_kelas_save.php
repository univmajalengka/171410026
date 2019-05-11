<?php
include'koneksi.php';
$query=("INSERT INTO data_kelas (id_kelas,thn_ajar,tingkat,nama_kelas,wali_kelas,nis) 
VALUES ('$_POST[id_kelas]', 
'$_POST[thn_ajar]', 
'$_POST[tingkat]', 
'$_POST[nama_kelas]', 
'$_POST[wali_kelas]', 
'$_POST[nis]')");
$lihat=mysqli_query($koneksi, $query) or die('Error, query failed.' .mysqli_error());
	echo "<script>alert('Data Kelas Berhasil Disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_kelas'>";
?>

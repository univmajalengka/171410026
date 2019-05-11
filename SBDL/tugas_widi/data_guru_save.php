<?php
include'koneksi.php';
$query=("INSERT INTO data_guru (nip,nama,alamat,no_hp,jabatan,status) 
VALUES ('$_POST[nip]', 
'$_POST[nama]', 
'$_POST[alamat]', 
'$_POST[no_hp]', 
'$_POST[jabatan]', 
'$_POST[status]')");
$lihat=mysqli_query($koneksi, $query) or die('Error, query failed.' .mysqli_error());
	echo "<script>alert('Data Guru Berhasil Disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_guru'>";
?>

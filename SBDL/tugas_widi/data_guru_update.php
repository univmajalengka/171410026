<?php
include'koneksi.php';
$query=("UPDATE data_guru SET nip='$_POST[nip]', nama='$_POST[nama]', alamat='$_POST[alamat]', no_hp='$_POST[no_hp]', jabatan='$_POST[jabatan]', status='$_POST[status]'");
$lihat=mysqli_query($koneksi, $query) or die('Error, query failed.'.mysqli_error());
	echo "<script>alert('Data Guru Berhasil Diupdate.');</script>";
	echo "<meta http-equiv='refresh' content='1, url=?halaman=data_guru'>";
?>
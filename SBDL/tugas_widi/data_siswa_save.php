<?php
include'koneksi.php';
$query=("INSERT INTO data_siswa (nip,nama,alamat,no_hp,tmp_lahir,tgl_lahir,agama,jk,thn_masuk,status) 
VALUES ('$_POST[nip]', 
'$_POST[nama]', 
'$_POST[alamat]', 
'$_POST[no_hp]', 
'$_POST[tmp_lahir]',
'$_POST[tgl_lahir]', 
'$_POST[agama]', 
'$_POST[jk]', 
'$_POST[thn_masuk]',  
'$_POST[status]')");
$lihat=mysqli_query($koneksi, $query) or die('Error, query failed.' .mysqli_error());
	echo "<script>alert('Data Siswa Berhasil Disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_siswa'>";
?>

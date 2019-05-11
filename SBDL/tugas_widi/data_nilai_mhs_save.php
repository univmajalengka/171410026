<?php
include'koneksi.php';
$query=("INSERT INTO data_nilai_mhs (id_nilai,thn_ajar,tingkat,nis,kode_md,nilai) 
VALUES ('$_POST[id_nilai]', 
'$_POST[thn_ajar]', 
'$_POST[tingkat]', 
'$_POST[nis]', 
'$_POST[kode_md]', 
'$_POST[nilai]')");
$lihat=mysqli_query($koneksi, $query) or die('Error, query failed.' .mysqli_error());
	echo "<script>alert('Data Nilai Mahasiswa Berhasil Disimpan.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_nilai_mhs'>";
?>

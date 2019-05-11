<?php
include'koneksi.php';
$query=("UPDATE data_nilai_mhs SET id='$_POST[id]', thn_ajar='$_POST[thn_ajar]', tingkat='$_POST[tingkat]', nis='$_POST[nis]', kode_md='$_POST[kode_md]', nilai='$_POST[nilai]'");
$lihat=mysqli_query($koneksi, $query) or die('Error, query failed.'.mysqli_error());
	echo "<script>alert('Data Nilai Mahasiswa Berhasil Diupdate.');</script>";
	echo "<meta http-equiv='refresh' content='1, url=?halaman=data_nilai_mhs'>";
?>
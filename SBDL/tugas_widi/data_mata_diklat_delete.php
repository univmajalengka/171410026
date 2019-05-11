<?php
include 'koneksi.php';
$kode_md = $_GET['kode_md'];
echo"<p>Redirect....</p>";
$query = "DELETE FROM data_mata_diklat WHERE kode_md='$kode_md'";
mysqli_query($koneksi, $query) or die ('Error, query failed. '.mysqli_error($koneksi));
	echo "<script>alert('Data Mata Diklat Berhasil Dihapus.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_mata_diklat'>";
?>
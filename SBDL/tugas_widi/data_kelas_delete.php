<?php
include 'koneksi.php';
$id_kelas = $_GET['id_kelas'];
echo"<p>Redirect....</p>";
$query = "DELETE FROM data_kelas WHERE id_kelas='$id_kelas'";
mysqli_query($koneksi, $query) or die ('Error, query failed. '.mysqli_error($koneksi));
	echo "<script>alert('Data Kelas Berhasil Dihapus.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_kelas'>";
?>
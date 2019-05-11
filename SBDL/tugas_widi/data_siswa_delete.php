<?php
include 'koneksi.php';
$nip = $_GET['nip'];
echo"<p>Redirect....</p>";
$query = "DELETE FROM data_siswa WHERE nip='$nip'";
mysqli_query($koneksi, $query) or die ('Error, query failed. '.mysqli_error($koneksi));
	echo "<script>alert('Data Siswa Berhasil Dihapus.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_siswa'>";
?>
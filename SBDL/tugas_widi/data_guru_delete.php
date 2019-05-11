<?php
include 'koneksi.php';
$nip = $_GET['nip'];
echo"<p>Redirect....</p>";
$query = "DELETE FROM data_guru WHERE nip='$nip'";
mysqli_query($koneksi, $query) or die ('Error, query failed. '.mysqli_error($koneksi));
	echo "<script>alert('Data Guru Berhasil Dihapus.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_guru'>";
?>
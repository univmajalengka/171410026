<?php
include 'koneksi.php';
$nip = $_GET['nip'];
echo"<p>Redirect....</p>";
$query = "DELETE FROM data_nilai_mhs WHERE id='$id'";
mysqli_query($koneksi, $query) or die ('Error, query failed. '.mysqli_error($koneksi));
	echo "<script>alert('Data Nilai Mahasiswa Berhasil Dihapus.');</script>";
	echo "<meta http-equiv='refresh' content='1; url=?halaman=data_nilai_mhs'>";
?>
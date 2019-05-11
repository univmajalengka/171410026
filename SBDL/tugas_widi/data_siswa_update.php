<?php
include'koneksi.php';
$query=("UPDATE data_siswa SET nip='$_POST[nip]', nama='$_POST[nama]', alamat='$_POST[alamat]', no_hp='$_POST[no_hp]', tmp_lahir='$_POST[tmp_lahir]', tgl_lahir='$_POST[tgl_lahir]', agama='$_POST[agama]', jk='$_POST[jk]', thn_masuk='$_POST[thn_masuk]', status='$_POST[status]'");
$lihat=mysqli_query($koneksi, $query) or die('Error, query failed.'.mysqli_error());
	echo "<script>alert('Data Siswa Berhasil Diupdate.');</script>";
	echo "<meta http-equiv='refresh' content='1, url=?halaman=data_siswa'>";
?>
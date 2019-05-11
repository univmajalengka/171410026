<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_rkptls_nilai";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
	echo 'Gagal melakukan ke Database : '.mysqli_connect_error();
}
?>
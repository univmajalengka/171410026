<?php
$halaman=(isset($_GET['halaman'])) ?$_GET['halaman']:"default";
switch($halaman){
	case'data_guru' 				: include"data_guru.php";break;
	case'data_guru_edit'			: include"data_guru_edit.php";break;
	case'data_guru_delete' 			: include"data_guru_delete.php";break;
	case'data_guru_save' 			: include"data_guru_save.php";break;
	case'data_guru_tambah' 			: include"data_guru_tambah.php";break;
	case'data_guru_update'			: include"data_guru_update.php";break;
	case'data_kelas' 				: include"data_kelas.php";break;
	case'data_kelas_edit'			: include"data_kelas_edit.php";break;
	case'data_kelas_delete'			: include"data_kelas_delete.php";break;
	case'data_kelas_save'			: include"data_kelas_save.php";break;
	case'data_kelas_tambah' 		: include"data_kelas_tambah.php";break;
	case'data_kelas_update'			: include"data_kelas_update.php";break;
	case'data_mata_diklat' 			: include"data_mata_diklat.php";break;
	case'data_mata_diklat_edit' 	: include"data_mata_diklat_edit.php";break;
	case'data_mata_diklat_delete' 	: include"data_mata_diklat_delete.php";break;
	case'data_mata_diklat_save' 	: include"data_mata_diklat_save.php";break;
	case'data_mata_diklat_tambah' 	: include"data_mata_diklat_tambah.php";break;
	case'data_mata_diklat_update' 	: include"data_mata_diklat_update.php";break;
	case'data_nilai_mhs' 			: include"data_nilai_mhs.php";break;
	case'data_nilai_mhs_edit' 		: include"data_nilai_mhs_edit.php";break;
	case'data_nilai_mhs_delete' 	: include"data_nilai_mhs_delete.php";break;
	case'data_nilai_mhs_save' 		: include"data_nilai_mhs_save.php";break;
	case'data_nilai_mhs_tambah' 	: include"data_nilai_mhs_tambah.php";break;
	case'data_nilai_mhs_update' 	: include"data_nilai_mhs_update.php";break;
	case'data_siswa' 				: include"data_siswa.php";break;
	case'data_siswa_edit' 			: include"data_siswa_edit.php";break;
	case'data_siswa_delete' 		: include"data_siswa_delete.php";break;
	case'data_siswa_save' 			: include"data_siswa_save.php";break;
	case'data_siswa_tambah' 		: include"data_siswa_tambah.php";break;
	case'data_siswa_update' 		: include"data_siswa_update.php";break;
	case'default' 					: include"home.php";break;
}
?>
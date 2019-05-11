<?php
include"koneksi.php";
$query=("SELECT * FROM data_kelas WHERE id='$_GET[id]'");
$galeri = mysqli_query($koneksi, $query) or die ('Error, query failed. '.mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Data Kelas</h3>
<form class="form-horizontal" method="post" action="?halaman=data_kelas_up" enctype="multipart/form.data">
	<input type="hidden" name="id_kelas" value="<?php echo"$m[id_kelas]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tahun Ajar : </label>
		<div class="col-sm-4">
		<input type="text" name="thn_ajar" class="form-control" placeholder="Masukan Tahun Ajar" value="<?php echo"$m[thn_ajar]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tingkat : </label>
		<div class="col-sm-4">
		<input type="text" name="tingkat" class="form-control" placeholder="Masukan Tingkat" value="<?php echo"$m[tingkat]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama Kelas : </label>
		<div class="col-sm-4">
		<input type="text" name="nama_kelas" class="form-control" placeholder="Masukan Nama Kelas" value="<?php echo"$m[nama_kelas]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Wali Kelas : </label>
		<div class="col-sm-4">
		<input type="text" name="wali_kelas" class="form-control" placeholder="Masukan Wali Kelas" value="<?php echo"$m[wali_kelas]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">NIS : </label>
		<div class="col-sm-4">
		<input type="text" name="nis" class="form-control" placeholder="Masukan NIS" value="<?php echo"$m[nis]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label"></label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_data_kelas" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=data_kelas" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
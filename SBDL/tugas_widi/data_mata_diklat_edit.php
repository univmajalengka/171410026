<?php
include"koneksi.php";
$query=("SELECT * FROM data_mata_diklat WHERE kode_md='$_GET[kode_md]'");
$galeri = mysqli_query($koneksi, $query) or die ('Error, query failed. '.mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Data Mata Diklat</h3>
<form class="form-horizontal" method="post" action="?halaman=data_mata_diklat_up" enctype="multipart/form.data">
	<input type="hidden" name="kode_md" value="<?php echo"$m[kode_md]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tingkat: </label>
		<div class="col-sm-4">
		<input type="text" name="tingkat" class="form-control" placeholder="Masukan Tingkat" value="<?php echo"$m[tingkat]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Semester : </label>
		<div class="col-sm-4">
		<input type="text" name="semester" class="form-control" placeholder="Masukan Semester" value="<?php echo"$m[semester]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jenis MD : </label>
		<div class="col-sm-4">
		<input type="text" name="jenis_md" class="form-control" placeholder="Masukan Jenis MD" value="<?php echo"$m[jenis_md]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Mata Diklat : </label>
		<div class="col-sm-4">
		<input type="text" name="mata_diklat" class="form-control" placeholder="Masukan Mata Diklat" value="<?php echo"$m[mata_diklat]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">NIP : </label>
		<div class="col-sm-4">
		<input type="text" name="nip" class="form-control" placeholder="Masukan NIP" value="<?php echo"$m[nip]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label"></label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_data_mata_diklat" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=data_mata_diklat" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
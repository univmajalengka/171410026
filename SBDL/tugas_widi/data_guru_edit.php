<?php
include"koneksi.php";
$query=("SELECT * FROM data_guru WHERE nip='$_GET[nip]'");
$galeri = mysqli_query($koneksi, $query) or die ('Error, query failed. '.mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Data Guru</h3>
<form class="form-horizontal" method="post" action="?halaman=data_guru_up" enctype="multipart/form.data">
	<input type="hidden" name="nip" value="<?php echo"$m[nip]";?>"/>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama : </label>
		<div class="col-sm-4">
		<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" value="<?php echo"$m[nama]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Alamat : </label>
		<div class="col-sm-4">
		<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo"$m[alamat]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">No HP : </label>
		<div class="col-sm-4">
		<input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" value="<?php echo"$m[no_hp]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jabatan : </label>
		<div class="col-sm-4">
		<input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" value="<?php echo"$m[jabatan]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Status : </label>
		<div class="col-sm-4">
		<input type="text" name="status" class="form-control" placeholder="Masukan Status" value="<?php echo"$m[status]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label"></label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_data_guru" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=data_guru" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
<?php
include"koneksi.php";
$query=("SELECT * FROM data_siswa WHERE id_nilai='$_GET[id_nilai]'");
$galeri = mysqli_query($koneksi, $query) or die ('Error, query failed. '.mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Data Siswa</h3>
<form class="form-horizontal" method="post" action="?halaman=data_siswa_update" enctype="multipart/form.data">
	<input type="hidden" name="id_nilai" value="<?php echo"$m[id_nilai]";?>"/>
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
		<label class="col-sm-3 control-label">Tempat Lahir : </label>
		<div class="col-sm-4">
		<input type="text" name="tmp_lahir" class="form-control" placeholder="Masukan Tempat Lahir" value="<?php echo"$m[tmp_lahir]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal Lahir : </label>
		<div class="col-sm-4">
		<input type="text" name="tgl_lahir" class="form-control" placeholder="Masukan Tanggal Lahir" value="<?php echo"$m[tgl_lahir]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Agama : </label>
		<div class="col-sm-4">
		<input type="text" name="agama" class="form-control" placeholder="Masukan Agama" value="<?php echo"$m[agama]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jenis Kelamin : </label>
		<div class="col-sm-4">
		<input type="text" name="jk" class="form-control" placeholder="Masukan Jenis Kelamin" value="<?php echo"$m[jk]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tahun Masuk : </label>
		<div class="col-sm-4">
		<input type="text" name="thn_masuk" class="form-control" placeholder="Masukan Tahun Masuk" value="<?php echo"$m[thn_masuk]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label"></label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_data_siswa" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=data_siswa" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
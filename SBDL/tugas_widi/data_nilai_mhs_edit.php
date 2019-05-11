<?php
include"koneksi.php";
$query=("SELECT * FROM data_nilai_mhs WHERE id_nilai='$_GET[id_nilai]'");
$galeri = mysqli_query($koneksi, $query) or die ('Error, query failed. '.mysqli_error());
$m=mysqli_fetch_array($galeri);
?>

<h3 align="center">Edit Data Nilai Mahasiswa</h3>
<form class="form-horizontal" method="post" action="?halaman=data_nilai_mhs_update" enctype="multipart/form.data">
	<input type="hidden" name="id_nilai" value="<?php echo"$m[id_nilai]";?>"/>
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
		<label class="col-sm-3 control-label">NIS : </label>
		<div class="col-sm-4">
		<input type="text" name="nis" class="form-control" placeholder="Masukan NIS" value="<?php echo"$m[nis]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode MD : </label>
		<div class="col-sm-4">
		<input type="text" name="kode_md" class="form-control" placeholder="Masukan Kode MD" value="<?php echo"$m[kode_md]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nilai : </label>
		<div class="col-sm-4">
		<input type="text" name="nilai" class="form-control" placeholder="Masukan Nilai" value="<?php echo"$m[nilai]";?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label"></label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_data_nilai_mhs" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?halaman=data_nilai_mhs" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
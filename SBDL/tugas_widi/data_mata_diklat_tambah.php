<h3 align="center">Tambah Data Mata Diklat</h3>
<form class="form-horizontal" method="post" action="?halaman=data_mata_diklat_save" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode MD : </label>
		<div class="col-sm-4">
		<input type="text" name="kode_md" class="form-control" placeholder="Masukan Kode MD" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tingkat : </label>
		<div class="col-sm-4">
		<input type="text" name="tingkat" class="form-control" placeholder="Masukan Tingkat" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Semester : </label>
		<div class="col-sm-4">
		<input type="text" name="semester" class="form-control" placeholder="Masukan Semester" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jenis MD : </label>
		<div class="col-sm-4">
		<input type="text" name="jenis_md" class="form-control" placeholder="Masukan Jenis MD" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Mata Diklat : </label>
		<div class="col-sm-4">
		<input type="text" name="mata_diklat" class="form-control" placeholder="Masukan Mata Diklat" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">NIP : </label>
		<div class="col-sm-4">
		<input type="text" name="nip" class="form-control" placeholder="Masukan NIP" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label"></label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_data_mata_diklat" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?>halaman=data_mata_diklat" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
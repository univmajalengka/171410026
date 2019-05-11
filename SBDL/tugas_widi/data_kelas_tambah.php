<h3 align="center">Tambah Data Kelas</h3>
<form class="form-horizontal" method="post" action="?halaman=data_kelas_save" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">ID Kelas : </label>
		<div class="col-sm-4">
		<input type="text" name="id_kelas" class="form-control" placeholder="Masukan ID Kelas" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tahun Ajaran : </label>
		<div class="col-sm-4">
		<input type="text" name="thn_ajaran" class="form-control" placeholder="Masukan Tahun Ajaran" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tingkat : </label>
		<div class="col-sm-4">
		<input type="text" name="tingkat" class="form-control" placeholder="Masukan Tingkat" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama Kelas : </label>
		<div class="col-sm-4">
		<input type="text" name="nama_kelas" class="form-control" placeholder="Masukan Nama Kelas" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Wali Kelas : </label>
		<div class="col-sm-4">
		<input type="text" name="wali_kelas" class="form-control" placeholder="Masukan Wali Kelas" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">NIS : </label>
		<div class="col-sm-4">
		<input type="text" name="nis" class="form-control" placeholder="Masukan NIS" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label"></label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_data_guru" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?>halaman=data_guru" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
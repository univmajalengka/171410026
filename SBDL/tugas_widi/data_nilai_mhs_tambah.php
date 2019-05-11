<h3 align="center">Tambah Data Nilai Mahasiswa</h3>
<form class="form-horizontal" method="post" action="?halaman=data_nilai_mhs_save" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">Id Nilai : </label>
		<div class="col-sm-4">
		<input type="text" name="id_nilai" class="form-control" placeholder="Masukan Id Nilai" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tahun Ajar : </label>
		<div class="col-sm-4">
		<input type="text" name="thn_ajar" class="form-control" placeholder="Masukan Tahun Ajar" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tingkat : </label>
		<div class="col-sm-4">
		<input type="text" name="tingkat" class="form-control" placeholder="Masukan Tingkat" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">NIS : </label>
		<div class="col-sm-4">
		<input type="text" name="nis" class="form-control" placeholder="Masukan NIS" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Kode MD : </label>
		<div class="col-sm-4">
		<input type="text" name="kode_md" class="form-control" placeholder="Masukan Kode MD" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nilai : </label>
		<div class="col-sm-4">
		<input type="text" name="nilai" class="form-control" placeholder="Masukan Nilai" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label"></label>
		<div class="col-sm-6">
		<input type="submit" name="tambah_data_nilai_mhs" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?>halaman=data_nilai_mhs" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
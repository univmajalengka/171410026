<h3 align="center">Tambah Data Guru</h3>
<form class="form-horizontal" method="post" action="?halaman=data_guru_save" enctype="multipart/form-data">
	<div class="form-group">
		<label class="col-sm-3 control-label">NIP : </label>
		<div class="col-sm-4">
		<input type="text" name="nip" class="form-control" placeholder="Masukan NIP" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Nama : </label>
		<div class="col-sm-4">
		<input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Alamat : </label>
		<div class="col-sm-4">
		<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">No HP : </label>
		<div class="col-sm-4">
		<input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jabatan : </label>
		<div class="col-sm-4">
		<input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Status : </label>
		<div class="col-sm-4">
		<input type="text" name="status" class="form-control" placeholder="Masukan Status" required>
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
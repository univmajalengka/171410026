<h3 align="center">Tambah Data Siswa</h3>
<form class="form-horizontal" method="post" action="?halaman=data_siswa_save" enctype="multipart/form-data">
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
		<label class="col-sm-3 control-label">Tempat Lahir : </label>
		<div class="col-sm-4">
		<input type="text" name="tmp_lahir" class="form-control" placeholder="Masukan Tempat Lahir" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tanggal Lahir : </label>
		<div class="col-sm-4">
		<input type="text" name="tgl_lahir" class="form-control" placeholder="Masukan Tanggal Lahir" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Agama : </label>
		<div class="col-sm-4">
		<input type="text" name="agama" class="form-control" placeholder="Masukan Agama" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Jenis Kelamin : </label>
		<div class="col-sm-4">
		<input type="text" name="jk" class="form-control" placeholder="Masukan Jenis Kelamin" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-3 control-label">Tahun Masuk : </label>
		<div class="col-sm-4">
		<input type="text" name="thn_masuk" class="form-control" placeholder="Masukan Tahun Masuk" required>
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
		<input type="submit" name="tambah_data_siswa" class="btn btn-sm btn-primary" value="Simpan">
		<a href="?>halaman=data_siswa" class="btn btn-sm btn-danger">Batal</a>
		</div>
	</div>
</form>
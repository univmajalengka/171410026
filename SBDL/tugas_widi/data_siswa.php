<?php
include("koneksi.php");
?>
<h3 align="center">Data Siswa</h3>
<a href="?halaman=data_siswa_tambah" class="btn btn-info btn-sm">Tambah Siswa</a><br/><br/>
<div class="table-responsive">
<table class="table table-bordered table-hove">
	<tr>
		<th><center>NIS</center></th>
		<th><center>Nama</center></th>
		<th><center>Alamat</center></th>
		<th><center>No Hp</center></th>
		<th><center>Tempat Lahir</center></th>
		<th><center>Tanggal Lahir</center></th>
		<th><center>Agama</center></th>
		<th><center>Jenis Kelamin</center></th>
		<th><center>Tahun Masuk</center></th>
		<th><center>Aksi</center></th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_siswa");
	$lihat = mysqli_query($koneksi, $query) or die('Error, query failed,'.mysqli_error());
	$jml_data=mysqli_fetch_array($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[nis]";?></td>
		<td><?php echo"$r[nama]";?></td>
		<td><?php echo"$r[alamat]";?></td>
		<td><?php echo"$r[no_hp]";?></td>
		<td><?php echo"$r[tmp_lahir]";?></td>
		<td><?php echo"$r[tgl_lahir]";?></td>
		<td><?php echo"$r[agama]";?></td>
		<td><?php echo"$r[jk]";?></td>
		<td><?php echo"$r[thn_masuk]";?></td>
		
		<td align="center">
			<a href="?halaman=data_siswa_edit&nis=<?php echo"$r[nis]";?>" title="Edit Data" 
			class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman=data_siswa_delete&nis=<?php echo"$r[nis]";?>" onclick="return confirm('Apakah anda akan menghapus data ini ? Klik OK untuk menghapus')" title="Hapus Data" 
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	</tr>
<?php
} ?>
</table>
</div>
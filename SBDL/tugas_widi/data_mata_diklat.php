<?php
include("koneksi.php");
?>
<h3 align="center">Data Mata Diklat</h3>
<a href="?halaman=data_mata_diklat_tambah" class="btn btn-info btn-sm">Tambah Mata Diklat</a><br/><br/>
<div class="table-responsive">
<table class="table table-bordered table-hove">
	<tr>
		<th><center>Kode MD</center></th>
		<th><center>Tingkat</center></th>
		<th><center>Semester</center></th>
		<th><center>Jenis MD</center></th>
		<th><center>Mata Diklat</center></th>
		<th><center>NIP</center></th>
		<th><center>Aksi</center></th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_mata_diklat");
	$lihat = mysqli_query($koneksi, $query) or die('Error, query failed,'.mysqli_error());
	$jml_data=mysqli_fetch_array($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[kode_md]";?></td>
		<td><?php echo"$r[tingkat]";?></td>
		<td><?php echo"$r[semester]";?></td>
		<td><?php echo"$r[jenis_md]";?></td>
		<td><?php echo"$r[mata_diklat]";?></td>
		<td><?php echo"$r[nip]";?></td>
		<td align="center">
			<a href="?halaman=data_mata_diklat_edit&kode_md=<?php echo"$r[kode_md]";?>" title="Edit Data" 
			class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman=data_mata_diklat_delete&kode_md=<?php echo"$r[kode_md]";?>" onclick="return confirm('Apakah anda akan menghapus data ini ? Klik OK untuk menghapus')" title="Hapus Data" 
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	</tr>
<?php
} ?>
</table>
</div>
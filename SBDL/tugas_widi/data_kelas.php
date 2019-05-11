<?php
include("koneksi.php");
?>
<h3 align="center">Data Kelas</h3>
<a href="?halaman=data_kelas_tambah" class="btn btn-info btn-sm">Tambah Kelas</a><br/><br/>
<div class="table-responsive">
<table class="table table-bordered table-hove">
	<tr>
		<th><center>ID Kelas</center></th>
		<th><center>Tahun Ajar</center></th>
		<th><center>Tingkat</center></th>
		<th><center>Nama Kelas</center></th>
		<th><center>Wali Kelas</center></th>
		<th><center>NIS</center></th>
		<th><center>Aksi</center></th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_kelas");
	$lihat = mysqli_query($koneksi, $query) or die('Error, query failed,'.mysqli_error());
	$jml_data=mysqli_fetch_array($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[id_kelas]";?></td>
		<td><?php echo"$r[thn_ajar]";?></td>
		<td><?php echo"$r[tingkat]";?></td>
		<td><?php echo"$r[nama_kelas]";?></td>
		<td><?php echo"$r[wali_kelas]";?></td>
		<td><?php echo"$r[nis]";?></td>
		<td align="center">
			<a href="?halaman=data_kelas_edit&id_kelas=<?php echo"$r[id_kelas]";?>" title="Edit Data" 
			class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman=data_guru_delete&id_kelas=<?php echo"$r[id_kelas]";?>" onclick="return confirm('Apakah anda akan menghapus data ini ? Klik OK untuk menghapus')" title="Hapus Data" 
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	</tr>
<?php
} ?>
</table>
</div>
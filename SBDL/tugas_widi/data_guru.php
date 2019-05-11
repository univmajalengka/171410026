<?php
include("koneksi.php");
?>
<h3 align="center">Data Guru</h3>
<a href="?halaman=data_guru_tambah" class="btn btn-info btn-sm">Tambah Guru</a><br/><br/>
<div class="table-responsive">
<table class="table table-bordered table-hove">
	<tr>
		<th><center>NIP</center></th>
		<th><center>Nama</center></th>
		<th><center>Alamat</center></th>
		<th><center>No Hp</center></th>
		<th><center>Jabatan</center></th>
		<th><center>Status</center></th>
		<th><center>Aksi</center></th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_guru");
	$lihat = mysqli_query($koneksi, $query) or die('Error, query failed,'.mysqli_error());
	$jml_data=mysqli_fetch_array($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[nip]";?></td>
		<td><?php echo"$r[nama]";?></td>
		<td><?php echo"$r[alamat]";?></td>
		<td><?php echo"$r[no_hp]";?></td>
		<td><?php echo"$r[jabatan]";?></td>
		<td><?php echo"$r[status]";?></td>
		<td align="center">
			<a href="?halaman=data_guru_edit&nip=<?php echo"$r[nip]";?>" title="Edit Data" 
			class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman=data_guru_delete&nip=<?php echo"$r[nip]";?>" onclick="return confirm('Apakah anda akan menghapus data ini ? Klik OK untuk menghapus')" title="Hapus Data" 
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	</tr>
<?php
} ?>
</table>
</div>
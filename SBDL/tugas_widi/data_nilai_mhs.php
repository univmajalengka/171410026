<?php
include("koneksi.php");
?>
<h3 align="center">Data Nilai Mahasiswa</h3>
<a href="?halaman=data_nilai_mhs_tambah" class="btn btn-info btn-sm">Tambah Nilai Mahasiswa</a><br/><br/>
<div class="table-responsive">
<table class="table table-bordered table-hove">
	<tr>
		<th><center>ID Nilai</center></th>
		<th><center>Tahun Ajar</center></th>
		<th><center>Tingkat</center></th>
		<th><center>Nis</center></th>
		<th><center>Kode MD</center></th>
		<th><center>Nilai</center></th>
		<th><center>Aksi</center></th>
	</tr>
<?php
	$no=1;
	$query=("SELECT * FROM data_nilai_mhs");
	$lihat = mysqli_query($koneksi, $query) or die('Error, query failed,'.mysqli_error());
	$jml_data=mysqli_fetch_array($lihat);
	while($r=mysqli_fetch_array($lihat)){
?>
	<tr>
		<td><?php echo"$r[id_nilai]";?></td>
		<td><?php echo"$r[thn_ajar]";?></td>
		<td><?php echo"$r[tingkat]";?></td>
		<td><?php echo"$r[nis]";?></td>
		<td><?php echo"$r[kode_md]";?></td>
		<td><?php echo"$r[nilai]";?></td>
		<td align="center">
			<a href="?halaman=data_nilai_mhs_edit&id=<?php echo"$r[id]";?>" title="Edit Data" 
			class="btn btn-info btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="?halaman=data_guru_delete&id=<?php echo"$r[id]";?>" onclick="return confirm('Apakah anda akan menghapus data ini ? Klik OK untuk menghapus')" title="Hapus Data" 
			class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
	</tr>
<?php
} ?>
</table>
</div>
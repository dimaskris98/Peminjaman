<!DOCTYPE html>
<html>
<head>
<br>
	<title>detail </title>
	<style>
			.separuh {
				width : 30%;
			}
		</style>
	
</head>
<body>
	<center>
		<h3>Detail Data Peminjaman</h3>
		
	</center>
	<?php foreach($cii as $row){ ?>
	
		Id Peminjam
				<td><input class="form-control separuh" placeholder="ID_Peminjam" type="varchar" name="ID_Peminjam" value="<?php echo $row->ID_Peminjam ?>" autofocus>
				<br>
		NIM
					<td><input class="form-control separuh" placeholder="NIM" type="varchar" name="NIM" value="<?php echo $row->NIM ?>" autofocus>
				<br>
		Nama Pengguna
					<td><input class="form-control separuh" placeholder="Nama_Pengguna" type="varchar" name="Nama_Pengguna" value="<?php echo $row->Nama_Pengguna ?>" autofocus>
				<br>
		Nama Gedung
					<td><input class="form-control separuh" placeholder="Nama_Gedung" type="varchar" name="Nama_Gedung" value="<?php echo $row->Nama_Gedung ?>" autofocus>
				<br>
		Keperluan
					<td><input class="form-control separuh" placeholder="Keperluan" type="varchar" name="Keperluan" value="<?php echo $row->Keperluan ?>" autofocus>
				<br>
		Tanggal Pinjam
					<td><input class="form-control separuh" placeholder="Tanggal_pinjam" type="varchar" name="Tanggal_pinjam" value="<?php echo $row->Tanggal_pinjam ?>" autofocus>
				<br>
					
		Lama Pinjam
					<td><input class="form-control separuh" placeholder="Lama_pinjam" type="varchar" name="Lama_pinjam" value="<?php echo $row->Lama_pinjam ?>" autofocus>
				<br>
					
		Status
					<td><input class="form-control separuh" placeholder="Status" type="varchar" name="Status" value="<?php echo $row->Status ?>" autofocus>
				<br>
		Tambahan
					<td><input class="form-control separuh" placeholder="Tambahan" type="varchar" name="Tambahan" value="<?php echo $row->Tambahan ?>" autofocus>
				
					<br><br>
	<?php } ?>

<p align="center">
			<table class="table table-striped">
				<tr>
				
					<th>Nama Fasilitas</th>
					<th>Jumlah</th>
					<th>Keterangan</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td><?php echo $data->Nama_Fasilitas ?></td>
			<td><?php echo $data->Jumlah ?></td>
			<td><?php echo $data->Keterangan ?></td>
		
		</tr>
		<?php } ?>
				
			</table>


</body>

</html>
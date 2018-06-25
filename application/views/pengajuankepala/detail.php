<!DOCTYPE html>
<html>
<head>
	<title>detail </title>
	<style>
			.separuh {
				width : 30%;
			}
		</style>
	
</head>
<body>
<br>
	<center>
		<h3>Detail Data Peminjaman</h3>
		
	</center>
	<?php foreach($cii as $row){ ?>
	
		<tr>
				<td>Id Peminjam</td>
				<td>
					<input class="form-control separuh" placeholder="ID_Peminjam" type="varchar" name="ID_Peminjam" value="<?php echo $row->ID_Peminjam ?>" autofocus>
					
			<br>
				</td>
		
		</tr>
		<tr>
				<td>NIM</td>
				<td><input class="form-control separuh" placeholder="NIM" type="varchar" name="NIM" value="<?php echo $row->NIM ?>" autofocus>
					
			<br>
				</td>
		
		</tr>
			<tr>
				<td>Nama Pengguna</td>
				
				<td><input class="form-control separuh" placeholder="Nama Pengguna" type="varchar" name="Nama Pengguna" value="<?php echo $row->Nama_Pengguna ?>" autofocus>
					
			<br>
					
				</td>
			</tr>
			<tr>
				<td>Keperluan</td>
				<td><input class="form-control separuh" placeholder="Keperluan" type="varchar" name="Keperluan" value="<?php echo $row->Keperluan ?>" autofocus>
					
			<br>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td><input class="form-control separuh" placeholder="Tanggal Pinjam" type="varchar" name="Tanggal Pinjam" value="<?php echo $row->Tanggal_pinjam ?>" autofocus>
					
			<br>
			</tr>
			<tr>
				<td>Lama Pinjam</td>
				<td><input class="form-control separuh" placeholder="Lama Pinjam" type="varchar" name="Lama Pinjam" value="<?php echo $row->Lama_pinjam ?>" autofocus>
					
			<br>
		Status
					<td><input class="form-control separuh" placeholder="Status" type="varchar" name="Status" value="<?php echo $row->Status ?>" autofocus>
					
			<br>
		Tambahan
					<td><input class="form-control separuh" placeholder="Tambahan" type="varchar" name="Tambahan" value="<?php echo $row->Tambahan ?>" autofocus>
					
			<br>
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
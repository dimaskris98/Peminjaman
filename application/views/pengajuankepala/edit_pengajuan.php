<!DOCTYPE html>
<html>
<head>
	<title>edit </title>
	
</head>
<body>
<br>
	<center>
		<h3>Edit Data Peminjaman</h3>
		
	</center>
	<?php foreach($ci as $row){ ?>
	<form action="<?php echo base_url(). 'menukepala/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
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
				
				<td><input class="form-control separuh" placeholder="Nama Pengguna" type="varchar" name="Nama_Pengguna" value="<?php echo $row->Nama_Pengguna ?>" autofocus>
					
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
				<td><input class="form-control separuh" placeholder="Tanggal Pinjam" type="varchar" name="Tanggal_pinjam" value="<?php echo $row->Tanggal_pinjam ?>" autofocus>
					
			<br>
			</tr>
			<tr>
				<td>Lama Pinjam</td>
				<td><input class="form-control separuh" placeholder="Lama Pinjam" type="varchar" name="Lama_pinjam" value="<?php echo $row->Lama_pinjam ?>" autofocus>
					
			<br>
			</tr>
			<tr>
				<td>Status</td>
				<td> <select name="Status">
                <option value="diproses">Diproses</option>
                
                <option value="disetujui">Disetujui</option>
                <option value="ditolak">Ditolak</option></select>
				
				
				
				</td>
			</tr>
			
			
			<tr>
				<td></td>
				
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>

</body>

</html>
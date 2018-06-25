<!DOCTYPE html>
<html>
<head>
	<title>edit </title>
	
</head>
<body>
<br>
	<center>
		<h3>Edit Data Pengguna</h3>
		
	</center>
	<?php foreach($ci as $row){ ?>
	<form action="<?php echo base_url(). 'gedung/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
		
		<tr>
				<td>ID_Gedung</td>
				<td><input class="form-control separuh" placeholder="ID_Gedung" type="varchar" name="ID_Gedung" value="<?php echo $row->ID_Gedung ?>" autofocus>
					
			<br>
				</td>
		
		</tr>
			
			<tr>
				<td>Nama_Gedung</td>
				<td><input class="form-control separuh" placeholder="Nama_Gedung" type="varchar" name="Nama_Gedung" value="<?php echo $row->Nama_Gedung ?>" autofocus>
					
			<br>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input class="form-control separuh" placeholder="Deskripsi" type="varchar" name="Deskripsi" value="<?php echo $row->Deskripsi ?>" autofocus>
					
			<br>
			</tr>
			<tr>
				<td>NIP Petugas</td>
				<td><input class="form-control separuh" placeholder="NIP" type="varchar" name="NIP" value="<?php echo $row->NIP ?>" autofocus>
					
			<br>
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
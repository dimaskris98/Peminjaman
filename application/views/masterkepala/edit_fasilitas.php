<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title>edit </title>
	
</head>
<body>
<br>
	<center>
		<h3>Edit Data Fasilitas</h3>
		
	</center>
	<?php foreach($ci as $row){ ?>
	<form action="<?php echo base_url(). 'fasilitaskepala/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
		
		<tr>
				<td>ID_Fasilitas</td>
				<td><input class="form-control separuh" placeholder="ID_Fasilitas" type="varchar" name="ID_Fasilitas" value="<?php echo $row->ID_Fasilitas ?>" autofocus>
					
			<br>
					
				</td>
		
		</tr>
			<tr>
				<td>Nama Fasilitas</td>
			
					<td><input class="form-control separuh" placeholder="Nama_Fasilitas" type="varchar" name="Nama_Fasilitas" value="<?php echo $row->Nama_Fasilitas ?>" autofocus>
					
			<br>
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

=======
<!DOCTYPE html>
<html>
<head>
	<title>edit </title>
	
</head>
<body>
<br>
	<center>
		<h3>Edit Data Fasilitas</h3>
		
	</center>
	<?php foreach($ci as $row){ ?>
	<form action="<?php echo base_url(). 'fasilitaskepala/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
		
		<tr>
				<td>ID_Fasilitas</td>
				<td><input class="form-control separuh" placeholder="ID_Fasilitas" type="varchar" name="ID_Fasilitas" value="<?php echo $row->ID_Fasilitas ?>" autofocus>
					
			<br>
					
				</td>
		
		</tr>
			<tr>
				<td>Nama Fasilitas</td>
			
					<td><input class="form-control separuh" placeholder="Nama_Fasilitas" type="varchar" name="Nama_Fasilitas" value="<?php echo $row->Nama_Fasilitas ?>" autofocus>
					
			<br>
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

>>>>>>> 02c43ec2bd096e9a986defc4b8ad8a0ee7af5071
</html>
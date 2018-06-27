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
	<form action="<?php echo base_url(). 'fasilitas/update/'.$id; ?>" method="post">
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

</html>
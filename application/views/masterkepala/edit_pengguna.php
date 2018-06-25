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
	<form action="<?php echo base_url(). 'masterkepala/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
		
		<tr>
				<td>NIM</td>
				
					<td><input class="form-control separuh" placeholder="NIM" type="varchar" name="NIM" value="<?php echo $row->NIM ?>" autofocus>
					
			<br>
				</td>
		
		</tr>
			<tr>
				<td>Nama Pengguna</td>
				<td><input class="form-control separuh" placeholder="nama_pengguna" type="varchar" name="nama_pengguna" value="<?php echo $row->nama_pengguna ?>" autofocus>
					
			<br>
				</td>
			</tr>
			<tr>
				<td>NO HP</td><td><input class="form-control separuh" placeholder="noHp_pengguna" type="varchar" name="noHp_pengguna" value="<?php echo $row->noHp_pengguna ?>" autofocus>
					
			<br>
				
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select name="jk_pengguna">
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option></select></td>
			</tr>
			
			<tr>
				<td>Password</td>
				<td><input class="form-control separuh" placeholder="password" type="varchar" name="password" value="<?php echo $row->password ?>" autofocus>
					
			<br>
			</tr>
			<tr>
				<td>Alamat</td><td><input class="form-control separuh" placeholder="alamat_pengguna" type="varchar" name="alamat_pengguna" value="<?php echo $row->alamat_pengguna ?>" autofocus>
					
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
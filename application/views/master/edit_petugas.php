<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title>edit </title>
	
</head>
<body>
<br>
	<center>
		<h3>Edit Data PeTugas</h3>
		
	</center>
	<?php foreach($ci as $row){ ?>
	<form action="<?php echo base_url(). 'petugas/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
		
		<tr>
				<td>NIP</td>
				<td><input class="form-control separuh" placeholder="NIP" type="varchar" name="NIP" value="<?php echo $row->NIP ?>" autofocus>
					
			<br>
				</td>
		
		</tr>
			<tr>
				<td>Nama Petugas</td>
				<td><input class="form-control separuh" placeholder="Nama_Pegawai" type="varchar" name="Nama_Pegawai" value="<?php echo $row->Nama_Pegawai ?>" autofocus>
					
			<br>
				
				</td>
			</tr>
			<tr>
				<td>NO HP</td>
				<td><input class="form-control separuh" placeholder="NoHp_Pegawai" type="varchar" name="NoHp_Pegawai" value="<?php echo $row->NoHp_Pegawai ?>" autofocus>
					
			<br>
				
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select name="JK_Pegawai">
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option></select></td>
			</tr>
			
			<tr>
				<td>Alamat</td>
				<td><input class="form-control separuh" placeholder="Alamat_Pegawai" type="varchar" name="Alamat_Pegawai" value="<?php echo $row->Alamat_Pegawai ?>" autofocus>
					
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

=======
<!DOCTYPE html>

<html>

<head>

	<title>edit </title>

	

</head>

<body>

<br>

	<center>

		<h3>Edit Data PeTugas</h3>

		

	</center>

	<?php foreach($ci as $row){ ?>

	<form action="<?php echo base_url(). 'petugas/update/'.$id; ?>" method="post">

		<table style="margin:20px auto;">

		

		<tr>

				<td>NIP</td>

				<td><input class="form-control separuh" placeholder="NIP" type="varchar" name="NIP" value="<?php echo $row->NIP ?>" readonly>

					

			<br>

				</td>

		

		</tr>

			<tr>

				<td>Nama Petugas</td>

				<td><input class="form-control separuh" placeholder="Nama_Pegawai" type="varchar" name="Nama_Pegawai" value="<?php echo $row->Nama_Pegawai ?>" autofocus>

					

			<br>

				

				</td>

			</tr>

			<tr>

				<td>NO HP</td>

				<td><input class="form-control separuh" placeholder="NoHp_Pegawai" type="varchar" name="NoHp_Pegawai" value="<?php echo $row->NoHp_Pegawai ?>" autofocus>

					

			<br>

				

			</tr>

			<tr>

				<td>Jenis Kelamin</td>

				<td><select name="JK_Pegawai">

                <option value="pria">Pria</option>

                <option value="wanita">Wanita</option></select></td>

			</tr>

			

			<tr>

				<td>Alamat</td>

				<td><input class="form-control separuh" placeholder="Alamat_Pegawai" type="varchar" name="Alamat_Pegawai" value="<?php echo $row->Alamat_Pegawai ?>" autofocus>

					

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



>>>>>>> 02c43ec2bd096e9a986defc4b8ad8a0ee7af5071
</html>
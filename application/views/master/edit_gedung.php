<!DOCTYPE html>
<html>
<head>
	<title>edit </title>
	
</head>
<body>
	<center>
		<h3>Edit Data Pengguna</h3>
		
	</center>
	<?php foreach($ci as $row){ ?>
	<form action="<?php echo base_url(). 'gedung/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
		
		<tr>
				<td>ID_Gedung</td>
				<td>
					<input type="varchar" name="ID_Gedung" value="<?php echo $row->ID_Gedung ?>" readonly>
				</td>
		
		</tr>
			
			<tr>
				<td>Nama_Gedung</td>
				<td><input type="varchar" name="Nama_Gedung" value="<?php echo $row->Nama_Gedung ?>"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><input type="varchar" name="Deskripsi" value="<?php echo $row->Deskripsi ?>" ></td>
			</tr>
			<tr>
				<td>NIP Petugas</td>
				<td><input type="varchar" name="NIP" value="<?php echo $row->NIP ?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>

</body>
<footer>
    <div id="footer_bottom" class="footer-bottom footer">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="copyright">2014 © <a href="#">FormGet.com</a> All rights reserved.</div>
</div>
</div>
</div>
      </footer>
</html>
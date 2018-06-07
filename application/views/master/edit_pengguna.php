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
	<form action="<?php echo base_url(). 'master/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
		
		<tr>
				<td>NIM</td>
				<td>
					<input type="varchar" name="NIM" value="<?php echo $row->NIM ?>" readonly>
				</td>
		
		</tr>
			<tr>
				<td>Nama Pengguna</td>
				<td>
					<input type="char" name="nama_pengguna" value="<?php echo $row->nama_pengguna ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>NO HP</td>
				<td><input type="char" name="noHp_pengguna" value="<?php echo $row->noHp_pengguna ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select name="jk_pengguna">
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option></select></td>
			</tr>
			
			<tr>
				<td>Alamat</td>
				<td><input type="varchar" name="alamat_pengguna" value="<?php echo $row->alamat_pengguna ?>"></td>
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
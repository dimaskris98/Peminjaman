<!DOCTYPE html>
<html>
<head>
	<title>edit </title>
	
</head>
<body>
	<center>
		<h3>Edit Data PeTugas</h3>
		
	</center>
	<?php foreach($ci as $row){ ?>
	<form action="<?php echo base_url(). 'petugas/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
		
		<tr>
				<td>NIP</td>
				<td>
					<input type="varchar" name="NIP" value="<?php echo $row->NIP ?>" readonly>
				</td>
		
		</tr>
			<tr>
				<td>Nama Petugas</td>
				<td>
					<input type="char" name="Nama_Pegawai" value="<?php echo $row->Nama_Pegawai ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>NO HP</td>
				<td><input type="char" name="NoHp_Pegawai" value="<?php echo $row->NoHp_Pegawai ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select name="JK_Pegawai">
                <option value="pria">Pria</option>
                <option value="wanita">Wanita</option></select></td>
			</tr>
			
			<tr>
				<td>Alamat</td>
				<td><input type="varchar" name="Alamat_Pegawai" value="<?php echo $row->Alamat_Pegawai ?>"></td>
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
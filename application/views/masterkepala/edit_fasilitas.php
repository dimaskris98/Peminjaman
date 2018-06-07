<!DOCTYPE html>
<html>
<head>
	<title>edit </title>
	
</head>
<body>
	<center>
		<h3>Edit Data Fasilitas</h3>
		
	</center>
	<?php foreach($ci as $row){ ?>
	<form action="<?php echo base_url(). 'fasilitaskepala/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
		
		<tr>
				<td>ID_Fasilitas</td>
				<td>
					<input type="varchar" name="ID_Fasilitas" value="<?php echo $row->ID_Fasilitas ?>" readonly>
				</td>
		
		</tr>
			<tr>
				<td>Nama Fasilitas</td>
				<td>
					<input type="char" name="Nama_Fasilitas" value="<?php echo $row->Nama_Fasilitas ?>">
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
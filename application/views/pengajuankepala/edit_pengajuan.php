<!DOCTYPE html>
<html>
<head>
	<title>edit </title>
	
</head>
<body>
	<center>
		<h3>Edit Data Peminjaman</h3>
		
	</center>
	<?php foreach($ci as $row){ ?>
	<form action="<?php echo base_url(). 'menukepala/update/'.$id; ?>" method="post">
		<table style="margin:20px auto;">
		<tr>
				<td>Id Peminjam</td>
				<td>
					<input type="varchar" name="ID_Peminjam" value="<?php echo $row->ID_Peminjam ?>" readonly>
				</td>
		
		</tr>
		<tr>
				<td>NIM</td>
				<td>
					<input type="varchar" name="NIM" value="<?php echo $row->NIM ?>" readonly>
				</td>
		
		</tr>
			<tr>
				<td>Nama Pengguna</td>
				<td>
					<input type="char" name="Nama_Pengguna" value="<?php echo $row->Nama_Pengguna ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Keperluan</td>
				<td><input type="char" name="Keperluan" value="<?php echo $row->Keperluan ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td><input type="varchar" name="Tanggal_pinjam" value="<?php echo $row->Tanggal_pinjam ?>"></td>
			</tr>
			<tr>
				<td>Lama Pinjam</td>
				<td><input type="varchar" name="Lama_pinjam" value="<?php echo $row->Lama_pinjam ?>"></td>
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
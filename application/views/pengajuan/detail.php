<!DOCTYPE html>
<html>
<head>
	<title>detail </title>
	
</head>
<body>
	<center>
		<h3>Detail Data Peminjaman</h3>
		
	</center>
	<?php foreach($cii as $row){ ?>
	
		Id Peminjam
				
					<input type="text" name="ID_Peminjam" value="<?php echo $row->ID_Peminjam ?>" readonly><br>
				
		NIM
					<input type="text" name="NIM" value="<?php echo $row->NIM ?>" readonly><br>
		Nama Pengguna
					<input type="text" name="Nama_Pengguna" value="<?php echo $row->Nama_Pengguna ?>" readonly><br>
		Nama Gedung
					<input type="text" name="Nama_Gedung" value="<?php echo $row->Nama_Gedung ?>" readonly><br>
		Keperluan
					<input type="text" name="Keperluan" value="<?php echo $row->Keperluan ?>"readonly><br>
		Tanggal Pinjam
					<input type="text" name="Tanggal_pinjam" value="<?php echo $row->Tanggal_pinjam ?>"readonly><br>
		Lama Pinjam
					<input type="text" name="Lama_pinjam" value="<?php echo $row->Lama_pinjam ?>"readonly><br>
		Status
					<input type="text" name="Status" value="<?php echo $row->Status ?>" readonly><br>
		Tambahan
					<input type="text" name="Tambahan" value="<?php echo $row->Tambahan ?>" readonly>
					<br><br>
	<?php } ?>

<table border="1">
				<tr>
				
					<th>Nama Fasilitas</th>
					<th>Jumlah</th>
					<th>Keterangan</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td><?php echo $data->Nama_Fasilitas ?></td>
			<td><?php echo $data->Jumlah ?></td>
			<td><?php echo $data->Keterangan ?></td>
		
		</tr>
		<?php } ?>
				
			</table>


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
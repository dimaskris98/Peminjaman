<html>
	<head>
		<title>List Mahasiswa</title>
	</head>
	<body>
		<br>
<form align="center" action="<?=site_url('menu/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table class="table table-striped">
				<tr>
				<th style="text-align:center">ID Peminjam</th>
					<th style="text-align:center">Nim</th>
					<th style="text-align:center">Nama</th>
					<th style="text-align:center">Gedung</th>
					<th style="text-align:center">Keperluan</th>
					<th style="text-align:center">Tanggal</th>
					<th style="text-align:center">Lama</th>
					<th style="text-align:center">Status</th>
					<th style="text-align:center">Detail</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td style="text-align:center"><?php echo $data->ID_Peminjam ?></td>
			<td style="text-align:center"><?php echo $data->NIM ?></td>
			<td style="text-align:center"><?php echo $data->Nama_Pengguna ?></td>
			<td style="text-align:center"><?php echo $data->Nama_Gedung ?></td>
			<td style="text-align:center"><?php echo $data->Keperluan ?></td>
			<td style="text-align:center"><?php echo $data->Tanggal_pinjam ?></td>
			<td style="text-align:center"><?php echo $data->Lama_pinjam ?></td>
			<td style="text-align:center"><?php echo $data->Status ?></td>
			
			
			<td style="text-align:center">
			      <?php echo anchor('menu/detail/'.$data->ID_Peminjam,'detail'); ?>
			</td>
		</tr>
		<?php } ?>
				
			</table>
		</p>
	</body>
</html>


<html>
	<head>
		<title>Info</title>
	</head>
	<body>
		<br>
<form align="center" action="<?=site_url('menu/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		<h2>Laporan Peminjaman Gedung</h2>
		<p align="center">
			<table border="1">
				<tr>
				<th>Tanggal</th>
				<th>Pukul</th>
					<th>Nama Gedung</th>
					
					<th>Acara</th>
					<th>Nama Pemakai</th>
					
					<th>Status</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td><?php echo $data->Tanggal_pinjam ?></td>
			<td><?php echo $data->Lama_pinjam ?></td>
			<td><?php echo $data->Nama_Gedung?></td>
			<td><?php echo $data->Keperluan ?></td>
			<td><?php echo $data->Nama_Pengguna ?></td>
			
			<td><?php echo $data->Status ?></td>
		</tr>
		<?php } ?>
				
				<a href="laporan"><button onclick="window.print();">Print</button></a>
				<br><br>
			</table>
		</p>
	</body>
</html>


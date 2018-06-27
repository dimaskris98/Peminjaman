<html>
	<head>
		<title>Info</title>
		<br>
		<div class="panel panel-default">
                        <div class="panel-heading">
                            </i>Laporan Peminjaman Gedung
						</div>
		<br>
	</head>
	<body>
	
		<p align="center">
			<table class="table table-striped">
				<tr>
				<th>Tanggal</th>
				<th>Pukul</th>
					<th>Nama Gedung</th>
					
					<th>Acara</th>
					<th>Nama Pemakai</th>
					
					<th>Status</th>
					<th>NIP</th>
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
			
			<td><?php echo $data->NIP ?></td>
		</tr>
		<?php } ?>
				<p align="center">
				<a href="laporan"><button onclick="window.print();">Print</button></a>
				<br><br>
			</table>
		</p>
	</body>
</html>


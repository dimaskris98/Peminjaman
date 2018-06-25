<html>
	<head>
		<title>Laporan</title>
	</head>
	<body>
	<div class="panel panel-default">
                        <div class="panel-heading">
                            </i>Laporan Peminjaman Gedung
						</div>
		<br>

<a href="laporan"><button onclick="window.print();">Print</button></a>

		
		<p align="center">
			<table class="table table-striped">
				<tr>
				<th style="text-align:center">Tanggal</th>
				<th style="text-align:center">Pukul</th>
					<th style="text-align:center">Nama Gedung</th>
					
					<th style="text-align:center">Acara</th>
					<th style="text-align:center">Nama Pemakai</th>
					
					<th style="text-align:center">Status</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td style="text-align:center"><?php echo $data->Tanggal_pinjam ?></td>
			<td style="text-align:center"><?php echo $data->Lama_pinjam ?></td>
			<td style="text-align:center"><?php echo $data->Nama_Gedung?></td>
			<td style="text-align:center"><?php echo $data->Keperluan ?></td>
			<td style="text-align:center"><?php echo $data->Nama_Pengguna ?></td>
			
			<td style="text-align:center"><?php echo $data->Status ?></td>
			
		</tr>
		<?php } ?>
				
				
			</table>
		</p>
	</body>
</html>


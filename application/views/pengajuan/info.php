<html>
	<head>
		<title>Info</title>
	</head>
	<body>
		<br>
		<div class="panel panel-default">
                        <div class="panel-heading">
                            </i>Info Jadwal Penyawaan gedung
						</div>
						<br>
		
		<p align="center">
			<table class="table table-striped">
				<tr>
				<th style="text-align:center">Tanggal</th>
					<th style="text-align:center">Nama Gedung</th>
					<th style="text-align:center">Pukul</th>
					<th style="text-align:center">Acara</th>
					<th style="text-align:center">Fasilitas</th>
					<th style="text-align:center">Nama Pemakai</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td style="text-align:center"><?php echo $data->Tanggal_pinjam ?></td>
			<td style="text-align:center"><?php echo $data->Nama_Gedung?></td>
			<td style="text-align:center"><?php echo $data->Lama_pinjam ?></td>
			<td style="text-align:center"><?php echo $data->Keperluan ?></td>
			<td style="text-align:center"><?php echo $data->Nama_Fasilitas ?></td>
			<td style="text-align:center"><?php echo $data->Nama_Pengguna ?></td>
			
		</tr>
		<?php } ?>
				
			</table>
			</div>
		</p>
	</body>
</html>


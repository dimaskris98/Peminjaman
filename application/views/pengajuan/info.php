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
<form align="center" action="<?=site_url('menu/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table class="table table-striped">
				<tr>
				<th style="text-align:center">Tanggal</th>
					<th style="text-align:center">Nama Gedung</th>
					<th style="text-align:center">Pukul</th>
					<th style="text-align:center">Acara</th>
					<th style="text-align:center">Fasilitas</th>
					<th style="text-align:center">Nama Pemakai</th>
					<th style="text-align:center">Status</th>
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
			<td style="text-align:center"><?php echo $data->Status ?></td>
			
		</tr>
		<?php } ?>
				
			</table>
			</div>
		</p>
	</body>
</html>


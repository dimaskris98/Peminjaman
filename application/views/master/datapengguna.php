<html>
	<head>
		<title>List Pengguna</title>
	</head>
	<body>
	
		<br>
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pengguna
						</div>
						<br>
<form align="center" action="<?=site_url('master/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table class="table table-striped">
				<tr>
					<th style="text-align:center">NIM</th>
					<th style="text-align:center">Nama</th>
					<th style="text-align:center">NO HP</th>
					<th style="text-align:center">Jenis Kelamin</th>
					<th style="text-align:center">Alamat</th>
					<th colspan="2" style="text-align:center">Opsi</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		
		<tr>
		
			<td style="text-align:center"><?php echo $data->NIM ?></td>
			<td style="text-align:center"><?php echo $data->nama_pengguna ?></td>
			<td style="text-align:center"><?php echo $data->noHp_pengguna ?></td>
			<td style="text-align:center"><?php echo $data->jk_pengguna ?></td>
			<td style="text-align:center"><?php echo $data->alamat_pengguna ?></td>
			<td style="text-align:center">
                              <?php echo anchor('master/hapus/'.$data->NIM,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
				
			</table>
			</div>
		</p>
	</body>
</html>


<html>
	<head>
		<title>List Fasilitas</title>
	</head>
	<body>
		<br>
		<div class="panel panel-default">
                        <div class="panel-heading">
                            </i>Data Fasilitas
						</div>
						<br>
<form align="center" action="<?=site_url('fasilitaskepala/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table class="table table-striped">
				<tr>
					<th>ID Fasilitas</th>
					<th>Nama Fasilitas</th>
					<th>Opsi</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td><?php echo $data->ID_Fasilitas ?></td>
			<td><?php echo $data->Nama_Fasilitas ?></td>
			<td>
			      <?php echo anchor('fasilitaskepala/edit/'.$data->ID_Fasilitas,'Edit'); ?>
                              <?php echo anchor('fasilitaskepala/hapus/'.$data->ID_Fasilitas,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
				
			</table>
			</div>
		</p>
	</body>
</html>


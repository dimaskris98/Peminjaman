<html>
	<head>
		<title>List Fasilitas</title>
	</head>
	<body>
	<p align="center"><a href="<?php echo base_url()?>fasilitas/input">+Tambah</a></p>
		<br>
<form align="center" action="<?=site_url('fasilitas/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table border="1">
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
			      <?php echo anchor('fasilitas/edit/'.$data->ID_Fasilitas,'Edit'); ?>
                              <?php echo anchor('fasilitas/hapus/'.$data->ID_Fasilitas,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
				
			</table>
		</p>
	</body>
</html>


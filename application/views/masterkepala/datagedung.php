<html>
	<head>
		<title>List Gedung</title>
	</head>
	<body>
	<p align="center"><a href="<?php echo base_url()?>gedungkepala/input">+Tambah</a></p>
		<br>
		<div class="panel panel-default">
                        <div class="panel-heading">
                            </i>Data Gedung
						</div>
<form align="center" action="<?=site_url('gedungkepala/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table class="table table-striped">
				<tr>
					<th>ID_Gedung</th>
					<th>Nama_Gedung</th>
					<th>Deskripsi</th>
					<th>NIP</th>
					<th colspan="2">Opsi</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td><?php echo $data->ID_Gedung ?></td>
			<td><?php echo $data->Nama_Gedung ?></td>
			<td><?php echo $data->Deskripsi ?></td>
			<td><?php echo $data->NIP ?></td>
			<td>
			      <?php echo anchor('gedungkepala/edit/'.$data->ID_Gedung,'Edit'); ?>
                              <?php echo anchor('gedungkepala/hapus/'.$data->ID_Gedung,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
				
			</table>
			</div>
		</p>
	</body>
</html>


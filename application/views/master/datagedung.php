<html>
	<head>
		<title>List Gedung</title>
	</head>
	<body>
	<br>
		<br>
		<div class="panel panel-default">
                        <div class="panel-heading">
                            </i>Data Gedung
						</div>
						<br>
<form align="center" action="<?=site_url('gedung/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table class="table table-striped">
				<tr>
					<th style="text-align:center">ID_Gedung</th>
					<th style="text-align:center">Nama_Gedung</th>
					<th style="text-align:center">Deskripsi</th>
					<th style="text-align:center">NIP</th>
					<th colspan="2" style="text-align:center">Opsi</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td style="text-align:center"><?php echo $data->ID_Gedung ?></td>
			<td style="text-align:center"><?php echo $data->Nama_Gedung ?></td>
			<td style="text-align:center"><?php echo $data->Deskripsi ?></td>
			<td style="text-align:center"><?php echo $data->NIP ?></td>
			<td style="text-align:center">
			      <?php echo anchor('gedung/edit/'.$data->ID_Gedung,'Edit'); ?>
                              <?php echo anchor('gedung/hapus/'.$data->ID_Gedung,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
				
			</table>
			</div>
		</p>
	</body>
</html>


<html>
	<head>
		<title>List Fasilitas</title>
	</head>
	<body>
	<br>
	<p align="center"><a href="<?php echo base_url()?>fasilitas/input">+Tambah</a></p>
		<br>
		<div class="panel panel-default">
                        <div class="panel-heading">
                            </i>Data Fasilitas
						</div>
						<br>
<form align="center" action="<?=site_url('fasilitas/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table class="table table-striped">
				<tr>
					<th style="text-align:center">ID Fasilitas</th>
					<th style="text-align:center">Nama Fasilitas</th>
					<th style="text-align:center">Opsi</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td style="text-align:center"><?php echo $data->ID_Fasilitas ?></td>
			<td style="text-align:center"><?php echo $data->Nama_Fasilitas ?></td>
			<td style="text-align:center">
			      <?php echo anchor('fasilitas/edit/'.$data->ID_Fasilitas,'Edit'); ?>
                              <?php echo anchor('fasilitas/hapus/'.$data->ID_Fasilitas,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
				
			</table>
			</div>
		</p>
	</body>
</html>


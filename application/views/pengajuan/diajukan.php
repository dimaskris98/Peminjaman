<html>
	<head>
		<title>List Mahasiswa</title>
	</head>
	<body>
		<br>
<form align="center" action="<?=site_url('menu/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table class="table table-striped">
				<tr>
				<th>ID Peminjam</th>
					<th>Nim</th>
					<th>Nama</th>
					<th>Gedung</th>
					<th>Keperluan</th>
					<th>Tanggal</th>
					<th>Lama</th>
					<th>Status</th>
					<th>Opsi</th>
					<th>Detail</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td><?php echo $data->ID_Peminjam ?></td>
			<td><?php echo $data->NIM ?></td>
			<td><?php echo $data->Nama_Pengguna ?></td>
			<td><?php echo $data->Nama_Gedung ?></td>
			<td><?php echo $data->Keperluan ?></td>
			<td><?php echo $data->Tanggal_pinjam ?></td>
			<td><?php echo $data->Lama_pinjam ?></td>
			<td><?php echo $data->Status ?></td>
			
			<td>
			      <?php echo anchor('menu/edit/'.$data->ID_Peminjam,'Edit'); ?>
                              <?php echo anchor('menu/hapus/'.$data->ID_Peminjam,'Hapus'); ?>
			</td>
			<td>
			      <?php echo anchor('menu/detail/'.$data->ID_Peminjam,'detail'); ?>
			</td>
		</tr>
		<?php } ?>
				
			</table>
		</p>
	</body>
</html>


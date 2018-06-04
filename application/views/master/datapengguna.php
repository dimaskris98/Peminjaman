<html>
	<head>
		<title>List Mahasiswa</title>
	</head>
	<body>
	<p align="center"><a href="<?php echo base_url()?>master/input">+Tambah</a></p>
		<br>
<form align="center" action="<?=site_url('master/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table border="1">
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>NO HP</th>
					<th>Jenis Kelamin</th>
					<th>Password</th>
					<th>Alamat</th>
					<th colspan="2">Opsi</th>
				</tr>
				
				
				
				<?php 
		foreach($ci as $data){ 
		?>
		<tr>
		
			<td><?php echo $data->NIM ?></td>
			<td><?php echo $data->nama_pengguna ?></td>
			<td><?php echo $data->noHp_pengguna ?></td>
			<td><?php echo $data->jk_pengguna ?></td>
			<td><?php echo $data->password ?></td>
			<td><?php echo $data->alamat_pengguna ?></td>
			<td>
			      <?php echo anchor('master/edit/'.$data->NIM,'Edit'); ?>
                              <?php echo anchor('master/hapus/'.$data->NIM,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
				
			</table>
		</p>
	</body>
</html>


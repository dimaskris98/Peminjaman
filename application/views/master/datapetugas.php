<html>
	<head>
		<title>List Mahasiswa</title>
	</head>
	<body>
	<p align="center"><a href="<?php echo base_url()?>petugas/input">+Tambah</a></p>
		<br>
		<div class="panel panel-default">
                        <div class="panel-heading">
                            </i>Data Petugas
						</div>
<form align="center" action="<?=site_url('petugas/cari');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "Search" name="submit" />
</form>
		
		<p align="center">
			<table class="table table-striped">
				<tr>
					<th>NIP</th>
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
		
			<td><?php echo $data->NIP ?></td>
			<td><?php echo $data->Nama_Pegawai ?></td>
			<td><?php echo $data->NoHp_Pegawai ?></td>
			<td><?php echo $data->JK_Pegawai ?></td>
			<td><?php echo $data->Password ?></td>
			<td><?php echo $data->Alamat_Pegawai ?></td>
			<td>
			      <?php echo anchor('petugas/edit/'.$data->NIP,'Edit'); ?>
                              <?php echo anchor('petugas/hapus/'.$data->NIP,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
				
			</table>
			</div>
		</p>
	</body>
</html>


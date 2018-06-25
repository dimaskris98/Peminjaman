<html>
	<head>
		<title>List Mahasiswa</title>
	</head>
	<body>
	<br>
	<p align="center"><a href="<?php echo base_url()?>petugaskepala/input">+Tambah</a></p>
		<br>
		<div class="panel panel-default">
                        <div class="panel-heading">
                            </i>Data Petugas
						</div>
						<br>
<form align="center" action="<?=site_url('petugaskepala/cari');?>" method = "post">
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
			<td><?php echo $data->Alamat_Pegawai ?></td>
			<td>
			      <?php echo anchor('petugaskepala/edit/'.$data->NIP,'Edit'); ?>
                              <?php echo anchor('petugaskepala/hapus/'.$data->NIP,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
			</table>
			</div>
		</p>
	</body>
</html>


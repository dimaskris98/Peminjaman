<html>

	<head>

		<title>List Mahasiswa</title>

	</head>

	<body>

	<br>

		<br>

		<div class="panel panel-default">

                        <div class="panel-heading">

                            </i>Data Petugas

						</div>

						<br>

<form align="center" action="<?=site_url('petugas/cari');?>" method = "post">

<input type="text" name = "keyword" />

<input type="submit" value = "Search" name="submit" />

</form>

		

		<p align="center">

			<table class="table table-striped">

				<tr>

					<th style="text-align:center">NIP</th>

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

		

			<td style="text-align:center"><?php echo $data->NIP ?></td>

			<td style="text-align:center"><?php echo $data->Nama_Pegawai ?></td>

			<td style="text-align:center"><?php echo $data->NoHp_Pegawai ?></td>

			<td style="text-align:center"><?php echo $data->JK_Pegawai ?></td>

			<td style="text-align:center"><?php echo $data->Alamat_Pegawai ?></td>

			<td style="text-align:center">

			      <?php echo anchor('petugas/edit/'.$data->NIP,'Edit'); ?>


			</td>

		</tr>

		<?php } ?>

				

			</table>

			</div>

		</p>

	</body>

</html>




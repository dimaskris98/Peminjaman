<html>

	<head>

		<title>Info</title>

		<br>

		<div class="panel panel-default">

                        <div class="panel-heading">

                            </i>Laporan Peminjaman Gedung

						</div>

		<br>
		
		<br>


<form align="center" action="<?=site_url('menukepala/carilaporan');?>" method = "get">
<select name="keyword">
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
                </select>
                <select name="keyword2">

                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                </select>
<input type="submit" value = "Search" name="submit" />
</form>
<br>


<br>

	</head>

	<body>

	

		<p align="center">

			<table class="table table-striped">

				<tr>

				<th>Tanggal</th>

				<th>Pukul</th>

					<th>Nama Gedung</th>

					

					<th>Acara</th>

					<th>Nama Pemakai</th>

					

					<th>Status</th>

					<th>NIP</th>

				</tr>

				

				

				

				<?php 

		foreach($ci as $data){ 

		?>

		<tr>

		

			<td><?php echo $data->Tanggal_pinjam ?></td>

			<td><?php echo $data->Lama_pinjam ?></td>

			<td><?php echo $data->Nama_Gedung?></td>

			<td><?php echo $data->Keperluan ?></td>

			<td><?php echo $data->Nama_Pengguna ?></td>

			

			<td><?php echo $data->Status ?></td>

			

			<td><?php echo $data->NIP ?></td>

		</tr>

		<?php } ?>

				<p align="center">

				<a href="laporan"><button onclick="window.print();">Print</button></a>	
				
				</p>

				<br><br>

			</table>

	

	</body>

</html>




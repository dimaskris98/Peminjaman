<html>

	<head>

		<title>Laporan</title>

	</head>

	<body>

	<div class="panel panel-default">

                        <div class="panel-heading">

                            </i>Laporan Peminjaman Gedung

						</div>

		<br>


<form align="center" action="<?=site_url('menu/carilaporan');?>" method = "get">
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

<a href="laporan"><button onclick="window.print();">Print</button></a>



		

		<p align="center">

			<table class="table table-striped">

				<tr>

				<th style="text-align:center">Tanggal</th>

				<th style="text-align:center">Pukul</th>

					<th style="text-align:center">Nama Gedung</th>

					

					<th style="text-align:center">Acara</th>

					<th style="text-align:center">Nama Pemakai</th>

					

					<th style="text-align:center">Status</th>

				</tr>

				

				

				

				<?php 

		foreach($ci as $data){ 

		?>

		<tr>

		

			<td style="text-align:center"><?php echo $data->Tanggal_pinjam ?></td>

			<td style="text-align:center"><?php echo $data->Lama_pinjam ?></td>

			<td style="text-align:center"><?php echo $data->Nama_Gedung?></td>

			<td style="text-align:center"><?php echo $data->Keperluan ?></td>

			<td style="text-align:center"><?php echo $data->Nama_Pengguna ?></td>

			

			<td style="text-align:center"><?php echo $data->Status ?></td>

			

		</tr>

		<?php } ?>

				

				

			</table>

		</p>

	</body>

</html>




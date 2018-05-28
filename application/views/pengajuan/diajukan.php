<html>
	<head>
		<title>List Mahasiswa</title>
	</head>
	<body>
		<p align="right"><a href="<?php echo base_url()?>menu/input">+Tambah</a></p>
		
		
<form align="center" action="<?=site_url('menu/home');?>" method = "post">
<input type="text" name = "keyword" />
<input type="submit" value = "submit" name="submit" />
</form>
		
		<p align="center">
			<table border="1">
				<tr>
					<th>Nim</th>
					<th>Nama</th>
					<th>Gedung</th>
					<th>Keperluan</th>
					<th>Tanggal</th>
					<th>Lama</th>
					<th>Status</th>
					<th colspan="2"></th>
				</tr>
				
				<?php
if( ! empty($ci)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($ci as $data){ // Lakukan looping pada variabel gambar dari controller
    echo "<tr>";
    //echo "<td>".$data->nama_file."</td>";
	echo "<td> <center>".$data->NIM."</center></td>";
	echo "<td> <center>".$data->Nama_Pengguna."</center></td>";
	echo "<td> <center>".$data->Nama_Gedung."</center></td>";
	echo "<td> <center>".$data->Keperluan."</center></td>";
	echo "<td> <center>".$data->Tanggal_pinjam."</center></td>";
	echo "<td> <center>".$data->Lama_pinjam."</center></td>";
	echo "<td> <center>".$data->Status."</center></td>";
	echo "<td><input type='button' src='".base_url("cross.jpg")."' value='delete'></td>";
	
    echo "</tr>";
    
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
}
?> 
			</table>
		</p>
	</body>
</html>


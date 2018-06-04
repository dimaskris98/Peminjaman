<html>
	<head>
		<title>List Mahasiswa</title>
	</head>
	<body>
	<p align="center"><a href="<?php echo base_url()?>master/input">+Tambah</a></p>
		<br>
		<div class="panel panel-default">
                        <div class="panel-heading">
                            </i>Data Pengguna
						</div>
<form align="center" action="<?=site_url('master/cari');?>" method = "post">
<ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
</form>
		
		<p align="center">
			<table class="table table-striped">
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
			</div>
		</p>
	</body>
</html>


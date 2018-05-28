<html>
	<head>
		<title>Input Pengguna</title>
	</head>
	<body>
		<h4 align="center">Tambah Data Pengguna</h4>
		<div align="center">
		<p>
			<form method="post" action="input">
        NIM<br/><input type="text" name="NIM" size="10" maxlength="10" value="<?php if(isset($data)) { echo $data[0]->NIM; } ?>"><br/><br/>
		
        Nama <br/><input type="text" name="Nama_Pengguna" size="30" maxlength="25" value="<?php if(isset($data)) { echo $data[1]->Nama_Pengguna; } ?>"><br/><br/>
        
        No Hp <br/><input type="text" name="NoHp_Pengguna" size="10" maxlength="10" value="<?php if(isset($data)) { echo $data[2]->NoHp_Pengguna; } ?>"><br/><br/>
        Jenis kelamin <br/><input type="text" name="JK_Pengguna" size="10" maxlength="10" value="<?php if(isset($data)) { echo $data[3]->JK_Pengguna; } ?>"><br/><br/>
        Alamat<br/><input type="text" name="NoHp_Pengguna" size="10" maxlength="10" value="<?php if(isset($data)) { echo $data[2]->Alamat_Pengguna; } ?>"><br/><br/>
		
        
		<br/><br/>
        <input type="submit" name="btnTambah" value="Simpan"/>
        <a href="<?php echo base_url()?>pengguna/home">Kembali</a>
    </form>
		</p>
		</div>
	</body>
</html>
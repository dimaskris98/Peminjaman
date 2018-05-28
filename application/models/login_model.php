<?php
class login_model extends CI_Model{
 function cek_login($table,$where){
  return $this->db->get_where($table,$where);
 }
 
 
 function cari($data)
	{
		//$cari = $this->input->GET('cari', TRUE);
		$query = $this->db->query("SELECT * FROM peminjaman,pengguna where peminjaman.NIM=pengguna.NIM AND Nama_Pengguna = '$data' ");
		return $query->result();
	}   
    
	function ajukan(){
	$query = $this->db->query("SELECT * FROM (SELECT pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,peminjaman.Keperluan,peminjaman.Tanggal_pinjam,peminjaman.Lama_pinjam,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung)as a where a.Status = 'diproses'");
		return $query->result();
	}
	function tolak(){
		$query = $this->db->query("SELECT * FROM (SELECT pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,peminjaman.Keperluan,peminjaman.Tanggal_pinjam,peminjaman.Lama_pinjam,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung)as a where a.Status = 'tolak'");
		return $query->result();
	}
	function setuju(){
		$query = $this->db->query("SELECT * FROM (SELECT pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,peminjaman.Keperluan,peminjaman.Tanggal_pinjam,peminjaman.Lama_pinjam,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung)as a where a.Status = 'setuju'");
		return $query->result();
	}
	function semua(){
		$query = $this->db->query("SELECT peminjaman.Tanggal_pinjam,gedung.Nama_Gedung,peminjaman.Lama_pinjam,peminjaman.Keperluan,pengguna.NIM,pengguna.Nama_Pengguna,,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung");
		return $query->result();
	}
	function info(){
		$query = $this->db->query("SELECT pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,peminjaman.Keperluan,fasilitas.Nama_Fasilitas,pengguna.Nama_Pengguna FROM pengguna,peminjaman,gedung,fasilitas where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung AND peminjaman.ID_Peminjam=detail_fasilitas.ID_Peminjam");
		return $query->result();
	}
	
	
	function get_pengguna(){
		$query = $this->db->query("SELECT * FROM pengguna");
		return $query->result();
	}
	
	function get_pinjam(){
		$query = $this->db->query("SELECT * FROM peminjaman");
		return $query->result();
	}
	function get_gdg(){
		$query = $this->db->query("SELECT * FROM gedung");
		return $query->result();
	}
	
	
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM pengguna WHERE NIM = '$id'");
		return $query->result_array();
	}
	
	function input($data = array()){
		return $this->db->insert('pengguna',$data);
		//return $this->db->update('tm_mahasiswa',$data);
	}
	
	function delete($id){
		$this->db->where('nim', $id);
        return $this->db->delete('tm_mahasiswa');
	}
	
	function update($data = array(),$id){
		$this->db->where('nim',$id);
		return $this->db->update('tm_mahasiswa',$data);
	}
	
	
}
 
 
?>
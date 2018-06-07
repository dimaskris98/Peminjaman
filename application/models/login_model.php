<?php
class login_model extends CI_Model{
 function cek_login($table,$where){
  return $this->db->get_where($table,$where);
 }
 
 function get_data_cari($keyword){
  $this->db->like('Nama_Pengguna', $keyword)->or_like('Nama_Gedung', $keyword); //mencari data yang serupa dengan keyword
 $query = $this->db->query("SELECT * FROM (SELECT peminjaman.ID_Peminjam,pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,peminjaman.Keperluan,peminjaman.Tanggal_pinjam,peminjaman.Lama_pinjam,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung)as a WHERE a.Nama_Pengguna LIKE '%$keyword%' OR a.Nama_Gedung LIKE '%$keyword%' ");
		return $query->result();}
    
	function ajukan(){
	$query = $this->db->query("SELECT * FROM (SELECT peminjaman.ID_Peminjam,pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,peminjaman.Keperluan,peminjaman.Tanggal_pinjam,peminjaman.Lama_pinjam,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung)as a where a.Status = 'diproses'");
		return $query->result();
	}
	function tolak(){
		$query = $this->db->query("SELECT * FROM (SELECT peminjaman.ID_Peminjam,pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,peminjaman.Keperluan,peminjaman.Tanggal_pinjam,peminjaman.Lama_pinjam,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung)as a where a.Status = 'ditolak'");
		return $query->result();
	}
	function setuju(){
		$query = $this->db->query("SELECT * FROM (SELECT peminjaman.ID_Peminjam,pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,peminjaman.Keperluan,peminjaman.Tanggal_pinjam,peminjaman.Lama_pinjam,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung)as a where a.Status = 'disetujui'");
		return $query->result();
	}
	function semua(){
		$query = $this->db->query("SELECT peminjaman.ID_Peminjam,peminjaman.Tanggal_pinjam,gedung.Nama_Gedung,peminjaman.Lama_pinjam,peminjaman.Keperluan,pengguna.NIM,pengguna.Nama_Pengguna,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung");
		return $query->result();
	}
	
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM (SELECT peminjaman.ID_Peminjam,pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,peminjaman.Keperluan,peminjaman.Tanggal_pinjam,peminjaman.Lama_pinjam,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung )as a where a.ID_Peminjam = '$id'");
		return $query->result();
	}
	
	function detail($id){
		$query = $this->db->query("SELECT detail_fasilitas.*,fasilitas.* FROM detail_fasilitas,fasilitas WHERE detail_fasilitas.ID_Fasilitas = fasilitas.ID_Fasilitas AND detail_fasilitas.ID_Peminjam = '$id'");
		return $query->result();
	}
	function detaillist($id){
		$query = $this->db->query("SELECT peminjaman.*,pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,gedung.ID_Gedung FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung AND peminjaman.ID_Peminjam = '$id'");
		return $query->result();
	}
	
	function info(){
		$query = $this->db->query ("SELECT * FROM (SELECT peminjaman.ID_Peminjam,pengguna.NIM,pengguna.Nama_Pengguna,gedung.Nama_Gedung,peminjaman.Keperluan,peminjaman.Tanggal_pinjam,peminjaman.Lama_pinjam,peminjaman.Status,peminjaman.Tambahan,detail_fasilitas.Jumlah,detail_fasilitas.Keterangan,fasilitas.Nama_Fasilitas FROM pengguna,peminjaman,gedung,detail_fasilitas,fasilitas where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung AND peminjaman.ID_Peminjam=detail_fasilitas.ID_Peminjam AND detail_fasilitas.ID_Fasilitas=fasilitas.ID_Fasilitas) AS a where a.Status = 'disetujui'");
		return $query->result();
	}
	
	function hapus($where,$table){
 $this->db->where($where);
 $this->db->delete($table);
}
 
	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

		function laporan(){
		$query = $this->db->query ("SELECT gedung.NIP,peminjaman.ID_Peminjam,peminjaman.Tanggal_pinjam,gedung.Nama_Gedung,peminjaman.Lama_pinjam,peminjaman.Keperluan,pengguna.NIM,pengguna.Nama_Pengguna,peminjaman.Status FROM pengguna,peminjaman,gedung where pengguna.NIM = peminjaman.NIM AND peminjaman.ID_Gedung=gedung.ID_Gedung order by peminjaman.Tanggal_pinjam asc");
		return $query->result();
	}
	
}
 
 
?>
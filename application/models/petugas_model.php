<?php
class petugas_model extends CI_Model{
	public function view(){
    return $this->db->get('pegawai')->result();
  }
	
	 function get_data_cari($keyword){
 	 $this->db->like('Nama_Pegawai', $keyword)->or_like('NIP', $keyword); //mencari data yang serupa dengan keyword
	return $this->db->get('pegawai')->result();
	}
	
	
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM pegawai where NIP = '$id'");
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

public function save(){
    $data = array(
	   'NIP'=>$this->input->post('NIP'),
	   'Nama_Pegawai' => $this->input->post('Nama_Pegawai'),
		'NoHp_Pegawai' => $this->input->post('NoHp_Pegawai'),
		'JK_Pegawai' => $this->input->post('JK_Pegawai'),
		'Password' => $this->input->post('Password'),
		'Alamat_Pegawai' => $this->input->post('Alamat_Pegawai')
    );
    
    
    $this->db->insert('pegawai', $data);
}
	
	
	
	
	
	
	}
?>
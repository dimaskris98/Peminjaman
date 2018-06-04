<?php
class master_model extends CI_Model{
	public function view(){
    return $this->db->get('pengguna')->result();
  }
	
	 function get_data_cari($keyword){
 	 $this->db->like('NIM', $keyword)->or_like('nama_pengguna', $keyword); //mencari data yang serupa dengan keyword
	return $this->db->get('pengguna')->result();
	}
	
	
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM pengguna where NIM = '$id'");
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
	   'NIM'=>$this->input->post('NIM'),
      'nama_pengguna'=>$this->input->post('nama_pengguna'),
      'noHp_pengguna' => $this->input->post('noHp_pengguna'),
	  'jk_pengguna' => $this->input->post('jk_pengguna'),
	  'password' => $this->input->post('password'),
	  'alamat_pengguna' => $this->input->post('alamat_pengguna')
    );
    
    $this->db->insert('pengguna', $data);
}
	
	
	
	
	
	
	}
?>
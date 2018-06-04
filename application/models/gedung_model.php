<?php
class gedung_model extends CI_Model{
	public function view(){
    return $this->db->get('gedung')->result();
  }
	
	 function get_data_cari($keyword){
 	 $this->db->like('Nama_Gedung', $keyword)->or_like('ID_Gedung', $keyword); //mencari data yang serupa dengan keyword
	return $this->db->get('gedung')->result();
	}
	
	
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM gedung where ID_Gedung = '$id'");
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
	   'ID_Gedung'=>$this->input->post('ID_Gedung'),
      'Nama_Gedung'=>$this->input->post('Nama_Gedung'),
      'Deskripsi' => $this->input->post('Deskripsi'),
	  'NIP' => $this->input->post('NIP')
    );
    
    $this->db->insert('gedung', $data);
}
	
	
	
	
	
	
	}
?>
<?php
class fasilitas_model extends CI_Model{
	public function view(){
    return $this->db->get('fasilitas')->result();
  }
	
	 function get_data_cari($keyword){
 	 $this->db->like('Nama_Fasilitas', $keyword)->or_like('ID_Fasilitas', $keyword); //mencari data yang serupa dengan keyword
	return $this->db->get('fasilitas')->result();
	}
	
	
	function get_data_edit($id){
		$query = $this->db->query("SELECT * FROM fasilitas where ID_Fasilitas = '$id'");
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
	   'ID_Fasilitas'=>$this->input->post('ID_Fasilitas'),
      'Nama_Fasilitas'=>$this->input->post('Nama_Fasilitas')
    );
    
    $this->db->insert('fasilitas', $data);
}
	
	
	
	}
?>
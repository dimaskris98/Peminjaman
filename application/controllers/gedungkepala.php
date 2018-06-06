<?php
class gedungkepala extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('gedung_model');
		$this->load->view('home/headerkepala');
		
        //$this->model = $this->Model_Mahasiswa;
	}
	
	 public function index(){
    
		$data['ci']= $this->gedung_model->view();
		//var_dump($data);
		$this->load->view('masterkepala/datagedung',$data);
   }
	
	function input(){
		$this->load->view('masterkepala/input_gedung');
		 $data['ci'] = array();
    
    if($this->input->post('submit')){ 
      $this->gedung_model->save();
      redirect ('gedungkepala/index');
      }
      
	}
	
	function cari(){
$keyword = $this->input->get('submit', TRUE); //mengambil nilai dari form input cari
  $data['ci'] = $this->gedung_model->get_data_cari($keyword); //mencari data 
  $this->load->view('masterkepala/datagedung', $data); //menampilkan data yang sudah dicari

   }
   
       function hapus($id){
  $where = array('ID_Gedung' => $id);
  $this->gedung_model->hapus($where,'gedung');
  redirect('gedungkepala/index');
 }
 
 	 function edit(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$data['ci'] = $this->gedung_model->get_data_edit($id);
		$data['id'] = $id;
     	//var_dump($data);
		$this->load->view('masterkepala/edit_gedung',$data);
	}
	
	
  function update(){
		$id = $this->input->post('ID_Gedung');
		$idOld = $this->uri->segment(3);
		$Nama_Gedung = $this->input->post('Nama_Gedung');
		$Deskripsi = $this->input->post('Deskripsi');
		$NIP = $this->input->post('NIP');
 
		$data = array(
			'ID_Gedung' =>$id,
			'Nama_Gedung' => $Nama_Gedung,
			'Deskripsi' => $Deskripsi,
			'NIP' => $NIP
			);
 
	$where = array(
		'ID_Gedung' => $id
	);
 
	$this->gedung_model->update($where,$data,'gedung');
		redirect('gedungkepala/index');
}
   
   
}
?>
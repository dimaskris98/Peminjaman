<?php
class gedung extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('gedung_model');
		$this->load->view('home/headerm');
		
        //$this->model = $this->Model_Mahasiswa;
	}
	
	 public function index(){
	 	$id = $this->uri->segment(3);
	 	if(isset($id)){
			$data['ci'] = $this->gedung_model->get_data_cari($id);
		}else{
			$data['ci']= $this->gedung_model->view();
		}
		//var_dump($data);
		$this->load->view('master/datagedung',$data);
   }
	
	function input(){
		$this->load->view('master/input_gedung');
		 $data['ci'] = array();
    
    if($this->input->post('submit')){ 
      $this->gedung_model->save();
      redirect ('gedung/index');
      }
      
	}
	
	function cari(){
$keyword = $this->input->post('keyword'); 
  redirect('gedung/index/'.$keyword.''); //mencari data  //menampilkan data yang sudah dicari

   }
   
       function hapus($id){
  $where = array('ID_Gedung' => $id);
  $this->gedung_model->hapus($where,'gedung');
  redirect('gedung/index');
 }
 
 	 function edit(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$data['ci'] = $this->gedung_model->get_data_edit($id);
		$data['id'] = $id;
     	//var_dump($data);
		$this->load->view('master/edit_gedung',$data);
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
		redirect('gedung/index');
}
   
   
}
?>
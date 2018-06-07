<?php
class fasilitas extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('fasilitas_model');
		$this->load->view('home/headerm');
		
        //$this->model = $this->Model_Mahasiswa;
	}
	
	 public function index(){
    $id = $this->uri->segment(3);
	 	if(isset($id)){
			$data['ci'] = $this->fasilitas_model->get_data_cari($id);
		}else{
			$data['ci']= $this->fasilitas_model->view();
		}
		//$data['ci']= $this->fasilitas_model->view();
		//var_dump($data);
		$this->load->view('master/datafasilitas',$data);
   }
	
	function input(){
		$this->load->view('master/input_fasilitas');
		 $data['ci'] = array();
    
    if($this->input->post('submit')){ 
      $this->fasilitas_model->save();
      redirect ('fasilitas/index');
      }
      
	}
	
	function cari(){
		$keyword = $this->input->post('keyword'); 
  redirect('fasilitas/index/'.$keyword.'');
   }
   
       function hapus($id){
  $where = array('ID_Fasilitas' => $id);
  $this->fasilitas_model->hapus($where,'fasilitas');
  redirect('fasilitas/index');
 }
 
 	 function edit(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$data['ci'] = $this->fasilitas_model->get_data_edit($id);
		$data['id'] = $id;
     	//var_dump($data);
		$this->load->view('master/edit_fasilitas',$data);
	}
	
	
  function update(){
		$id = $this->input->post('ID_Fasilitas');
		$idOld = $this->uri->segment(3);
		$Nama_Fasilitas = $this->input->post('Nama_Fasilitas');
 
		$data = array(
			'ID_Fasilitas' =>$id,
			'Nama_Fasilitas' => $Nama_Fasilitas
			);
 
	$where = array(
		'ID_Fasilitas' => $id
	);
 
	$this->fasilitas_model->update($where,$data,'fasilitas');
		redirect('fasilitas/index');
}
   
   
}
?>
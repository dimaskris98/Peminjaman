<?php
class petugas extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('petugas_model');
		$this->load->view('home/headerm');
		
        //$this->model = $this->Model_Mahasiswa;
	}
	
	 public function index(){
    $id = $this->uri->segment(3);
	 	if(isset($id)){
			$data['ci'] = $this->petugas_model->get_data_cari($id);
		}else{
			$data['ci']= $this->petugas_model->view();
		}
		//$data['ci']= $this->petugas_model->view();
		//var_dump($data);
		$this->load->view('master/datapetugas',$data);
   }
	
	function input(){
		$this->load->view('master/input_petugas');
		 $data['ci'] = array();
    
    if($this->input->post('submit')){ 
      $this->petugas_model->save();
      redirect ('petugas/index');
      }
      
	}
	
	function cari(){
$keyword = $this->input->post('keyword'); 
  redirect('petugas/index/'.$keyword.'');

   }
   
       function hapus($id){
  $where = array('NIP' => $id);
  $this->petugas_model->hapus($where,'pegawai');
  redirect('petugas/index');
 }
 
 	 function edit(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$data['ci'] = $this->petugas_model->get_data_edit($id);
		$data['id'] = $id;
     	//var_dump($data);
		$this->load->view('master/edit_petugas',$data);
	}
	
	
  function update(){
		$id = $this->input->post('NIP');
		$idOld = $this->uri->segment(3);
		$Nama_Pegawai = $this->input->post('Nama_Pegawai');
		$NoHp_Pegawai = $this->input->post('NoHp_Pegawai');
		$JK_Pegawai = $this->input->post('JK_Pegawai');
		$Alamat_Pegawai = $this->input->post('Alamat_Pegawai');
 
		$data = array(
			'NIP' =>$id,
			'Nama_Pegawai' => $Nama_Pegawai,
			'NoHp_Pegawai' =>$NoHp_Pegawai,
			'JK_Pegawai' => $JK_Pegawai,
			'Alamat_Pegawai' => $Alamat_Pegawai
			);
 
	$where = array(
		'NIP' => $id
	);
 
	$this->petugas_model->update($where,$data,'pegawai');
		redirect('petugas/index');
}
   
   
}
?>
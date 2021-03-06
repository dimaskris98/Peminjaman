<?php
class masterkepala extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('master_model');
		$this->load->view('home/headerkepala');
		
        //$this->model = $this->Model_Mahasiswa;
	}
	
	 public function index(){
    $id = $this->uri->segment(3);
	 	if(isset($id)){
			$data['ci'] = $this->master_model->get_data_cari($id);
		}else{
			$data['ci']= $this->master_model->view();
		}
		//$data['ci']= $this->master_model->view();
		//var_dump($data);
		$this->load->view('masterkepala/datapengguna',$data);
   }
	
	function input(){
		$this->load->view('masterkepala/input_pengguna');
		 $data['ci'] = array();
    
    if($this->input->post('submit')){ 
      $this->master_model->save();
      redirect ('masterkepala/index');
      }
      
	}
	
	function cari(){
$keyword = $this->input->post('keyword'); 
  redirect('masterkepala/index/'.$keyword.'');

   }
   
       function hapus($id){
  $where = array('NIM' => $id);
  $this->master_model->hapus($where,'pengguna');
  redirect('masterkepala/index');
 }
 
 	 function edit(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$data['ci'] = $this->master_model->get_data_edit($id);
		$data['id'] = $id;
     	//var_dump($data);
		$this->load->view('masterkepala/edit_pengguna',$data);
	}
	
	
  function update(){
		$id = $this->input->post('NIM');
		$idOld = $this->uri->segment(3);
		$nama_pengguna = $this->input->post('nama_pengguna');
		$noHp_pengguna = $this->input->post('noHp_pengguna');
		$jk_pengguna = $this->input->post('jk_pengguna');
		$password = $this->input->post('password');
		$alamat_pengguna = $this->input->post('alamat_pengguna');
 
		$data = array(
			'NIM' =>$id,
			'nama_pengguna' => $nama_pengguna,
			'noHp_pengguna' =>$noHp_pengguna,
			'jk_pengguna' => $jk_pengguna,
			'password' => $password,
			'alamat_pengguna' => $alamat_pengguna
			);
 
	$where = array(
		'NIM' => $id
	);
 
	$this->master_model->update($where,$data,'pengguna');
		redirect('masterkepala/index');
}
   
   
}
?>
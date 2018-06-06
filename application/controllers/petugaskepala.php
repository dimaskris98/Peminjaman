<?php
class petugaskepala extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('petugas_model');
		$this->load->view('home/headerkepala');
		
        //$this->model = $this->Model_Mahasiswa;
	}
	
	 public function index(){
    
		$data['ci']= $this->petugas_model->view();
		//var_dump($data);
		$this->load->view('masterkepala/datapetugas',$data);
   }
	
	function input(){
		$this->load->view('masterkepala/input_petugas');
		 $data['ci'] = array();
    
    if($this->input->post('submit')){ 
      $this->petugas_model->save();
      redirect ('petugaskepala/index');
      }
      
	}
	
	function cari(){
$keyword = $this->input->get('submit', TRUE); //mengambil nilai dari form input cari
  $data['ci'] = $this->petugas_model->get_data_cari($keyword); //mencari data 
  $this->load->view('masterkepala/datapetugas', $data); //menampilkan data yang sudah dicari

   }
   
       function hapus($id){
  $where = array('NIP' => $id);
  $this->petugas_model->hapus($where,'pegawai');
  redirect('petugaskepala/index');
 }
 
 	 function edit(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$data['ci'] = $this->petugas_model->get_data_edit($id);
		$data['id'] = $id;
     	//var_dump($data);
		$this->load->view('masterkepala/edit_petugas',$data);
	}
	
	
  function update(){
		$id = $this->input->post('NIP');
		$idOld = $this->uri->segment(3);
		$Nama_Pegawai = $this->input->post('Nama_Pegawai');
		$NoHp_Pegawai = $this->input->post('NoHp_Pegawai');
		$JK_Pegawai = $this->input->post('JK_Pegawai');
		$Password = $this->input->post('Password');
		$Alamat_Pegawai = $this->input->post('Alamat_Pegawai');
 
		$data = array(
			'NIP' =>$id,
			'Nama_Pegawai' => $Nama_Pegawai,
			'NoHp_Pegawai' =>$NoHp_Pegawai,
			'JK_Pegawai' => $JK_Pegawai,
			'Password' => $Password,
			'Alamat_Pegawai' => $Alamat_Pegawai
			);
 
	$where = array(
		'NIP' => $id
	);
 
	$this->petugas_model->update($where,$data,'pegawai');
		redirect('petugaskepala/index');
}
   
   
}
?>
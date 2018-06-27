<?php
class menukepala extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('login_model');
		$this->load->view('home/headerkepala');
		
        //$this->model = $this->Model_Mahasiswa;
       // $this->session->userdata('status') != "login";
	}

   public function index(){
   	$judul['mode'] = "Diajukan";
   $this->load->view('pengajuankepala/pengajuanview',$judul);
     $id = $this->uri->segment(3);
	 	if(isset($id)){
			$data['ci'] = $this->login_model->get_data_cari($id);
		}else{
			$data['ci']= $this->login_model->ajukan();
		}
  // $this->load->view('pengajuankepala/pengajuanview');
	//	$data['ci']= $this->login_model->ajukan();
		//var_dump($data);
		$this->load->view('pengajuankepala/diajukan',$data);
   }
   
	 public function disetujui(){
		 $judul['mode'] = "Disetujui";
		$this->load->view('pengajuankepala/pengajuanview',$judul);
		$data['ci']= $this->login_model->setuju();
		$this->load->view('pengajuankepala/diajukan',$data);
   }
   
    public function ditolak(){
    $judul['mode'] = "Ditolak";
		$this->load->view('pengajuankepala/pengajuanview',$judul);
		$data['ci']= $this->login_model->tolak();
		$this->load->view('pengajuankepala/diajukan',$data);
   }
   
    public function semua(){
		$judul['mode'] = "Semua";
    $this->load->view('pengajuankepala/pengajuanview',$judul);
		$data['ci']= $this->login_model->semua();
		$this->load->view('pengajuankepala/diajukan',$data);
   }
	
	
	function detail(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$data['ci'] = $this->login_model->detail($id);
		$data['cii'] = $this->login_model->detaillist($id);
		$data['id'] = $id;
     	//var_dump($data);
		$this->load->view('pengajuankepala/detail',$data);
	}
	
	
   
   function cari(){
$keyword = $this->input->post('keyword'); 
  redirect('menukepala/index/'.$keyword.'');

   }
   
    function hapus($id){
  $where = array('ID_Peminjam' => $id);
  $this->login_model->hapus($where,'peminjaman');
  redirect('menukepala/index');
 }
 
 	 function edit(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$data['ci'] = $this->login_model->get_data_edit($id);
		$data['id'] = $id;
     	//var_dump($data);
		$this->load->view('pengajuankepala/edit_pengajuan',$data);
	}
	
	
  function update(){
		$id = $this->input->post('ID_Peminjam');
		$idOld = $this->uri->segment(3);
		$NIM = $this->input->post('NIM');
		$Nama_Pengguna = $this->input->post('Nama_Pengguna');
		$Nama_Gedung = $this->input->post('Nama_Gedung');
		$Keperluan = $this->input->post('Keperluan');
		$Tanggal_pinjam = $this->input->post('Tanggal_pinjam');
		$Lama_pinjam = $this->input->post('Lama_pinjam');
		$Status = $this->input->post('Status');
 
		$data = array(
		    'ID_Peminjam' =>$id,'NIM' =>$NIM,
			'Keperluan' => $Keperluan,
			'Tanggal_pinjam' =>$Tanggal_pinjam,
			'Lama_pinjam' => $Lama_pinjam,
			'Status' => $Status
			);
 
	$where = array(
		'ID_Peminjam' => $id
	);
 
	$this->login_model->update($where,$data,'peminjaman');
		redirect('menukepala/index');
}


public function info(){
   
		$data['ci']= $this->login_model->info();
		$this->load->view('pengajuan/info',$data);
   }
   
   
   public function laporan(){
   
		$data['ci']= $this->login_model->laporan();
		$this->load->view('pengajuankepala/laporan',$data);
   }





	}
?>
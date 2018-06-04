<?php
class menu extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('login_model');
		$this->load->view('home/headerm');
		
        //$this->model = $this->Model_Mahasiswa;
	}

   public function index(){
    
   $this->load->view('pengajuan/pengajuanview');
		$data['ci']= $this->login_model->ajukan();
		//var_dump($data);
		$this->load->view('pengajuan/diajukan',$data);
   }
   
	 public function disetujui(){
   
		$this->load->view('pengajuan/pengajuanview');
		$data['ci']= $this->login_model->setuju();
		$this->load->view('pengajuan/diajukan',$data);
   }
   
    public function ditolak(){
    
		$this->load->view('pengajuan/pengajuanview');
		$data['ci']= $this->login_model->tolak();
		$this->load->view('pengajuan/diajukan',$data);
   }
   
    public function semua(){
    $this->load->view('pengajuan/pengajuanview');
		$data['ci']= $this->login_model->semua();
		$this->load->view('pengajuan/diajukan',$data);
   }
	
	
	function detail(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$data['ci'] = $this->login_model->detail($id);
		$data['cii'] = $this->login_model->detaillist($id);
		$data['id'] = $id;
     	//var_dump($data);
		$this->load->view('pengajuan/detail',$data);
	}
	
	public function info(){
   
		$data['ci']= $this->login_model->info();
		$this->load->view('pengajuan/info',$data);
   }
   
   function cari(){
$keyword = $this->input->get('submit', TRUE); //mengambil nilai dari form input cari
  $data['ci'] = $this->login_model->get_data_cari($keyword); //mencari data karyawan berdasarkan inputan
  $this->load->view('pengajuan/pengajuanview');
  $this->load->view('pengajuan/diajukan', $data); //menampilkan data yang sudah dicari

   }
   
    function hapus($id){
  $where = array('ID_Peminjam' => $id);
  $this->login_model->hapus($where,'peminjaman');
  redirect('menu/index');
 }
 
 	 function edit(){
 	 	
 	 	$id = $this->uri->segment(3);
		//var_dump($id);
		//echo $id;
		$data['ci'] = $this->login_model->get_data_edit($id);
		$data['id'] = $id;
     	//var_dump($data);
		$this->load->view('pengajuan/edit_pengajuan',$data);
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
		redirect('menu/index');
}



	}
?>
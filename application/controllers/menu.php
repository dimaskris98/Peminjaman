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
		$this->load->view('pengajuan/diajukan',$data);
   }
	
	public function _remap($var){
		if(isset($var)){
		switch(strtolower($var)){
		case 'ditolak':
		$this->load->view('pengajuan/pengajuanview');
		$data['ci']= $this->login_model->tolak();
		$this->load->view('pengajuan/diajukan',$data);
			break;
			
		case 'disetujui':
		$this->load->view('pengajuan/pengajuanview');
		$data['ci']= $this->login_model->setuju();
		$this->load->view('pengajuan/diajukan',$data);
			break;
		case 'semua':
			$this->load->view('pengajuan/pengajuanview');
		$data['ci']= $this->login_model->semua();
		$this->load->view('pengajuan/diajukan',$data);
			break;
			case 'info':
		$this->load->view('infojadwal/list_jadwal');
		$data['ci']= $this->login_model->info();
		$this->load->view('infojadwal/list_jadwal',$data);
			break;
		default:
			$this->index();
			}
		}
		else {
			$this->index();
		}
	}
   
   function home(){
		if(isset($_POST['submit'])){
			//$data = $this->Model_Mahasiswa->get_data();
		$data = array(
				'data'=>$this->login_model->cari($_POST['keyword'])); //dimasukkan array ex container cara 1
		//$this->load->view('App/list_mhs',['data' => $data]);
		$this->load->view('pengajuan/diajukan',$data); //manggil array dan variabel cara 1
		// view jg bisa dipangil
		}else{
			//$data = $this->Model_Mahasiswa->get_data();
		$data = array( 'data'=>$this->login_model->ajukan()); //dimasukkan array ex container cara 1
		//$this->load->view('App/list_mhs',['data' => $data]);
		$this->load->view('pengajuan/diajukan',$data); //manggil array dan variabel cara 1
		// view jg bisa dipangil
		}
   }
   
   
    
   
}
?>
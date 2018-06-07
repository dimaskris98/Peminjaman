<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		 $this->load->model('login_model');
        //$this->model = $this->Model_Mahasiswa;
	}
	
	
 public function index() {
 $data=array('title'=>'Peminjaman Gedung',
 'isi' =>'home/index_home'
 );
 $this->load->view('layout/wrapper',$data); 
 }
 	function cek_login(){
  $username = $this->input->post('username');
  $password = $this->input->post('password');
  $where = array(
   'Nama_Pegawai' => $username,
   'Password' => $password);
   
  $cek = $this->login_model->cek_login("pegawai",$where)->num_rows(1);
  if($cek > 0){

   $data_session = array(
    'Nama_Pegawai' => $username,
    'status' => "login");
    
if($username != 'ali'){
	redirect(base_url("menu"));
}
elseif($username == 'ali'){
	redirect(base_url("menukepala"));
}
   //$this->session->set_userdata($data_session);
  // redirect(base_url("menu"));

  }else{
   echo "<script type='text/javascript'>
               alert ('Maaf Username Dan Password Anda Salah !');

      </script>";
  }
}
function logout(){
  $this->session->sess_destroy();
  redirect(base_url('home/index'));
 }
}
?>
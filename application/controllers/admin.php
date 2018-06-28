<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin extends CI_Controller {
 public function index() {
 $data=array('title'=>'Peminjaman Gedung',
 'isi' =>'home/index_home'
 );
 $this->load->view('css_admin',$data);
 }
}
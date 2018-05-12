<?php
class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('head');
		$this->load->view('footer');
	}
}

?>
<?php
class user_model extends CI_Model{
	public $username;
	public $password;
	
	
	//<!--public function _construct(){
	//	parent :: _construct();
	//	$this->labels = $this->atribut_labels();
	//}-->
	
	public function authentikasi(){
		if(isset($this->username) && isset($this->password)){
			if($this->username === 'demo' && $this->password ==='demo'){
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
		else{
			return FALSE;
		}
	
}
}
?>
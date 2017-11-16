<?php 
class Tablebook extends CI_Controller{
	public function index(){
	$var=$this->input->post();
	//print_r($var);exit;
	$this->load->model('Postsubmit');
	if($this->Postsubmit->table($var)){
		return redirect('Home');
	}
	
	}
}
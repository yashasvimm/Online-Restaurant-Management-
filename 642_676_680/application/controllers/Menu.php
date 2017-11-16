<?php
class Menu extends CI_Controller{
public function index(){
	return redirect('Home');
}
public function breakfast($data){
$this->load->model('Items');
$var=$this->Items->breakfast($data);

$this->load->view('breakfast',['var'=>$var]);

}
public function lunch($data){
	$this->load->model('Items');
	$var=$this->Items->lunch($data);

$this->load->view('lunch',['var'=>$var]);

	
}
public function dinner($data){
	$this->load->model('Items');
	$var=$this->Items->dinner($data);
   $this->load->view('dinner',['var'=>$var]);
	
}
public function snacks($data){
	$this->load->model('Items');
   $var=$this->Items->snacks($data);
   $this->load->view('snacks',['var'=>$var]);
	
}




}
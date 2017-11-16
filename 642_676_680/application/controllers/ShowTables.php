<?php
class ShowTables extends CI_Controller{
	public function index(){
		$this->load->model('Items');
		$var=$this->Items->fetch_table();
		$this->load->view('showtable.php',['var'=>$var]);

	}
}
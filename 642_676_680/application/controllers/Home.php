<?php
class Home extends CI_Controller{

public function index(){

$this->load->model('Items');
$item=$this->Items->fetch_items();
//print_r($item);exit;
$this->load->view('index',['item'=>$item]);



}




}









?>
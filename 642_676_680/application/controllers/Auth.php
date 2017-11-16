<?php 
class Auth extends CI_Controller{
	public function index(){
		$this->load->view('auth');
	}
	public function signup(){
		$var=$this->input->post();
		unset($var['submit']);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Name','required');
		$this->form_validation->set_rules('firstname','Blood Group','required');
		$this->form_validation->set_rules('lastname','Age','required');
		$this->form_validation->set_rules('password','Address','required');
		
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if ( $this->form_validation->run()==TRUE)
		{
			
			
			$var['password']=sha1($var['password']);
			$this->load->model('Login');
			if ($this->Login->signup($var)==TRUE)
			{
				$this->session->set_flashdata('feedback','Succefully Registred. Please verify your email');
			}
			else
			{
				$this->session->set_flashdata('feedback','Registration Failed');
			}
			
		}
		else
		{
			echo validation_errors();
			
		
	}
}
}
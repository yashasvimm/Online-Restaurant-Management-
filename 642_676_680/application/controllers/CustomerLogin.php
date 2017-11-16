<?php
class CustomerLogin extends CI_Controller{
public function index(){
$this->load->view('customlogin');


}
public function dologin(){
		$this->form_validation->set_rules('username','Username','required|trim|min_length[4]');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[4]');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if ($this->form_validation->run()==TRUE)
		{

			$username=$this->input->post('username');
			$password=$this->input->post('password');
			
			$this->load->model('Dologin');
			$log=$this->Dologin->foologin($username,$password);
			if ($log){
					$this->session->set_userdata('id',$log);
					$this->session->set_userdata('name',$log->username);
					return redirect('Home');


			}else{
				$this->session->set_flashdata('invalid','Invalid Username or Password');
				return redirect('Login');


			}



		}
		else{
			$this->load->view('customlogin');


		}

		


	}
	public function logout(){
		$this->session->unset_userdata('id');
	    return redirect('Home');
	}
}



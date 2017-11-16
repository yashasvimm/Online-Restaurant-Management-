<?php
class Clogin extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}

	public function calllogin()
	{
		$this->form_validation->set_rules('username','Username','required|trim|min_length[4]');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[4]');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if ($this->form_validation->run()==TRUE)
		{

			$username=$this->input->post('username');
			$password=$this->input->post('password');
			
			$this->load->model('Login');
			$log=$this->Login->Dologin($username,$password);
			if ($log){
					$this->session->set_userdata('id',$log);
					$this->session->set_userdata('name',$log->username);
					return redirect('Upload');


			}else{
				$this->session->set_flashdata('invalid','Invalid Username or Password');
				return redirect('Clogin');


			}



		}
		else{
			$this->load->view('login');


		}

		


	}
	public function logout(){
		$this->session->unset_userdata('id');
		return redirect('Clogin');
	}
}
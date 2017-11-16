<?php
class Upload extends CI_Controller{

public function index()
{
if (!$this->session->userdata('id'))
return redirect('Clogin');
$this->load->view('post');




}
public function thumbnail($file_name)
{

	$config['image_library'] = 'gd2';
	$config['source_image'] = './assets/postimage/'.$file_name;
	$config['new_image'] = './assets/thumbnails/'.$file_name;
	$config['maintain_ratio'] = TRUE;
	$config['width']         = 300;
	$config['height']       = 157;

	$this->load->library('image_lib', $config);

	$this->image_lib->resize();


}
public function menu()
{
	$config=[
		'upload_path'=> './assets/postimage',
		'allowed_types'=>'*',
		'max_size'=>'1024',
		'max_width'=>'1024',
		'max_height'=>'768'
	];
	$this->load->library('form_validation');
	$this->load->library('upload',$config);
$this->form_validation->set_rules('type','Menu Type','required|max_length[13]');
$this->form_validation->set_rules('subtype','Menu','required|max_length[13]');
$this->form_validation->set_rules('title','Title','required');
$this->form_validation->set_rules('quantity','Description','required|numeric');
$this->form_validation->set_rules('description','Quantity','required');
$this->form_validation->set_rules('price','Price','required|numeric');

   $this->form_validation->set_error_delimiters("<p class='text-danger'>", "</p>");
if ($this->form_validation->run() && $this->upload->do_upload()  )
{
	
	$post=$this->input->post();
	//print_r($post);exit;
	unset($post['submit']);
	
	$data=$this->upload->data();
	
	
		$link=("/assests/postimage/".$data['raw_name'].$data['file_ext']);
		$file_name=($data['raw_name'].$data['file_ext']);
		$this->thumbnail($file_name);
		$file_name=("/assests/thumbnails/".$data['raw_name'].$data['file_ext']);
		$post['thumbnails']=$file_name;
		$post['link']=$link;
		//$post['url']=$url;
		//print_r($post);exit;
	$this->load->model('Postsubmit');
	if ($this->Postsubmit->submitpost($post))
	{
	
		$this->session->set_flashdata('feedback','Menu Successfully Submitted');
	}
	else{
		//echo "hello";
		$this->session->set_flashdata('feedback','Menu Submission Failed');
	}
	return redirect('Upload');
}
else{
	echo "error";
	
	$upload_error=$this->upload->display_errors();
	$this->load->view('post',compact('upload_error'));
}

}

}


 <?php 
 class Detail extends CI_Controller{
 	public function index(){
 		return redirect('Home');
 	}
 	public function item($id){
 		$this->load->model('Items');
 		$var=$this->Items->fetch_data($id);
 		$this->load->view('detail',['var'=>$var]);

 	}

 }
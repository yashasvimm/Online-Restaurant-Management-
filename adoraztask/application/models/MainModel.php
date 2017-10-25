<?php 
class MainModel extends CI_Controller{

	public function get_product(){
		$data=$this->db->order_by("p_id","desc")
				->get('products');
				if($data){
					return $data;
				}else{
					return FALSE;
				}
	}
}
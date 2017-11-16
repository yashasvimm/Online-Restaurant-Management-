<?php 
class Items extends CI_Model{
	public function breakfast($var){
      	$this->db->where('type',$var);
   	    	$query = $this->db->get('items');
   	    	return $query->result();

	}
	public function lunch($var){
      	$this->db->where('type',$var);
   	    	$query = $this->db->get('items');
   	    	return $query->result();

	}
	public function snacks($var){
      	$this->db->where('type',$var);
   	    	$query = $this->db->get('items');
   	    	return $query->result();

	}
	public function dinner($var){
      	$this->db->where('type',$var);
   	    	$query = $this->db->get('items');
   	    	return $query->result();

	}
   public function fetch_items(){
      //$this->db->where('type',$var);
            $query = $this->db->get('items');
            return $query->result();
   }
   public function fetch_data($id){
            $this->db->where('id',$id);
            $query = $this->db->get('items');
            return $query->result();
   }
    public function fetch_table(){
            $query = $this->db->get('booktable');
            return $query->result();
   }
}
<?php
class Postsubmit extends CI_Model{
public function submitpost($post){
return $this->db->insert('items',$post);
}
public function table($var){
return $this->db->insert('booktable',$var);
}

}
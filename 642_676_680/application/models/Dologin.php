<?php
class Dologin extends CI_Model{

public function foologin($username,$password)
{

$result=$this->db->where(['username'=>$username,'password'=>$password])->get('admin');
if ($result->num_rows())
{

	return $result->row();
}else{
	return false;
}

}



}
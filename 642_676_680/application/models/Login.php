<?php
class Login extends CI_Model{

public function dologin($username,$password)
{

$result=$this->db->where(['username'=>$username,'password'=>$password])->get('admin');
if ($result->num_rows())
{

	return $result->row();
}else{
	return false;
}

}
public function do_login($username,$password)
{

$result=$this->db->where(['username'=>$username,'password'=>$password])->get('admin');
if ($result->num_rows())
{

	return $result->row();
}else{
	return false;
}

}
public function signup($var){
	return $this->db->insert('user',$var);
}



}
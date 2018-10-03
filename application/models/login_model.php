<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	
	public function prosesLogin($user,$pass){
		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		return $this->db->get('asisten_pembimbing')->row();
	}
	public function ambiljabatan($user){
		$query = $this->db->query('select jabatan from asisten_pembimbing where username = "' .$user .'"');
		return $query->row();
	}
}

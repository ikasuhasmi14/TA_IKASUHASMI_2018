<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_spp extends CI_Model {
	
	function getSpp(){
  $get_user = $this->db->get('spp');
		return $get_user->result_array();
 }
 function select_token(){
  $get_user = $this->db->get('fcm_info');
		return $get_user->result_array();
 }
	
	
	public function tambahData($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function editData($table_name,$data,$id){
		$this->db->where('id_spp',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;

	}
	
	public function hapusData($table_name,$id){
		$this->db->where('id_spp',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	public function dataEdit($table_name,$id){
		 
  		$this->db->where('id_spp',$id);
		$query = $this->db->get($table_name);
		return $query->row();
	}


	//spp english

	function getSpp2(){
  $get_user = $this->db->get('spp2');
		return $get_user->result_array();
 }

 function select_token2(){
  $get_user = $this->db->get('fcm_info');
		return $get_user->result_array();
 }
public function tambahSpp2($table_name,$data){
		$tambahspp2 = $this->db->insert($table_name,$data);
		return $tambahspp2;
	}
	
	public function editSpp2($table_name,$data,$id){
		$this->db->where('id_spp2',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;

	}
	
	public function hapusSpp2($table_name,$id){
		$this->db->where('id_spp2',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	public function dataEditspp2($table_name,$id){
		 
  		$this->db->where('id_spp2',$id);
		$query = $this->db->get($table_name);
		return $query->row();
	}


}

	
	


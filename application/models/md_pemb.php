<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_pemb extends CI_Model {

	//Asisten math
	
	public function getAsisten($table_name){
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}

	public function getAsistenmath(){
		$get_user = $this->db->get('data_pemb');
		return $get_user->result_array();
	}
	public function getAsisteneng(){
		$get_user = $this->db->get('data_siswaenglish');
		return $get_user->result_array();
	}

	

	public function tambahData($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function editData($table_name,$data,$id){
		$this->db->where('id_asisten',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	
	public function hapusData($table_name,$id){
		$this->db->where('id_asisten',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	
	public function dataEdit($table_name,$id){
		$this->db->where('id_asisten',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}

	//Asisten english

	

	public function getAssist(){
		$get_user = $this->db->get('data_pemb2');
		return $get_user->result_array();
	}

	

	public function tambahDataEng($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function editDataEng($table_name,$data,$id){
		$this->db->where('id_assist',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	
	public function hapusDataEng($table_name,$id){
		$this->db->where('id_assist',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	
	public function dataEditEng($table_name,$id){
		$this->db->where('id_assist',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}
	
		
}

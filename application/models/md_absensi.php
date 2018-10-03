<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_absensi extends CI_Model {
	
	

	function getAbsen(){
		$get_user = $this->db->get('absensis');
		return $get_user->result_array();
 }

 function select_token(){
  $get_user = $this->db->get('fcm_info');
		return $get_user->result_array();
 }
 	function getAbsen2(){
		$get_user = $this->db->get('absensis');
		return $get_user->result_array();
 }

	public function tambahData($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function editData($table_name,$data,$id){
		$this->db->where('id_absensis',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;

	}
	
	public function hapusData($table_name,$id){
		$this->db->where('id_absensis',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	public function dataEdit($table_name,$id){
		 
  		$this->db->where('id_absensis',$id);
		$query = $this->db->get($table_name);
		return $query->row();
	}

	function id_absensis(){
        $query = $this->db->get('id_absensis');
        return $query->result_array();
    }

//pembimbing


	function getAbsenpemb(){
		$get_user = $this->db->get('absen');
		return $get_user->result_array();
 }

 

	public function tambahDatapemb($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function editDatapemb($table_name,$data,$id){
		$this->db->where('id_absen',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;

	}
	
	public function hapusDatapemb($table_name,$id){
		$this->db->where('id_absen',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	public function dataEditpemb($table_name,$id){
		 
  		$this->db->where('id_absen',$id);
		$query = $this->db->get($table_name);
		return $query->row();
	}

	function id_absen(){
        $query = $this->db->get('id_absen');
        return $query->result_array();
    }

//absen coba

function getAbsenCoba(){
		$get_user = $this->db->get('absen_coba');
		return $get_user->result_array();
 }

 

	public function tambahDatacoba($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;}
	
	public function editDatacoba($table_name,$data,$id){
		$this->db->where('id_absencoba',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;

	}
	
	public function hapusDatacoba($table_name,$id){
		$this->db->where('id_absencoba',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	public function dataEditcoba($table_name,$id){
		 
  		$this->db->where('id_absencoba',$id);
		$query = $this->db->get($table_name);
		return $query->row();
	}

	function id_absencoba(){
        $query = $this->db->get('id_absencoba');
        return $query->result_array();
    }


	
}

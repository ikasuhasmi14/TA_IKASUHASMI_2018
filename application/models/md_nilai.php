<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_nilai extends CI_Model {
	
	function getNilai(){
  $get_user = $this->db->get('data_nilai');
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
		$this->db->where('id_nilai',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;

	}
	
	public function hapusData($table_name,$id){
		$this->db->where('id_nilai',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	public function dataEdit($table_name,$id){
		 
  		$this->db->where('id_nilai',$id);
		$query = $this->db->get($table_name);
		return $query->row();
	}

	public function dataMahasiswa()
	{
		$sql = $this->db->query('select * from data_siswa join data_nilai on data_siswa.id_siswa = data_nilai.id_siswa');
		return $sql->result();
	}


//english

	function getNilai2(){
  $get_user = $this->db->get('data_nilai2');
		return $get_user->result_array();
 }
 function select_token2(){
  $get_user = $this->db->get('fcm_info');
		return $get_user->result_array();
 }
	
	
	public function tambEng($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function edEng($table_name,$data,$id){
		$this->db->where('id_nilai',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;

	}
	
	public function hpsEng($table_name,$id){
		$this->db->where('id_nilai',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	public function datedEng($table_name,$id){
		 
  		$this->db->where('id_nilai',$id);
		$query = $this->db->get($table_name);
		return $query->row();
	}

	public function dataMahasiswaeng()
	{
		$sql = $this->db->query('select * from data_siswaenglish join data_nilai2 on data_siswaenglish.id_siswaenglish = data_nilai2.id_siswaenglish');
		return $sql->result();
	}


	//nilai coba gratis
function getNilaicoba(){
  $get_user = $this->db->get('data_nilaicoba');
		return $get_user->result_array();
 }

	
	
	public function tambcoba($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function edcoba($table_name,$data,$id){
		$this->db->where('id_nilaicoba',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;

	}
	
	public function hpscoba($table_name,$id){
		$this->db->where('id_nilaicoba',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	public function datedcoba($table_name,$id){
		 
  		$this->db->where('id_nilaicoba',$id);
		$query = $this->db->get($table_name);
		return $query->row();
	}

	public function dataSiswacoba()
	{
		$sql = $this->db->query('select * from coba join data_nilaicoba on coba.id_coba = data_nilaicoba.id_coba');
		return $sql->result();
	}


	//nilai coba gratis english
function getNilaicoba2(){
  $get_user = $this->db->get('data_nilaicoba2');
		return $get_user->result_array();
 }

	
	
	public function tambcoba2($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function edcoba2($table_name,$data,$id){
		$this->db->where('id_nilaicoba2',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;

	}
	
	public function hpscoba2($table_name,$id){
		$this->db->where('id_nilaicoba2',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	public function datedcoba2($table_name,$id){
		 
  		$this->db->where('id_nilaicoba2',$id);
		$query = $this->db->get($table_name);
		return $query->row();
	}

	public function dataSiswacoba2()
	{
		$sql = $this->db->query('select * from coba2 join data_nilaicoba2 on coba2.id_coba2 = data_nilaicoba2.id_coba2');
		return $sql->result();
	}

	
}

	
	


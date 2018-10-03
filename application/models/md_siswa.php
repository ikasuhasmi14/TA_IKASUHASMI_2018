<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Md_siswa extends CI_Model {

	//siswa math
	
	public function getUser($table_name){
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}

	public function getUserMath(){
		$get_user = $this->db->get('data_siswa');
		return $get_user->result_array();
	}
	public function getUserEnglish(){
		$get_user = $this->db->get('data_siswaenglish');
		return $get_user->result_array();
	}

	public function getsertif(){
		$sql = $this->db->query('select * from data_siswa where (nilailevel - kelas) >= 2; ');
		return $sql-> result_array();
	}


	public function tambahData($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}
	
	public function editData($table_name,$data,$id){
		$this->db->where('id_siswa',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	
	public function hapusData($table_name,$id){
		$this->db->where('id_siswa',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	
	public function dataEdit($table_name,$id){
		$this->db->where('id_siswa',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}

	//siswa english

	public function getEnglish($table_name){
		$get_english = $this->db->get($table_name);
		return $get_english->result_array();
	}

	public function tambahEng($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}

	public function editDataeng($table_name,$data,$id){
		$this->db->where('id_siswaenglish',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	
	public function hapusDataeng($table_name,$id){
		$this->db->where('id_siswaenglish',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	
	public function dataEditeng($table_name,$id){
		$this->db->where('id_siswaenglish',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}

	//coba gratis

	public function getCoba($table_name){
		$get_english = $this->db->get($table_name);
		return $get_english->result_array();
	}

	public function tambahCoba($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}

	public function editDataCoba($table_name,$data,$id){
		$this->db->where('id_coba',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	
	public function hapusDataCoba($table_name,$id){
		$this->db->where('id_coba',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	
	public function dataEditCoba($table_name,$id){
		$this->db->where('id_coba',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}


//coba gratis english

	public function getCoba2($table_name){
		$get_english = $this->db->get($table_name);
		return $get_english->result_array();
	}

	public function tambahCoba2($table_name,$data){
		$tambah = $this->db->insert($table_name,$data);
		return $tambah;
	}

	public function editDataCoba2($table_name,$data,$id){
		$this->db->where('id_coba2',$id);
		$edit = $this->db->update($table_name,$data);
		return $edit;
	}
	
	public function hapusDataCoba2($table_name,$id){
		$this->db->where('id_coba2',$id);
		$hapus = $this->db->delete($table_name);
		return $hapus;
		
	}
	
	public function dataEditCoba2($table_name,$id){
		$this->db->where('id_coba2',$id);
		$get_user = $this->db->get($table_name);
		return $get_user->row();
	}

	public function getKelasMath(){
		$query=$this->db->query('select distinct kelas as kat_kelas from data_siswa');
			return $query->result();	
	}

	public function getLevelMath(){
		$query=$this->db->query('select distinct level as kat_level from data_siswa');
			return $query->result();
	}

	public function getLevelAwalMath(){
		$query=$this->db->query('select distinct level_awal as kat_level from data_siswa');
			return $query->result();
	}

	function nama_bulan(){
		$query=$this->db->query('select distinct month(tanggal_masuk) as bulan_masuk , year(tanggal_masuk) as tahun_masuk
			from data_siswa ');
			return $query->result();
	}
	
	function tahun_jual(){
		$query=$this->db->query('select distinct year(tanggal_masuk) as tahun_masuk
			from data_siswa ');
			return $query->result();
	}

	public function getSertifikatMath(){
		$query=$this->db->query('select distinct status_sertifikat as kat_sertifikat from data_siswa');
			return $query->result();
	}
		
	public function getKelasEng(){
		$query=$this->db->query('select distinct kelas as kat_kelas from data_siswaenglish');
			return $query->result();	
	}

	public function getLevelEng(){
		$query=$this->db->query('select distinct level as kat_level from data_siswaenglish');
			return $query->result();
	}

	public function getLevelAwalEng(){
		$query=$this->db->query('select distinct level_awal as kat_level from data_siswaenglish');
			return $query->result();
	}

	public function getSertifikatEng(){
		$query=$this->db->query('select distinct status_sertifikat as kat_sertifikat from data_siswaenglish');
			return $query->result();
	}

	public function getDataSiswaMathPerKelas($kelas){
		$query=$this->db->query('select * from data_siswa where kelas = "' .$kelas.'"');
		return $query->result();
	}

	public function getDataSiswaMathPerLevel($level){
		$query=$this->db->query('select * from data_siswa where level = "' .$level.'"');
		return $query->result();
	}

	public function getDataSiswaMathPerLevelAwal($level){
		$query=$this->db->query('select * from data_siswa where level_awal = "' .$level.'"');
		return $query->result();
	}

	public function getDataSiswaMathPerSertifikat($sertifikat){
		$query=$this->db->query('select * from data_siswa where status_sertifikat = "' .$sertifikat.'"');
		return $query->result();
	}

	public function getDataSiswaEngPerKelas($kelas){
		$query=$this->db->query('select * from data_siswaenglish where kelas = "' .$kelas.'"');
		return $query->result();
	}

	public function getDataSiswaEngPerLevel($level){
		$query=$this->db->query('select * from data_siswaenglish  where level = "' .$level.'"');
		return $query->result();
	}

	public function getDataSiswaEngPerLevelAwal($level){
		$query=$this->db->query('select * from data_siswaenglish  where level_awal = "' .$level.'"');
		return $query->result();
	}

	public function getDataSiswaEngPerSertifikat($sertifikat){
		$query=$this->db->query('select * from data_siswaenglish  where status_sertifikat = "' .$sertifikat.'"');
		return $query->result();
	}

	public function get_data_grafik(){
		$query=$this->db->query(
			'SELECT  
			(SELECT COUNT(subject_mp) FROM data_siswa) AS jml_math,
			(SELECT COUNT(subject_mp) FROM data_siswaenglish) AS jml_eng
			FROM    dual'
	);
	}

	public function getReports(){
		$get_rep = $this->db->get('data_siswa');
		return $get_rep->result_array();
	}

	public function getDataReportSiswa()
	{
		$sql2 = "select A.nama,A.kelas,A.level,A.level_target,
(CASE WHEN (CASE WHEN A.level_awal='7A' THEN 0
 WHEN A.level_target='6A' THEN 1
 WHEN A.level_target='5A' THEN 2
 WHEN A.level_target='4A' THEN 3
 WHEN A.level_target='3A' THEN 4
 WHEN A.level_target='2A' THEN 5
 WHEN A.level_target='A' THEN 6
 WHEN A.level_target='B' THEN 7
 WHEN A.level_target='C' THEN 8
 WHEN A.level_target='D' THEN 9
 WHEN A.level_target='E' THEN 10
 WHEN A.level_target='F' THEN 11
 WHEN A.level_target='G' THEN 12
 WHEN A.level_target='H' THEN 13
 WHEN A.level_target='I' THEN 14
 WHEN A.level_target='J' THEN 15
 WHEN A.level_target='K' THEN 16
 WHEN A.level_target='L' THEN 17
 WHEN A.level_target='M' THEN 18
 WHEN A.level_target='N' THEN 19
 WHEN A.level_target='O' THEN 20
 ELSE '21' END
)<=(CASE WHEN A.level='7A' THEN 0
 WHEN A.level='6A' THEN 1
 WHEN A.level='5A' THEN 2
 WHEN A.level='4A' THEN 3
 WHEN A.level='3A' THEN 4
 WHEN A.level='2A' THEN 5
 WHEN A.level='A' THEN 6
 WHEN A.level='B' THEN 7
 WHEN A.level='C' THEN 8
 WHEN A.level='D' THEN 9
 WHEN A.level='E' THEN 10
 WHEN A.level='F' THEN 11
 WHEN A.level='G' THEN 12
 WHEN A.level='H' THEN 13
 WHEN A.level='I' THEN 14
 WHEN A.level='J' THEN 15
 WHEN A.level='K' THEN 16
 WHEN A.level='L' THEN 17
 WHEN A.level='M' THEN 18
 WHEN A.level='N' THEN 19
 WHEN A.level='O' THEN 20
 ELSE '21' END
) THEN 'TERCAPAI' ELSE 'TIDAK TERCAPAI' END) as Status
FROM data_siswa A";

$query=$this->db->query($sql2);
return $query->result();
	}
}

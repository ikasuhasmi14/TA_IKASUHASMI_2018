<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_beranda extends CI_Controller {

	// function __construct(){
 //        parent::__construct();
 //        // konfigurasi helper & library
 //        $this->load->helper('url');
 //        $this->load->library('pagination');
 //        $this->load->database();
 //    }

	

	public function index()
	{
		$data = array(
			'sertif' => $this->md_siswa->getsertif(),
			'mathsiswa' => $this->md_siswa->getUserMath(),
			'englishsiswa' =>$this->md_siswa->getUserEnglish(),
		);
		$this->load->view('index',$data);

	}

	public function reports()
	{
		
		$this->data['hasil'] = $this->md_siswa->getReports('data_siswa');
		$this->data['dataWow'] = $this->md_siswa->getDataReportSiswa();

		$this->load->view('reports', $this->data);

	}

	public function get_data_gf()
	{
		$data = $this->md_siswa->get_data_grafik(); 
		$responce->cols[] = array( 
            "id" => "", 
            "label" => "Math", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "English", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => (int)$cd->jml_math, 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->jml_eng, 
                    "f" => null 
                ) 
            ); 
            } 
        echo json_encode($responce); 
        } 

    // function paging(){
    //     // konfigurasi class pagination
    //     $config['base_url']=base_url()."index.php/kontak/index";
    //         $config['total_rows']= $this->db->query("SELECT * FROM telepon;")->num_rows();
    //         $config['per_page']=3;
    //     $config['num_links'] = 2;
    //         $config['uri_segment']=3;
    //         $config['first_link']='< Pertama ';
    //     $config['last_link']='Terakhir > ';
    //     $config['next_link']='> ';
    //     $config['prev_link']='< ';
    //         $this->pagination->initialize($config);
 
    //     // konfigurasi model dan view untuk menampilkan data
    //     $this->load->model('m_kontak');
    //     $data['datakontak']=$this->m_kontak->getAll($config);
    //     $this->load->view('v_kontak', $data);
    // }
	
	public function menu_daftarsiswa()
	{
		$this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
		$this->load->view('menu_daftarsiswa', $this->data);
	
	}
	public function menu_daftarsiswaAdmin()
	{
		$this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
		$this->load->view('menu_daftarsiswaAdmin', $this->data);
	
	}

	public function coba()
	{
		$this->data['hasil'] = $this->md_siswa->getCoba('coba');
		$this->load->view('coba', $this->data);
	
	}

	public function cobaAdmin()
	{
		$this->data['hasil'] = $this->md_siswa->getCoba('coba');
		$this->load->view('cobaAdmin', $this->data);
	
	}

	public function coba2()
	{
		$this->data['hasil'] = $this->md_siswa->getCoba2('coba2');
		$this->load->view('coba2', $this->data);
	
	}

	public function coba2Admin()
	{
		$this->data['hasil'] = $this->md_siswa->getCoba2('coba2');
		$this->load->view('coba2Admin', $this->data);
	
	}

	public function cobapopup()
	{
		
		$this->load->view('cobapopup');
	
	}
	// SPP
		//notif

	public function tesspp(){
$id_siswa = $_POST['id_siswa'];		
$nama = $_POST['nama'];
$subject_mp = $_POST['subject_mp'];
$bulan = $_POST['bulan'];
$path_to_fcm = 'https://fcm.googleapis.com/fcm/send';
$server_key ="AIzaSyDbfUvQIVsP6Zk_7vkmg2krID5DsAX8y7o";
$token=$this->md_spp->select_token();
$hasil_token=$token[0]['fcm_token'];
 $headers = array(
			'Authorization:key=' .$server_key,
			'Content-Type:application/json'
			);
			
 $fields = array ('to'=>$hasil_token,
				  'notification'=>array('title'=>"$nama" , 'body'=>"SPP : $subject_mp, bulan $bulan"));
				  
 $payload = json_encode($fields);
 
 $curl_session = curl_init();
 curl_setopt($curl_session, CURLOPT_URL, $path_to_fcm);
 curl_setopt($curl_session, CURLOPT_POST, true);
 curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
 curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);
 
 $result = curl_exec($curl_session);
 
	}

	public function send_spp()
	{
		$this->data['id_siswa']=$this->uri->segment(3);
		$this->load->view('send_spp',$this->data);
		
	}

	public function insertspp(){
		
		
		$id_siswa = $_POST['id_siswa'];
		$id_siswaenglish = NULL;
		$id_siswagabung = NULL;
		$bulan = $_POST['bulan'];
		$bulan_pembayaran = $_POST['bulan_pembayaran'];
		$tunai = $_POST['tunai'];
		$data = array('id_siswa' => $id_siswa, 'id_siswaenglish' => NULL, 'id_siswagabung' => NULL,'bulan'=>$bulan, 
			'bulan_pembayaran' => $bulan_pembayaran, 'tunai' => $tunai, 'status_pembayaran' => 'Lunas');
		$tambah = $this->md_spp->tambahData('spp',$data);
		if($tambah > 0) {
			redirect('c_beranda/menu_spp');
			
		}
		else{
			echo "gagal disimpan";
		}
	}
	
	
	
	public function insertspp2(){
		
		
		$id_siswa = NULL;
		$id_siswaenglish = $_POST['id_siswaenglish'];
		$id_siswagabung = NULL;
		$bulan = $_POST['bulan'];
		$bulan_pembayaran = $_POST['bulan_pembayaran'];
		$tunai = $_POST['tunai'];
		$data = array('id_siswa' => NULL, 'id_siswaenglish' => $id_siswaenglish, 'id_siswagabung' => NULL,'bulan'=>$bulan, 
			'bulan_pembayaran' => $bulan_pembayaran, 'tunai' => $tunai, 'status_pembayaran' => 'Lunas');
		$tambahspp2 = $this->md_spp->tambahSpp2('spp2',$data);
		if($tambahspp2 > 0) {
			redirect('c_beranda/menu_spp2');
			
		}
		else{
			echo "gagal disimpan";
		}
	}
	public function updatespp($id){
		$id_siswa = $_POST['id_siswa'];
		$nama = $_POST['nama'];
		$subject_mp = $_POST['subject_mp'];
		$level = $_POST['level'];
		$tingkatan = $_POST['tingkatan'];
		$bulan_pembayaran = $_POST['bulan_pembayaran'];
		$tunai = $_POST['tunai'];
		$status_pembayaran = $_POST['status_pembayaran'];
		$id_spp = $_POST['id_spp'];
		$data = array('id_siswa' => $id_siswa,'nama' => $nama, 'level' => $level,'tingkatan' => $tingkatan,'bulan_pembayaran' => $bulan_pembayaran, 'tunai' => $tunai, 
			'status_pembayaran' => $status_pembayaran, 'subject_mp' => $subject_mp);
		$edit = $this->md_spp->editData('spp',$data,$id);
		
		if($edit > 0) {
			redirect('c_beranda/menu_spp');
			
		}
		else{
			echo "gagal disimpan";
		}
	}
	
	// public function deletespp($id){
	// 	$hapusspp = $this->md_spp->hapusData('spp',$id);
	// 	if($hapusspp > 0) {
	// 		redirect('c_beranda/menu_spp');
			
	// 	}
	// 	else{
	// 		echo "gagal disimpan";
	// 	}
	// }
	
	

 	public function menu_spp()
	{
		$this->data['hasil'] = $this->md_spp->getSpp('spp');
		
		$this->load->view('menu_spp', $this->data);
	}
	public function menu_sppAdmin()
	{
		$this->data['hasil'] = $this->md_spp->getSpp('spp');
		
		$this->load->view('menu_sppAdmin', $this->data);
	}

	 public function menu_spp2()
	{
		
		$this->load->view('menu_spp2');
	}
		
	public function menu_spp2Admin()
	{
		
		$this->load->view('menu_spp2Admin');
	}
		

	
	public function form_spp()
	{
		
		$this->data['id_siswa']=$this->uri->segment(3);
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(5));
		$this->load->view('form_spp',$this->data);
		
	}

	public function form_spp2()
	{
		
		
		$this->data['id_siswaenglish']=$this->uri->segment(3);
		$this->load->view('form_spp2',$this->data);
		
	}

	public function form_spp3()
	{
		
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['level']=$this->uri->segment(4);
		$this->data['tingkatan']=$this->uri->segment(5);
		$this->data['id_siswagabung']=$this->uri->segment(6);
		$this->data['subject_mp']=$this->uri->segment(7);
		$this->load->view('form_spp3',$this->data);
		
	}
	
	public function form_editspp($id){
		$this->data['tingkatan']=$this->uri->segment(3);
		$this->data['dataEdit'] = $this->md_spp->dataEdit('spp',$id);
		$this->load->view('form_editspp',$this->data);
	}
	

	
	//SISWA
		
	public function insert(){
		
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$Orang_tua = $_POST['Orang_tua'];
		$no_hp = $_POST['no_hp'];
		$subject_mp = $_POST['subject_mp'];
		$status_sertifikat = $_POST['status_sertifikat'];
		
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$level_awal = $_POST['level_awal'];
		$level_target = $_POST['level_target'];
		$data = array('nama' => $nama, 'kelas' => $kelas, 
					  'Orang_tua' => $Orang_tua, 'no_hp' => $no_hp, 'subject_mp'=> $subject_mp,
					  'status_sertifikat' => $status_sertifikat, 'tanggal_masuk' => $tanggal_masuk, 
					  'tanggal_lahir' => $tanggal_lahir, 'level_awal' => $level_awal, 'level_target' => $level_target);
		$tambah = $this->md_siswa->tambahData('data_siswa',$data);
		if($tambah > 0) {
			redirect('c_beranda/menu_daftarsiswa');
			
		}
		else{
			echo "gagal disimpan";
		}
	}

	public function insertcoba(){
		
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$level_awal = $_POST['level_awal'];
		$orang_tua = $_POST['orang_tua'];
		$no_hp = $_POST['no_hp'];
		$subject_mp = $_POST['subject_mp'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		
		$data = array('nama' => $nama, 'kelas' => $kelas, 
					  'orang_tua' => $orang_tua, 'no_hp' => $no_hp, 'subject_mp'=> $subject_mp,
					  'tanggal_masuk' => $tanggal_masuk, 
					  'tanggal_lahir' => $tanggal_lahir, 'level_awal' => $level_awal);
		$tambah = $this->md_siswa->tambahCoba('coba',$data);
		if($tambah > 0) {
			redirect('c_beranda/coba');
			
		}
		else{
			echo "gagal disimpan";
		}
	}
	

	public function insertcoba2(){
		
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$level_awal = $_POST['level_awal'];
		$orang_tua = $_POST['orang_tua'];
		$no_hp = $_POST['no_hp'];
		$subject_mp = $_POST['subject_mp'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		
		$data = array('nama' => $nama, 'kelas' => $kelas, 
					  'orang_tua' => $orang_tua, 'no_hp' => $no_hp, 'subject_mp'=> $subject_mp,
					  'tanggal_masuk' => $tanggal_masuk, 
					  'tanggal_lahir' => $tanggal_lahir, 'level_awal' => $level_awal);
		$tambah = $this->md_siswa->tambahCoba2('coba2',$data);
		if($tambah > 0) {
			redirect('c_beranda/coba2');
			
		}
		else{
			echo "gagal disimpan";
		}
	}
	
	
	
	
	
	// public function delete($id){
	// 	$hapus = $this->md_siswa->hapusData('data_siswa',$id);
	// 	if($hapus > 0) {
	// 		redirect('c_beranda/menu_daftarsiswa');
			
	// 	}
	// 	else{
	// 		echo "gagal disimpan";
	// 	}
	// }
	
	
	public function update($id){
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$level = $_POST['level'];
		$level_target = $_POST['level_target'];
		$Orang_tua = $_POST['Orang_tua'];
		$no_hp = $_POST['no_hp'];
		$status_sertifikat = $_POST["status_sertifikat"];
		$tanggal_lahir = $_POST['tanggal_lahir'];


		if($level=="A"){
            $nilailevel = 1;
        }
        elseif ($level=="B"){
            $nilailevel = 2;
        }
        elseif ($level=="C"){
            $nilailevel = 3;
        }
        elseif ($level=="D"){
            $nilailevel = 4;
        }
        elseif ($level=="E"){
            $nilailevel = 5;
        }
        elseif ($level=="F"){
            $nilailevel = 6;
        }
        elseif ($level=="G"){
            $nilailevel = 7;
        }
        elseif ($level=="H"){
            $nilailevel = 8;
        }
        elseif ($level=="I"){
            $nilailevel = 9;
        }
        elseif ($level=="J"){
            $nilailevel = 10;
        }
        elseif ($level=="K"){
            $nilailevel = 11;
        }
        elseif ($level=="L"){
            $nilailevel = 12;
        }
        elseif ($level=="M"){
            $nilailevel = 13;
        }
        elseif ($level=="N"){
            $nilailevel = 14;
        }
        elseif ($level=="O"){
            $nilailevel = 15;
        }
        elseif ($level=="X"){
            $nilailevel = 16;
        }
        else {
            $nilailevel = 0;
        }




		$data = array('nama' => $nama, 'kelas' => $kelas, 'level' => $level, 'level_target' => $level_target, 
					  'Orang_tua' => $Orang_tua, 'no_hp' => $no_hp, 'status_sertifikat' => $status_sertifikat,
					  'tanggal_lahir' => $tanggal_lahir, 'nilailevel' =>$nilailevel );
		$edit = $this->md_siswa->editData('data_siswa',$data,$id);
		
		if($edit > 0) {
			redirect('c_beranda/menu_daftarsiswa');
			
		}
		else{
			echo "gagal disimpan";
		}
	}

		public function updatecoba($id){
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$level = $_POST['level'];
		$orang_tua = $_POST['orang_tua'];
		$no_hp = $_POST['no_hp'];
		$tanggal_lahir = $_POST['tanggal_lahir'];

		$data = array('nama' => $nama, 'kelas' => $kelas, 'level' => $level, 
					  'orang_tua' => $orang_tua, 'no_hp' => $no_hp, 
					  'tanggal_lahir' => $tanggal_lahir);
		$edit = $this->md_siswa->editDataCoba('coba',$data,$id);
		
		if($edit > 0) {
			redirect('c_beranda/coba');
			
		}
		else{
			echo "gagal disimpan";
		}
	}
	

		public function updatecoba2($id){
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$level = $_POST['level'];
		$orang_tua = $_POST['orang_tua'];
		$no_hp = $_POST['no_hp'];
		$tanggal_lahir = $_POST['tanggal_lahir'];

		$data = array('nama' => $nama, 'kelas' => $kelas, 'level' => $level, 
					  'orang_tua' => $orang_tua, 'no_hp' => $no_hp, 
					  'tanggal_lahir' => $tanggal_lahir);
		$edit = $this->md_siswa->editDataCoba2('coba2',$data,$id);
		
		if($edit > 0) {
			redirect('c_beranda/coba2');
			
		}
		else{
			echo "gagal disimpan";
		}
	}
	
	
	public function menu_dlmdaftarsiswa()
	{
		
		$this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['level']=$this->uri->segment(4);
		$this->data['tingkatan']=$this->uri->segment(5);
		$this->data['id_siswa']=$this->uri->segment(6);
		$this->data['subject_mp']=$this->uri->segment(7);
		$this->data['tanggal_masuk']=$this->uri->segment(8);
		$this->data['level_awal']=$this->uri->segment(9);
		$this->load->view('menu_dlmdaftarsiswa', $this->data);
		
	
	}

	public function menu_dlmcoba()
	{
		
		$this->data['hasil'] = $this->md_siswa->getCoba('coba');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_coba']=$this->uri->segment(4);
		$this->data['subject_mp']=$this->uri->segment(7);
		$this->data['tanggal_masuk']=$this->uri->segment(8);
		$this->load->view('menu_dlmcoba', $this->data);
		
	
	}

	public function menu_dlmcoba2()
	{
		
		$this->data['hasil'] = $this->md_siswa->getCoba2('coba2');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_coba2']=$this->uri->segment(4);
		$this->data['subject_mp']=$this->uri->segment(7);
		$this->data['tanggal_masuk']=$this->uri->segment(8);
		$this->load->view('menu_dlmcoba2', $this->data);
		
	
	}
	
	public function form_tambahsiswa()
	{
		
		$this->load->view('form_tambahsiswa');
	}

	public function form_tambahcoba()
	{
		
		$this->load->view('form_tambahcoba');
	}

	public function form_tambahcoba2()
	{
		
		$this->load->view('form_tambahcoba2');
	}
	
	public function combo()
	{
		
		$this->load->view('combo');
	}
	
	public function form_absensis()
	{
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_siswa']=$this->uri->segment(4);
		$this->data['level']=$this->uri->segment(5);
		$this->data['tingkatan']=$this->uri->segment(6);
		$this->data['subject_mp']=$this->uri->segment(7);
		$this->data['hasilabsen'] = $this->md_absensi->getAbsen('absensis');
		$this->load->view('form_absensis',$this->data);
	
	}

	public function form_absencoba()
	{
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_coba']=$this->uri->segment(4);
		$this->data['subject_mp']=$this->uri->segment(7);
		$this->data['hasilabsen'] = $this->md_absensi->getAbsenCoba('absen_coba');
		$this->load->view('form_absencoba',$this->data);
	
	}

	public function form_absencoba2()
	{
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_coba2']=$this->uri->segment(4);
		$this->data['subject_mp']=$this->uri->segment(7);
		$this->data['hasilabsen'] = $this->md_absensi->getAbsenCoba('absen_coba');
		$this->load->view('form_absencoba2',$this->data);
	
	}



	public function form_absensis2()
	{
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_siswaenglish']=$this->uri->segment(4);
		$this->data['level']=$this->uri->segment(5);
		$this->data['tingkatan']=$this->uri->segment(6);
		$this->data['subject_mp']=$this->uri->segment(7);
		$this->load->view('form_absensis2',$this->data);
	
	}

	public function form_absensis3()
	{
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['level']=$this->uri->segment(4);
		$this->data['tingkatan']=$this->uri->segment(5);
		$this->data['id_siswagabung']=$this->uri->segment(6);
		$this->data['subject_mp']=$this->uri->segment(7);
		$this->load->view('form_absensis3',$this->data);
	
	}
	
	public function form_editsiswa($id){
		$this->data['dataEdit'] = $this->md_siswa->dataEdit('data_siswa',$id);
		$this->load->view('form_editsiswa',$this->data);
	}

	public function form_editsiswacoba($id){
		$this->data['dataEditCoba'] = $this->md_siswa->dataEditCoba('coba',$id);
		$this->load->view('form_editsiswacoba',$this->data);
	}



	public function form_editsiswacoba2($id){
		$this->data['dataEditCoba2'] = $this->md_siswa->dataEditCoba2('coba2',$id);
		$this->load->view('form_editsiswacoba2',$this->data);
	}
	
	
	
	public function spp() {
		$this->load->model('md_spp'); //load model
		$data['hasilPembayaran'] = $this->md_spp->getSpp(); //membuat data dari hasil transaksi masuk ke $data
		$this->load->view('menu_spp', $data); //load tampilan header, ambil di tema
	}


	
//Absen

	//notif
	public function tess(){
$nama = $_POST['nama'];
$jam_keluar = $_POST['jam_keluar'];
$path_to_fcm = 'https://fcm.googleapis.com/fcm/send';
$server_key ="AIzaSyDbfUvQIVsP6Zk_7vkmg2krID5DsAX8y7o";
$token=$this->md_absensi->select_token();
$hasil_token=$token[0]['fcm_token'];
 $headers = array(
			'Authorization:key=' .$server_key,
			'Content-Type:application/json'
			);
			
 $fields = array ('to'=>$hasil_token,
				  'notification'=>array('title'=>"Absen $nama" , 'body'=>"pulang : $jam_keluar"));
				  
 $payload = json_encode($fields);
 
 $curl_session = curl_init();
 curl_setopt($curl_session, CURLOPT_URL, $path_to_fcm);
 curl_setopt($curl_session, CURLOPT_POST, true);
 curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
 curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);
 
 $result = curl_exec($curl_session);
 
	}
	
	public function Absensisiswa()
	{
		$this->data['hasilabsen'] = $this->md_absensi->getAbsen('absensis');
		
		$this->load->view('Absensisiswa', $this->data);
	}

	public function AbsensisiswaAdmin()
	{
		$this->data['hasilabsen'] = $this->md_absensi->getAbsen('absensis');
		
		$this->load->view('AbsensisiswaAdmin', $this->data);
	}

	public function Absensisiswaeng()
	{
		$this->data['hasilabsen'] = $this->md_absensi->getAbsen2('absensis');
		
		$this->load->view('Absensisiswaeng', $this->data);
	}

	public function AbsensisiswaengAdmin()
	{
		$this->data['hasilabsen'] = $this->md_absensi->getAbsen2('absensis');
		
		$this->load->view('AbsensisiswaengAdmin', $this->data);
	}
public function AbsenSiswa2()
	{
		$this->data['hasilabsen'] = $this->md_absensi->getAbsen('absensis');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_siswaenglish']=$this->uri->segment(4);
		$this->load->view('AbsenSiswa2', $this->data);
	}

	public function AbsenSiswa()
	{
		$this->data['hasilabsen'] = $this->md_absensi->getAbsen('absensis');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_siswa']=$this->uri->segment(4);
		$this->load->view('AbsenSiswa', $this->data);
	}

	public function SppSiswa()
	{
		$this->data['hasilabsen'] = $this->md_spp->getSpp('spp');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_siswa']=$this->uri->segment(4);
		$this->load->view('SppSiswa', $this->data);
	}

	public function lihat()
	{
		$this->data['hasilabsen'] = $this->md_absensi->getAbsenpemb('absen');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_asisten']=$this->uri->segment(4);
		$this->load->view('lihat', $this->data);
	}

	public function coba_lihat()
	{
		$this->data['hasilabsen'] = $this->md_absensi->getAbsenCoba('absen_coba');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_coba']=$this->uri->segment(4);
		$this->load->view('coba_lihat', $this->data);
	}

	public function lihat2()
	{
		$this->data['hasilabsen'] = $this->md_absensi->getAbsenpemb('absen');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_assist']=$this->uri->segment(4);
		$this->load->view('lihat2', $this->data);
	}

	// public function Absensisiswaeng()
	// {
	// 	$this->load->model('md_absensi'); //load model
	// 	$query = $this->md_absensi->getAbsen2();
	// 	$data['hasilabsen'] = null;
	// 	if($query){
 //   			$data['hasilabsen'] =  $query;
	// 	}

 //  		$this->load->view('Absensisiswaeng', $data);
	// }

public function absensis() {
		$this->load->model('md_absensi'); //load model
		$data['hasilabsen'] = $this->md_absensi->getAbsen(); //membuat data dari hasil transaksi masuk ke $data
		$this->load->view('Absensisiswa', $data); //load tampilan header, ambil di tema
	}
	

	
	public function insertabsen(){
		$id_siswa = $_POST['id_siswa'];
		$id_siswaenglish = NULL;
		$id_siswagabung = NULL;
		$subject_mp = $_POST['subject_mp'];
		$nama = $_POST['nama'];
		$level = $_POST['level'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = 'NULL';
		$data = array('id_siswa' => $id_siswa, 'id_siswaenglish' => NULL, 'id_siswagabung' => NULL, 'nama' => $nama, 'level' => $level, 'tanggal_masuk' => $tanggal_masuk,
					  'jam_masuk' => $jam_masuk,'jam_keluar' => NULL, 'subject_mp' => $subject_mp);
		$tambah = $this->md_absensi->tambahData('absensis',$data);
		if($tambah > 0) {
			redirect('c_beranda/Absensisiswa');
			
		}
		else{
			echo "gagal disimpan";
		}
	}

public function insertabsen2(){
		$id_siswaenglish = $_POST['id_siswaenglish'];
		$id_siswa = NULL;
		$id_siswagabung = NULL;
		$subject_mp = $_POST['subject_mp'];
		$nama = $_POST['nama'];
		$level = $_POST['level'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = 'NULL';
		$data = array('id_siswaenglish' => $id_siswaenglish, 'id_siswa' => NULL, 'id_siswagabung' => $id_siswagabung, 'nama' => $nama, 'level' => $level, 'tanggal_masuk' => $tanggal_masuk,
					  'jam_masuk' => $jam_masuk,'jam_keluar' => NULL, 'subject_mp' => $subject_mp);
		$tambah = $this->md_absensi->tambahData('absensis',$data);
		if($tambah > 0) {
			redirect('c_beranda/Absensisiswa');
			
		}
		else{
			echo "gagal disimpan";
		}
	}


	public function insertabsen3(){
		$id_siswagabung = $_POST['id_siswagabung'];
		$id_siswa = NULL;
		$id_siswaenglish = NULL;
		$subject_mp = $_POST['subject_mp'];
		$nama = $_POST['nama'];
		$level = $_POST['level'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = 'NULL';
		$data = array('id_siswagabung' => $id_siswagabung, 'id_siswa' => NULL, 'id_siswaenglish' => NULL, 'nama' => $nama, 'level' => $level, 'tanggal_masuk' => $tanggal_masuk,
					  'jam_masuk' => $jam_masuk,'jam_keluar' => NULL, 'subject_mp' => $subject_mp);
		$tambah = $this->md_absensi->tambahData('absensis',$data);
		if($tambah > 0) {
			redirect('c_beranda/Absensisiswa');
			
		}
		else{
			echo "gagal disimpan";
		}
	}

	public function kirimPerid($id,$nama,$ids)
	{
	date_default_timezone_set("Asia/Jakarta");	
		$namas =$nama;
		$nama = str_replace("%20", " ", $nama);
		
		$jam_keluar = date ("H:i",time());
		
		$path_to_fcm = 'https://fcm.googleapis.com/fcm/send';
		$server_key ="AIzaSyDbfUvQIVsP6Zk_7vkmg2krID5DsAX8y7o";
		$data = array('jam_keluar' => date ("H:i",time()));
		$kirimke = $this->md_absensi->editData('absensis',$data,$ids);
		
		$token=$this->md_absensi->select_token();
			
		if($kirimke > 0) {

					$hasil_token=$id;
							$headers = array(
			'Authorization:key=' .$server_key,
			'Content-Type:application/json'
			);
			
 $fields = array ('to'=>$hasil_token,
				  'notification'=>array('title'=>"Absen $nama" , 'body'=>"Pulang : $jam_keluar",
				  	'click_action'=>'com.ta.kumon.fcmwithappserver_TARGET_NOTIFICATION'));
				  
 $payload = json_encode($fields);
 
 $curl_session = curl_init();
 curl_setopt($curl_session, CURLOPT_URL, $path_to_fcm);
 curl_setopt($curl_session, CURLOPT_POST, true);
 curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
 curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);
 
 $result = curl_exec($curl_session);
 $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Dikirim <button type="button" class="close" 
 	data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 
				
	
			redirect('c_beranda/Absensisiswa');	
			
		}
		else{
			echo "gagal disimpan";
		}


		}


			
	public function kirimPerid2($id,$nama,$ids)
	{
	date_default_timezone_set("Asia/Jakarta");	
		$_SESSION['id_siswas'] = $id_siswa;
		$namas =$nama;
		$nama = str_replace("%20", " ", $nama);
		
		$bulan = date("F");
		
		$path_to_fcm = 'https://fcm.googleapis.com/fcm/send';
		$server_key ="AIzaSyDbfUvQIVsP6Zk_7vkmg2krID5DsAX8y7o";
		$data = array('bulan' => date("F"));
		$kirimke = $this->md_spp->editData('spp',$data,$ids);
		
		$token=$this->md_spp->select_token();
			
		if($kirimke > 0) {

					$hasil_token=$id;
							$headers = array(
			'Authorization:key=' .$server_key,
			'Content-Type:application/json'
			);
			
 $fields = array ('to'=>$hasil_token,
				  'notification'=>array('title'=>"Spp $nama" , 'body'=>"Pembayaran Bulan : $bulan",
				  	'click_action'=>'com.ta.kumon.fcmwithappserver_TARGET_NOTIFICATION'));
				  
 $payload = json_encode($fields);
 
 $curl_session = curl_init();
 curl_setopt($curl_session, CURLOPT_URL, $path_to_fcm);
 curl_setopt($curl_session, CURLOPT_POST, true);
 curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
 curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);
 
 $result = curl_exec($curl_session);
 $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Dikirim <button type="button" class="close" 
 	data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 
				
	
			redirect('c_beranda/menu_spp');	
			
		}
		else{
			echo "gagal disimpan";
		}


		}


		public function kirimPerideng($id,$nama,$ids)
	{
	date_default_timezone_set("Asia/Jakarta");	
		$_SESSION['id_siswas'] = $id_siswaenglish;
		$namas =$nama;
		$nama = str_replace("%20", " ", $nama);
		
		$bulan = date("F");
		
		$path_to_fcm = 'https://fcm.googleapis.com/fcm/send';
		$server_key ="AIzaSyDbfUvQIVsP6Zk_7vkmg2krID5DsAX8y7o";
		$data = array('bulan' => date("F"));
		$kirimke = $this->md_spp->editSpp2('spp2',$data,$ids);
		
		$token=$this->md_spp->select_token2();
			
		if($kirimke > 0) {

					$hasil_token=$id;
							$headers = array(
			'Authorization:key=' .$server_key,
			'Content-Type:application/json'
			);
			
 $fields = array ('to'=>$hasil_token,
				  'notification'=>array('title'=>"Spp English $nama" , 'body'=>"Pembayaran Bulan : $bulan",
				  	'click_action'=>'com.ta.kumon.fcmwithappserver_TARGET_NOTIFICATION'));
				  
 $payload = json_encode($fields);
 
 $curl_session = curl_init();
 curl_setopt($curl_session, CURLOPT_URL, $path_to_fcm);
 curl_setopt($curl_session, CURLOPT_POST, true);
 curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
 curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);
 
 $result = curl_exec($curl_session);
 $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Dikirim <button type="button" class="close" 
 	data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 
				
	
			redirect('c_beranda/menu_spp2');	
			
		}
		else{
			echo "gagal disimpan";
		}


		}

	
	public function updateabsen($id){
		
		$nama = $_POST['nama'];
		$level = $_POST['level'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$data = array('nama' => $nama, 'level' => $level, 'tanggal_masuk' => $tanggal_masuk, 'jam_masuk' => $jam_masuk, 'jam_keluar' => $jam_keluar);
		$kirim = $this->md_absensi->editData('absensis',$data,$id);
		
			
		if($kirim > 0) {

		redirect('c_beranda/daftarKontak');	
			
		}
		else{
			echo "gagal disimpan";
		}
	}

	public function updateabsen2($id){
		
		$nama = $_POST['nama'];
		
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$data = array('nama' => $nama,'tanggal_masuk' => $tanggal_masuk, 'jam_masuk' => $jam_masuk, 'jam_keluar' => $jam_keluar);
		$kirims = $this->md_absensi->editDatapemb('absen',$data,$id);
		
			
		if($kirims > 0) {

		redirect('c_beranda/AbsenPembimbing');	
			
		}
		else{
			echo "gagal disimpan";
		}
	}

	public function updateabsencoba($id){
		
		$nama = $_POST['nama'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$data = array('nama' => $nama,'tanggal_masuk' => $tanggal_masuk, 'jam_masuk' => $jam_masuk, 'jam_keluar' => $jam_keluar);
		$kirims = $this->md_absensi->editDatacoba('absen_coba',$data,$id);
		
			
		if($kirims > 0) {

		redirect('c_beranda/Absensisiswa');	
			
		}
		else{
			echo "gagal disimpan";
		}
	}

	public function updateabsencoba2($id){
		
		$nama = $_POST['nama'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$data = array('nama' => $nama,'tanggal_masuk' => $tanggal_masuk, 'jam_masuk' => $jam_masuk, 'jam_keluar' => $jam_keluar);
		$kirims = $this->md_absensi->editDatacoba('absen_coba',$data,$id);
		
			
		if($kirims > 0) {

		redirect('c_beranda/Absensisiswaeng');	
			
		}
		else{
			echo "gagal disimpan";
		}
	}

	public function updateabsenEng($id){
		
		$nama = $_POST['nama'];
		
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$data = array('nama' => $nama,'tanggal_masuk' => $tanggal_masuk, 'jam_masuk' => $jam_masuk, 'jam_keluar' => $jam_keluar);
		$kirims = $this->md_absensi->editDatapemb('absen',$data,$id);
		
			
		if($kirims > 0) {

		redirect('c_beranda/AbsenPembimbingEng');	
			
		}
		else{
			echo "gagal disimpan";
		}
	}

	public function kirimabsen($id){
		$token = $_POST['fcm_token'];
		$nama = $_POST['nama'];
		$level = $_POST['level'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = $_POST['jam_keluar'];
		$path_to_fcm = 'https://fcm.googleapis.com/fcm/send';
		$server_key ="AIzaSyDbfUvQIVsP6Zk_7vkmg2krID5DsAX8y7o";
		$data = array('nama' => $nama, 'level' => $level, 'tanggal_masuk' => $tanggal_masuk, 'jam_masuk' => $jam_masuk, 'jam_keluar' => $jam_keluar, 'fcm_token' => $token);
		$kirimke = $this->md_absensi->editData('absensis',$data,$id);
		$token=$this->md_absensi->select_token();
			
		if($kirimke > 0) {

		for ($i=0; $i < count($token); $i++) { 
					$hasil_token=$token[$i]['fcm_token'];
							$headers = array(
			'Authorization:key=' .$server_key,
			'Content-Type:application/json'
			);
			
 $fields = array ('to'=>$hasil_token,
				  'notification'=>array('title'=>"Absen $nama" , 'body'=>"pulang : $jam_keluar",
				  	'click_action'=>'com.ta.kumon.fcmwithappserver_TARGET_NOTIFICATION'));
				  
 $payload = json_encode($fields);
 
 $curl_session = curl_init();
 curl_setopt($curl_session, CURLOPT_URL, $path_to_fcm);
 curl_setopt($curl_session, CURLOPT_POST, true);
 curl_setopt($curl_session, CURLOPT_HTTPHEADER, $headers);
 curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($curl_session, CURLOPT_SSL_VERIFYPEER, false);
 curl_setopt($curl_session, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
 curl_setopt($curl_session, CURLOPT_POSTFIELDS, $payload);
 
 $result = curl_exec($curl_session);
 $this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil Dikirim <button type="button" class="close" 
 	data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 
				}	
	
			redirect('c_beranda/Absensisiswaeng');	
			
		}
		else{
			echo "gagal disimpan";
		}
	}
	
	public function form_editabsensis($id){

		$this->data['id_absensis']=$this->uri->segment(3);
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(4));
		$this->data['jam_keluar']=$this->uri->segment(5);
		$this->data['id_siswa'] = $this->uri->segment(6);
		$this->data['dataEdit'] = $this->md_absensi->dataEdit('absensis',$id);
		$this->load->view('form_editabsensis',$this->data);
	}

	public function form_editabsencoba($id){

		$this->data['id_absencoba']=$this->uri->segment(3);
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(4));
		$this->data['jam_keluar']=$this->uri->segment(5);
		$this->data['id_coba'] = $this->uri->segment(6);
		$this->data['dataEdit'] = $this->md_absensi->dataEditcoba('absen_coba',$id);
		$this->load->view('form_editabsencoba',$this->data);
	}

	public function form_editabsencoba2($id){

		$this->data['id_absencoba']=$this->uri->segment(3);
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(4));
		$this->data['jam_keluar']=$this->uri->segment(5);
		$this->data['id_coba2'] = $this->uri->segment(6);
		$this->data['dataEdit'] = $this->md_absensi->dataEditcoba('absen_coba',$id);
		$this->load->view('form_editabsencoba2',$this->data);
	}

	public function form_editabsensis2($id){

		$this->data['id_absensis']=$this->uri->segment(3);
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(4));
		$this->data['jam_keluar']=$this->uri->segment(5);
		$this->data['id_siswaenglish'] = $this->uri->segment(6);
		$this->data['dataEdit'] = $this->md_absensi->dataEdit('absensis',$id);
		$this->load->view('form_editabsensis2',$this->data);
	}

	public function send_absen($id){

		$this->data['id_absensis']=$this->uri->segment(3);
		$this->data['dataEdit'] = $this->md_absensi->dataEdit('absensis',$id);
		$this->load->view('send_absen',$this->data);

	}
	
	
	
	// public function deleteabsen($id){
	// 	$hapus = $this->md_absensi->hapusData('absensis',$id);
	// 	if($hapus > 0) {
	// 		redirect('c_beranda/Absensisiswa');
			
	// 	}
	// 	else{
	// 		echo "gagal disimpan";
	// 	}
	// }
	
	//siswa english

	public function menu_daftarsiswa2()
	{
		$this->data['hasil'] = $this->md_siswa->getEnglish('data_siswaenglish');
		$this->load->view('menu_daftarsiswa2', $this->data);
	
	}
	public function menu_daftarsiswa2Admin()
	{
		$this->data['hasil'] = $this->md_siswa->getEnglish('data_siswaenglish');
		$this->load->view('menu_daftarsiswa2Admin', $this->data);
	
	}
	
	public function form_tambahsiswa2()
	{
		
		$this->load->view('form_tambahsiswa2');
	}



	public function form_editsiswa2($id){
		$this->data['dataEditeng'] = $this->md_siswa->dataEditeng('data_siswaenglish',$id);
		$this->load->view('form_editsiswa2',$this->data);
	}

	public function menu_dlmdaftarsiswa2()
	{
		
		$this->data['hasil'] = $this->md_siswa->getEnglish('data_siswaenglish');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['level']=$this->uri->segment(4);
		$this->data['tingkatan']=$this->uri->segment(5);
		$this->data['id_siswa']=$this->uri->segment(6);
		$this->data['id_siswaenglish']=$this->uri->segment(6);
		$this->data['subject_mp']=$this->uri->segment(7);
		$this->data['tanggal_masuk']=$this->uri->segment(8);
		$this->load->view('menu_dlmdaftarsiswa2', $this->data);
		
	
	}

	public function inserteng(){
		
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$level_awal = $_POST['level_awal'];
		$orang_tua = $_POST['orang_tua'];
		$no_hp = $_POST['no_hp'];
		$subject_mp = $_POST['subject_mp'];
		$status_sertifikat = $_POST['status_sertifikat'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$data = array('nama' => $nama, 'kelas' => $kelas,'level_awal' => $level_awal,  
					  'orang_tua' => $orang_tua, 'no_hp' => $no_hp, 'subject_mp'=> $subject_mp,
					  'status_sertifikat' => $status_sertifikat, 'tanggal_masuk' => $tanggal_masuk, 'tanggal_lahir' => $tanggal_lahir);
		$tambah = $this->md_siswa->tambahEng('data_siswaenglish',$data);
		if($tambah > 0) {
			redirect('c_beranda/menu_daftarsiswa2');
			
		}
		else{
			echo "gagal disimpan";
		}
	}


	public function deleteeng($id){
		$hapus = $this->md_siswa->hapusDataeng('data_siswaenglish',$id);
		if($hapus > 0) {
			redirect('c_beranda/menu_daftarsiswa2');
			
		}
		else{
			echo "gagal disimpan";
		}
	}
	
	
	public function updateeng($id){

		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$level = $_POST['level'];
		$tingkatan = $_POST['tingkatan'];
		$orang_tua = $_POST['orang_tua'];
		$no_hp = $_POST['no_hp'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$status_sertifikat = $_POST['status_sertifikat'];
		$data = array('nama' => $nama, 'kelas' => $kelas, 'tingkatan' => $tingkatan,'level' => $level, 
					  'orang_tua' => $orang_tua, 'no_hp' => $no_hp, 'status_sertifikat' => $status_sertifikat, 'tanggal_lahir' => $tanggal_lahir);
		$editeng = $this->md_siswa->editDataeng('data_siswaenglish',$data,$id);
		
		if($editeng > 0) {
			redirect('c_beranda/menu_daftarsiswa2');
			
		}
		else{
			echo "gagal disimpan";
		}
	}



//laporan

	public function data_laporan(){
		$this->data['hasilnilai'] = $this->md_nilai->getNilai('data_nilai');
		
		$this->load->view("data_laporan", $this->data);
	}

	public function data_laporanAdmin(){
		$this->data['hasilnilai'] = $this->md_nilai->getNilai('data_nilai');
		
		$this->load->view("data_laporanAdmin", $this->data);
	}

	public function data_laporan2(){
		$this->data['hasilnilai2'] = $this->md_nilai->getNilai2('data_nilai2');
		
		$this->load->view("data_laporan2", $this->data);
	}

	public function data_laporan2Admin(){
		$this->data['hasilnilai2'] = $this->md_nilai->getNilai2('data_nilai2');
		
		$this->load->view("data_laporan2Admin", $this->data);
	}
	public function data_laporancoba(){
		$this->data['hasilnilai'] = $this->md_nilai->getNilaicoba('data_nilaicoba');
		
		$this->load->view("data_laporancoba", $this->data);
	}


public function form_inputnilai()
	{
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_siswa']=$this->uri->segment(4);
		$this->data['level']=$this->uri->segment(5);
		$this->data['hasilnilai'] = $this->md_nilai->getNilai('data_nilai');
		$this->load->view('form_inputnilai',$this->data);
	
	}

public function form_inputnilaicoba()
	{
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_coba']=$this->uri->segment(4);
		$this->data['hasilnilai'] = $this->md_nilai->getNilaicoba('data_nilaicoba');
		$this->load->view('form_inputnilaicoba',$this->data);
	
	}

	public function form_inputnilaicoba2()
	{
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_coba2']=$this->uri->segment(4);
		$this->data['hasilnilai'] = $this->md_nilai->getNilaicoba2('data_nilaicoba2');
		$this->load->view('form_inputnilaicoba2',$this->data);
	
	}

public function form_inputnilai2()
	{
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_siswaenglish']=$this->uri->segment(4);
		$this->data['level']=$this->uri->segment(5);
		$this->data['hasilnilai2'] = $this->md_nilai->getNilai2('data_nilai2');
		$this->load->view('form_inputnilai2',$this->data);
	
	}
	

	public function insertnilai(){
		$id_siswa = $_POST['id_siswa'];
		$tipe_test = $_POST['tipe_test'];
		$levell = $_POST['levell'];
		$level = $_POST['level'];
		$sheet = $_POST['sheet'];
		$tanggal_test = $_POST['tanggal_test'];
		$grup = $_POST['grup'];
		$nilai = $_POST['nilai'];
		$dari = $_POST['dari'];
		$waktu = $_POST['waktu'];
		$darimenit = $_POST['darimenit'];
		$data = array('id_siswa' => $id_siswa, 'tipe_test' => $tipe_test, 'level' => $level, 'tanggal_test' => $tanggal_test,
			'grup' => $grup, 'nilai' => $nilai, 'dari' => $dari, 'waktu' => $waktu, 'darimenit' => $darimenit, 
			'levell' => $levell, 'sheet' => $sheet);
		$tambah = $this->md_nilai->tambahData('data_nilai',$data);
		if($tambah > 0) {
			redirect('c_beranda/data_laporan');
			
		}
		else{
			echo "gagal disimpan";
		}

	}

	public function insertnilaicoba(){
		$id_coba = $_POST['id_coba'];
		$tipe_test = $_POST['tipe_test'];
		$level = $_POST['level'];
		$levell = $_POST['levell'];
		$sheet = $_POST['sheet'];
		$tanggal_test = $_POST['tanggal_test'];
		$grup = $_POST['grup'];
		$nilai = $_POST['nilai'];
		$dari = $_POST['dari'];
		$waktu = $_POST['waktu'];
		$darimenit = $_POST['darimenit'];
		$data = array('id_coba' => $id_coba, 'tipe_test' => $tipe_test, 'level' => $level, 'tanggal_test' => $tanggal_test,
			'grup' => $grup, 'nilai' => $nilai, 'dari' => $dari, 'waktu' => $waktu, 'darimenit' => $darimenit, 'levell' => $levell, 'sheet'=>$sheet);
		$tambah = $this->md_nilai->tambcoba('data_nilaicoba',$data);
		if($tambah > 0) {
			redirect('c_beranda/data_laporan');
			
		}
		else{
			echo "gagal disimpan";
		}

	}

	public function insertnilaicoba2(){
		$id_coba2 = $_POST['id_coba2'];
		$tipe_test = $_POST['tipe_test'];
		$level = $_POST['level'];
		$levell = $_POST['levell'];
		$level_awal = $_POST['level_awal'];
		$sheet = $_POST['sheet'];
		$tanggal_test = $_POST['tanggal_test'];
		$grup = $_POST['grup'];
		$nilai = $_POST['nilai'];
		$dari = $_POST['dari'];
		$waktu = $_POST['waktu'];
		$darimenit = $_POST['darimenit'];
		$data = array('id_coba2' => $id_coba2, 'tipe_test' => $tipe_test, 'level' => $level, 'tanggal_test' => $tanggal_test,
			'grup' => $grup, 'nilai' => $nilai, 'dari' => $dari, 'waktu' => $waktu, 'darimenit' => $darimenit, 
			'levell' => $levell, 'sheet'=>$sheet, 'level_awal' => $level_awal );
		$tambah = $this->md_nilai->tambcoba2('data_nilaicoba2',$data);
		if($tambah > 0) {
			redirect('c_beranda/data_laporan2');
			
		}
		else{
			echo "gagal disimpan";
		}

	}

	public function insertnilai2(){
		$id_siswaenglish = $_POST['id_siswaenglish'];
		$tipe_test = $_POST['tipe_test'];
		$level = $_POST['level'];
		$levell = $_POST['levell'];
		$sheet = $_POST['sheet'];
		$tanggal_test = $_POST['tanggal_test'];
		$grup = $_POST['grup'];
		$nilai = $_POST['nilai'];
		$dari = $_POST['dari'];
		$waktu = $_POST['waktu'];
		$darimenit = $_POST['darimenit'];
		$data = array('id_siswaenglish' => $id_siswaenglish, 'tipe_test' => $tipe_test, 'level' => $level, 'tanggal_test' => $tanggal_test,
			'grup' => $grup, 'nilai' => $nilai, 'dari' => $dari, 'waktu' => $waktu, 'darimenit' => $darimenit, 'levell' => $levell, 'sheet' => $sheet);
		$tambah = $this->md_nilai->tambEng('data_nilai2',$data);
		if($tambah > 0) {
			redirect('c_beranda/data_laporan2');
			
		}
		else{
			echo "gagal disimpan";
		}

	}

	public function menu_nilai()
	{
		$this->data['hasilnilai'] = $this->md_nilai->getNilai('data_nilai');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_siswa']=$this->uri->segment(4);
		$this->load->view('menu_nilai', $this->data);
	}

	public function menu_nilai2()
	{
		$this->data['hasilnilai2'] = $this->md_nilai->getNilai2('data_nilai2');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_siswaenglish']=$this->uri->segment(4);
		$this->load->view('menu_nilai2', $this->data);
	}


public function __construct(){
		parent::__construct();
		$this->load->library('pdf_report');
		$this->load->model('md_nilai');
	}
	
	public function report()
	{
	// 	$data = array(
	// 	'isi' => $this->md_nilai->dataMahasiswa(),
	// ); 
		$data['siswa'] = $this->md_nilai->dataMahasiswa();
		$this->load->view('laporan/v_report', $data);
	}

	// public function cetak_data_siswa(){
	// 	$kategori = $_POST['kategori'];
	// 	if($kategori == 'None'){
	// 		redirect('c_beranda/siswa_report');
	// 	}
	// 	elseif($kategori=='Kelas'){
	// 		redirect('c_beranda/siswa_report_kelas');
	// 	}
	// 	elseif($kategori=='Level'){
	// 		redirect('c_beranda/siswa_report_level');
	// 	}
	// 	elseif($kategori=='Level Awal'){
	// 		redirect('c_beranda/siswa_report_level_awal');
	// 	}
	// 	elseif($kategori=='Bulan Masuk'){
	// 		redirect('c_beranda/siswa_report_bulan');
	// 	}
	// 	elseif($kategori=='Sertifikat'){
	// 		redirect('c_beranda/siswa_report_sertifikat');
	// 	}
	// }

	// public function cetak_data_siswa_eng(){
	// 	$kategori = $_POST['kategori'];
	// 	if($kategori == 'None'){
	// 		redirect('c_beranda/siswa_report_eng');
	// 	}
	// 	elseif($kategori=='Kelas'){
	// 		redirect('c_beranda/siswa_report_kelas_eng');
	// 	}
	// 	elseif($kategori=='Level'){
	// 		redirect('c_beranda/siswa_report_level_eng');
	// 	}
	// 	elseif($kategori=='Level Awal'){
	// 		redirect('c_beranda/siswa_report_level_awal_eng');
	// 	}
	// 	elseif($kategori=='Bulan Masuk'){
	// 		redirect('c_beranda/siswa_report_bulan_eng');
	// 	}
	// 	elseif($kategori=='Sertifikat'){
	// 		redirect('c_beranda/siswa_report_sertifikat_eng');
	// 	}
	// }

	// public function cetak_data_siswa_kelas(){
	// 	$kelas = $_POST['kelas'];
	// 	$data['siswa'] = $this->md_siswa->getDataSiswaMathPerKelas($kelas);
	// 	$this->load->view('laporan/v_report', $data);
	// }

	// public function cetak_data_siswa_level(){
	// 	$level = $_POST['level'];
	// 	$data['siswa'] = $this->md_siswa->getDataSiswaMathPerLevel($level);
	// 	$this->load->view('laporan/v_report', $data);
	// }

	// public function cetak_data_siswa_level_awal(){
	// 	$level = $_POST['levelawal'];
	// 	$data['siswa'] = $this->md_siswa->getDataSiswaMathPerLevelAwal($level);
	// 	$this->load->view('laporan/v_report', $data);
	// }

	// public function cetak_data_siswa_sertifikat(){
	// 	$sertifikat = $_POST['sertifikat'];
	// 	$data['siswa'] = $this->md_siswa->getDataSiswaMathPersertifikat($sertifikat);
	// 	$this->load->view('laporan/v_report', $data);
	// }

	// public function cetak_data_siswa_kelas_eng(){
	// 	$kelas = $_POST['kelas'];
	// 	$data['siswa'] = $this->md_siswa->getDataSiswaEngPerKelas($kelas);
	// 	$this->load->view('laporan/v_report', $data);
	// }

	// public function cetak_data_siswa_level_eng(){
	// 	$level = $_POST['level'];
	// 	$data['siswa'] = $this->md_siswa->getDataSiswaEngPerLevel($level);
	// 	$this->load->view('laporan/v_report', $data);
	// }

	// public function cetak_data_siswa_level_awal_eng(){
	// 	$level = $_POST['levelawal'];
	// 	$data['siswa'] = $this->md_siswa->getDataSiswaEngPerLevelAwal($level);
	// 	$this->load->view('laporan/v_report', $data);
	// }

	// public function cetak_data_siswa_sertifikat_eng(){
	// 	$sertifikat = $_POST['sertifikat'];
	// 	$data['siswa'] = $this->md_siswa->getDataSiswaEngPersertifikat($sertifikat);
	// 	$this->load->view('laporan/v_report', $data);
	// }

	// public function siswa_report(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$this->load->view('siswa_report');
	// }

	// public function siswa_report_eng(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$this->load->view('siswa_report_eng');
	// }

	// public function siswa_report_kelas(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['kelas'] = $this->md_siswa->getKelasMath();
	// 	$this->load->view('siswa_report_kelas', $data);
	// }
	// public function siswa_report_level(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['level'] = $this->md_siswa->getLevelMath();
	// 	$this->load->view('siswa_report_level', $data);
	// }
	// public function siswa_report_level_awal(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['level'] = $this->md_siswa->getLevelAwalMath();
	// 	$this->load->view('siswa_report_level_awal', $data);
	// }
	// public function siswa_report_bulan(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['bulan'] = $this->md_siswa->nama_bulan();
	// 	$data['tahun']=$this->md_siswa->tahun_jual();
	// 	$this->load->view('siswa_report_bulan', $data);
	// }
	// public function siswa_report_sertifikat(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['sertifikat'] = $this->md_siswa->getSertifikatMath();
	// 	$this->load->view('siswa_report_sertifikat', $data);
	// }

	// public function siswa_report_kelas_eng(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['kelas'] = $this->md_siswa->getKelasEng();
	// 	$this->load->view('siswa_report_kelas_eng', $data);
	// }
	// public function siswa_report_level_eng(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['level'] = $this->md_siswa->getLevelEng();
	// 	$this->load->view('siswa_report_level_eng', $data);
	// }
	// public function siswa_report_level_awal_eng(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['level'] = $this->md_siswa->getLevelAwalEng();
	// 	$this->load->view('siswa_report_level_awal_eng', $data);
	// }
	// public function siswa_report_bulan_eng(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['bulan'] = $this->md_siswa->nama_bulan();
	// 	$data['tahun']=$this->md_siswa->tahun_jual();
	// 	$this->load->view('siswa_report_bulan_eng', $data);
	// }
	// public function siswa_report_sertifikat_eng(){
	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['sertifikat'] = $this->md_siswa->getSertifikatEng();
	// 	$this->load->view('siswa_report_sertifikat_eng', $data);
	// }

	// public function siswa_report_pick_math(){

	// 	// $this->data['hasil'] = $this->md_siswa->getUser('data_siswa');
	// 	$data['kelas'] = $this->md_siswa->getKelasMath();
	// 	$data['level'] = $this->md_siswa->getLevelMath();
	// 	$data['level_awal'] = $this->md_siswa->getLevelAwalMath();
	// 	$this->load->view('siswa_report_pick_math', $data);
	// }


	// public function siswa_report_pick_eng(){

	// 	// $this->data['hasil'] = $this->md_siswa->getEnglish('data_siswaenglish');
	// 	$data['kelas'] = $this->md_siswa->getKelasEng();
	// 	$data['level'] = $this->md_siswa->getLevelEng();
	// 	$data['level_awal'] = $this->md_siswa->getLevelAwalEng();
	// 	$this->load->view('siswa_report_pick_eng', $data);
	// }

	// public function report()
	// {
	// // 	$data = array(
	// // 	'isi' => $this->md_nilai->dataMahasiswa(),
	// // ); 
	// 	$data['siswa'] = $this->md_nilai->dataMahasiswa();
	// 	$this->load->view('laporan/v_report', $data);
	// }


	public function report2()
	{
	// 	$data = array(
	// 	'isi' => $this->md_nilai->dataMahasiswa(),
	// ); 
		$data['siswaeng'] = $this->md_nilai->dataMahasiswaeng();
		$this->load->view('laporan/v_report2', $data);
	}

	public function report3()
	{
	// 	$data = array(
	// 	'isi' => $this->md_nilai->dataMahasiswa(),
	// ); 
		$data['siswacoba'] = $this->md_nilai->dataSiswacoba();
		$this->load->view('laporan/v_report3', $data);
	}

	public function report4()
	{
	// 	$data = array(
	// 	'isi' => $this->md_nilai->dataMahasiswa(),
	// ); 
		$data['siswacoba2'] = $this->md_nilai->dataSiswacoba2();
		$this->load->view('laporan/v_report4', $data);
	}

	public function daftarKontak(){
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['jam_keluar']=$this->uri->segment(5);
		$this->data['id_absen']=$this->uri->segment(3);
		$this->load->view('daftarKontak',$this->data);
	}

public function daftarKontakspp(){
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['bulan']=$this->uri->segment(5);
		$this->data['id_spp']=$this->uri->segment(3);
		$this->data['id_siswa']=$this->uri->segment(4);
		$this->load->view('daftarKontakspp',$this->data);
	}

	public function daftarKontakspp2(){
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['bulan']=$this->uri->segment(5);
		$this->data['id_spp2']=$this->uri->segment(3);
		$this->load->view('daftarKontakspp2',$this->data);
	}


	public function daftarKontak2(){
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['jam_keluar']=$this->uri->segment(5);
		$this->data['id_absen']=$this->uri->segment(3);
		$this->load->view('daftarKontak2',$this->data);
	}



	


//pembimbing

	

 public function DaftarPembimbing(){
 	$this->data['hasil'] = $this->md_pemb->getAsistenmath('data_pemb');
 	$this->load->view('DaftarPembimbing', $this->data);
 }

 public function DPeng(){
 	$this->data['hasil'] = $this->md_pemb->getAssist('data_pemb2');
 	$this->load->view('DPeng', $this->data);
 }

 public function form_tambahasisten(){
 	$this->load->view('form_tambahpemb');

 }

 public function FTAeng(){
 	$this->load->view('tambah_asistenEng');

 }

public function insertpemb(){

		$nama = $_POST['nama'];
		$bidang = $_POST['bidang'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$no_hp = $_POST['no_hp'];
		$data = array('nama' => $nama, 'no_hp' => $no_hp, 'bidang'=> $bidang,
					  'tanggal_masuk' => $tanggal_masuk, 
					  'tanggal_lahir' => $tanggal_lahir);
		$tambah = $this->md_pemb->tambahData('data_pemb',$data);
		if($tambah > 0) {
			redirect('c_beranda/DaftarPembimbing');
			
		}
		else{
			echo "gagal disimpan";
		}
	
	

}

public function insertpembEng(){

		$nama = $_POST['nama'];
		$bidang = $_POST['bidang'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$no_hp = $_POST['no_hp'];
		$data = array('nama' => $nama, 'no_hp' => $no_hp, 'bidang'=> $bidang,
					  'tanggal_masuk' => $tanggal_masuk, 
					  'tanggal_lahir' => $tanggal_lahir);
		$tambah = $this->md_pemb->tambahDataEng('data_pemb2',$data);
		if($tambah > 0) {
			redirect('c_beranda/DPeng');
			
		}
		else{
			echo "gagal disimpan";
		}
	
	

}

public function menu_dlm(){
	$this->data['hasil'] = $this->md_pemb->getAsistenmath('data_pemb');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_asisten']=$this->uri->segment(4);
		$this->data['bidang']=$this->uri->segment(5);
		$this->data['tanggal_masuk']=$this->uri->segment(6);
		
	$this->load->view('menu_dlm', $this->data);
}

public function menu_dlm2(){
	$this->data['hasil'] = $this->md_pemb->getAssist('data_pemb2');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_assist']=$this->uri->segment(4);
		$this->data['bidang']=$this->uri->segment(5);
		$this->data['tanggal_masuk']=$this->uri->segment(6);
		
	$this->load->view('menu_dlm2', $this->data);
}


public function form_absen(){
	$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_asisten']=$this->uri->segment(4);
		
		$this->data['hasilabsen'] = $this->md_absensi->getAbsenpemb('absen');
		$this->load->view('form_absen', $this->data);

}

public function form_absen2(){
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));
		$this->data['id_assist']=$this->uri->segment(4);
		
		$this->data['hasilabsen'] = $this->md_absensi->getAbsenpemb('absen');
		$this->load->view('form_absen2', $this->data);

}

public function AbsenPembimbing()
	{
		
		$this->data['hasilabsen'] = $this->md_absensi->getAbsenpemb('absen');
		
		$this->load->view('AbsenPembimbing', $this->data);
	}

public function AbsenPembimbingEng()
	{
		
		$this->data['hasilabsen'] = $this->md_absensi->getAbsenpemb('absen');
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(3));

		$this->data['id_assist']=$this->uri->segment(4);
		$this->load->view('AbsenPembimbingEng', $this->data);
	}


public function insertabsenpemb(){
		$id_asisten = $_POST['id_asisten'];
		// $id_siswaenglish = NULL;
		// $id_siswagabung = NULL;
		$bidang = $_POST['bidang'];
		$nama = $_POST['nama'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = 'NULL';
		$data = array('id_asisten' => $id_asisten, 'nama' => $nama, 'tanggal_masuk' => $tanggal_masuk,
					  'jam_masuk' => $jam_masuk,'jam_keluar' => NULL, 'bidang' => $bidang);
		$tambah = $this->md_absensi->tambahDatapemb('absen',$data);
		if($tambah > 0) {
			redirect('c_beranda/AbsenPembimbing');
			
		}
		else{
			echo "gagal disimpan";
		}

}

	public function insertabsencoba(){
		$id_coba = $_POST['id_coba'];
		// $id_siswaenglish = NULL;
		// $id_siswagabung = NULL;
		$subject_mp= $_POST['subject_mp'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = 'NULL';
		$data = array('id_coba' => $id_coba, 'nama' => $nama, 'kelas' => $kelas, 'tanggal_masuk' => $tanggal_masuk,
					  'jam_masuk' => $jam_masuk,'jam_keluar' => NULL, 'subject_mp
					  ' => $subject_mp
					  );
		$tambah = $this->md_absensi->tambahDatacoba('absen_coba',$data);
		if($tambah > 0) {
			redirect('c_beranda/Absensisiswa');
			
		}
		else{
			echo "gagal disimpan";
		}

}

public function insertabsencoba2(){
		$id_coba2 = $_POST['id_coba2'];
		// $id_siswaenglish = NULL;
		// $id_siswagabung = NULL;
		$subject_mp= $_POST['subject_mp'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = 'NULL';
		$data = array('id_coba2' => $id_coba2, 'nama' => $nama, 'kelas' => $kelas, 'tanggal_masuk' => $tanggal_masuk,
					  'jam_masuk' => $jam_masuk,'jam_keluar' => NULL, 'subject_mp
					  ' => $subject_mp
					  );
		$tambah = $this->md_absensi->tambahDatacoba('absen_coba',$data);
		if($tambah > 0) {
			redirect('c_beranda/Absensisiswaeng');
			
		}
		else{
			echo "gagal disimpan";
		}

}
public function insertabsenpemb2(){
		$id_assist = $_POST['id_assist'];
		// $id_siswaenglish = NULL;
		// $id_siswagabung = NULL;
		$bidang = $_POST['bidang'];
		$nama = $_POST['nama'];
		$tanggal_masuk = $_POST['tanggal_masuk'];
		$jam_masuk = $_POST['jam_masuk'];
		$jam_keluar = 'NULL';
		$data = array('id_assist' => $id_assist, 'nama' => $nama, 'tanggal_masuk' => $tanggal_masuk,
					  'jam_masuk' => $jam_masuk,'jam_keluar' => NULL, 'bidang' => $bidang);
		$tambah = $this->md_absensi->tambahDatapemb('absen',$data);
		if($tambah > 0) {
			redirect('c_beranda/AbsenPembimbing');
			
		}
		else{
			echo "gagal disimpan";
		}

}

public function form_editabsen($id){

		$this->data['id_absen']=$this->uri->segment(3);
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(4));
		$this->data['jam_keluar']=$this->uri->segment(5);
		$this->data['id_asisten'] = $this->uri->segment(6);
		$this->data['dataEditpemb'] = $this->md_absensi->dataEditpemb('absen',$id);
		$this->load->view('form_editabsen',$this->data);
	}

	public function form_editabsen2($id){

		$this->data['id_absen']=$this->uri->segment(3);
		$this->data['nama']=str_replace("%20"," ",$this->uri->segment(4));
		$this->data['jam_keluar']=$this->uri->segment(5);
		$this->data['id_assist'] = $this->uri->segment(6);
		$this->data['dataEditpemb'] = $this->md_absensi->dataEditpemb('absen',$id);
		$this->load->view('form_editabsen2',$this->data);
	}
	
}

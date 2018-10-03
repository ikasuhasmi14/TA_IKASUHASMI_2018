<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function login(){
		$user = $this->input->post('user',true);
		$pass = $this->input->post('pass',true);
		$cek = $this->login_model->prosesLogin($user,$pass);
		$hasil = count($cek);
		if($hasil > 0){
		$select = $this->db->get_where('asisten_pembimbing', array('username'=> $user, 'password' => $pass))-> row();


		$data = array(
			'logged_in'=> true, 
			'loger' => $select -> username,
			'jabatan' => $select -> jabatan
		);
		$this->session->set_userdata($data);	
		redirect('c_beranda/index');
			
		}
		else{
			$this->session->set_flashdata('err','Username dan Password salah');
			redirect('welcome/index');
		}
	}
	// public function pageBeranda(){

	// 	$data = array(
	// 		'sertif' => $this->md_siswa->getsertif(),
	// 		'mathsiswa' => $this->md_siswa->getUserMath(),
	// 		'englishsiswa' =>$this->md_siswa->getUserEnglish(),
	// 	);
		
	// 	$this->load->view('index',$data);

	// }
	
	
}

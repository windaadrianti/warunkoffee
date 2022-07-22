<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Latihan3 extends CI_Controller {
		// Construct ini dapat juga berfungsi untuk memanggil pertama helper atau library yang akan digunakan
		// function __construct(){
		// 	parent::__construct();
		// 	$this->load->model('M_latihan3');
		// } 

		// public function index()
		// {
		// 	// get data pegawai pada model
		// 	$data['list_pegawai'] = $this->M_latihan3->getDataPegawai();
		// 	//var_dump($data['list_pegawai']);die;//
		// 	// load view v_latihan2
		// 	$this->load->view('v_latihan3', $data);
		// }

		function index()
		{
			//memuat view dengan nama V_latihan3
			$this->load->view('v_latihan3');
		}

		function cek_login()
		{
			//Mendeklarasikan method POST dengan variabel
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			// mengecek login dengan username = robert dan password = 12345
			if ($username == 'robert' && $password == '12345') {
				// Membuat session name
				$this->session->set_userdata('username',$username);
				//jika username dan password benar maka akan mendirect ke halaman home
				redirect(base_url('/index.php/latihan3/home'));
			}
			else
			{
				// Jika username atau password salah
				echo 'Username atau Password salah!';
			}

		}
		
		function home()
		{
			// cek session jika masih aktif
			if ($this->session->userdata('username')) {
				// redirect ke halaman session aktif
				$this->load->view('v_latihan3_home');
			}
			else
			{
				// redirect ke halaman index jika session telah dihapus
				redirect(base_url('/index.php/latihan3')); 
			}
		}

		function logout()
		{
			// Menghapus session yang telah dibuat
			$this->session->sess_destroy();
			// redirect ke halaman login
			redirect(base_url('/index.php/latihan3/'));
		}
	}
?>
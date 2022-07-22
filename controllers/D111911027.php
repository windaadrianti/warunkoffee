<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class D111911027 extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('M_d111911027');
		} 

		function index()
		{
			//memuat view dengan nama V_latihan3
			if ($this->session->userdata('username')) {
				redirect(base_url('/index.php/d111911027/home')); 
			}
			else {
				$this->load->view('v_D111911027');	
			}
			
		}

		function cek_login()
		{
			//Mendeklarasikan method POST dengan variabel
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$akses = $this->input->post('akses');

			// mengecek login dengan username = robert dan password = 12345
			if ($username == 'D111911027' && $password == 'D111911027' && $akses == 'admin') {
				// Membuat session name
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('akses',$akses);
				//jika username dan password benar maka akan mendirect ke halaman home
				redirect(base_url('/index.php/d111911027/home'));
			}
			else
			{
				// Jika username atau password salah
				echo 'Username / Password / Hak Akses SALAH!';
			}

		}
		
		function home()
		{
			// cek session jika masih aktif
			if ($this->session->userdata('username')) {
				// redirect ke halaman session aktif
				$this->load->view('v_d111911027_utama');
			}
			else
			{
				// redirect ke halaman index jika session telah dihapus
				redirect(base_url('/index.php/d111911027')); 
			}
		}

		function about()
		{
			// cek session jika masih aktif
			if ($this->session->userdata('username')) {
				// redirect ke halaman session aktif
				$this->load->view('v_d111911027_about');
			}
			else
			{
				// redirect ke halaman index jika session telah dihapus
				redirect(base_url('/index.php/d111911027')); 
			}
		}

		function logout()
		{
			// Menghapus session yang telah dibuat
			$this->session->sess_destroy();
			// redirect ke halaman login
			redirect(base_url('/index.php/d111911027/'));
		}
	}
?>
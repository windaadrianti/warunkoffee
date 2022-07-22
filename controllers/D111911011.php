<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class D111911011 extends CI_Controller{
		
		function index()
		{
			if ($this->session->userdata('username')) {
				$this->load->view('/index/D111911011/home');
			}else{
				$this->load->view('v_D111911011');
			}
		}

		function cek_login()
		{
			if ($this->session->userdata('username'))
			{
				$this->load->view('/index/D111911011/home');
			}
			else
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$akses = $this->input->post('akses');

				if($username =='D111911011' && $password =='D111911011' && $akses=='admin'){

					$this->session->set_userdata('username',$username);
					$this->session->set_userdata('akses',$akses);

					redirect(base_url('/index.php/D111911011/home'));
				}else{

					echo 'Username, password atau hak akses SALAH!';
				}
			}
		}

		function home(){
			if ($this->session->userdata('username')) 
			{
				$this->load->view('v_D111911011_home');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function tentang(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_tentang');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
			// echo "Blalala";
		}

		function novell(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_novell');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function penulis(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_penulis');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function penerbit(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_penerbit');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function tahun(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_tahun');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function genre(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_genre');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}


		function septihan(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_septihan');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function acha(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_acha');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function sastra(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_sastra');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function narasi(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_narasi');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function argantara(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_argantara');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function galaksi(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_galaksi');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function antariksa(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_antariksa');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function antares(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_antares');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function dikta(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_dikta');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function magma(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_magma');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function alister(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_alister');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function dilan(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_dilan');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function milea(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_milea');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function ezaquel(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_ezaquel');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function prince(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_prince');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function rival(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_rival');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function renata(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_renata');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function raga(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_raga');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function iceboy(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_iceboy');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function adnan(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_adnan');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function arthan(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_arthan');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function skala(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_skala');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function areksa(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_areksa');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function leiden(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_leiden');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function albara(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_albara');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function primrose(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_primrose');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function serein(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_serein');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function aletta(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_aletta');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function filove(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_filove');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function inseparable(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_inseparable');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function alaluna(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_alaluna');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function ayoputus(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_ayoputus');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function dearAllah(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_dearAllah');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function retak(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_retak');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function arkanara(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_arkanara');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function bumi(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_bumi');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function hujan(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_hujan');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function rezvan(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_rezvan');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function braga(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_braga');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function arga(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_arga');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function telukalaska(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_telukalaska');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}

		function abara(){
			if ($this->session->userdata('username'))
			{
				$this->load->view('v_abara');
			}
			else
			{
				redirect(base_url('/index.php/D111911011'));
			}
		}


		function logout()
		{
			$this->session->sess_destroy();
			redirect(base_url('/index.php/D111911011/'));
		}
	}
  ?>
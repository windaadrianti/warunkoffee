<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class Utama extends CI_Controller {
		// Construct ini dapat juga berfungsi untuk memanggil pertama helper atau library yang akan digunakan
		function __contruct(){
			parent::construct();
		}

		public function index()
		{
			// load view v_beranda
			$data['content'] = 'v_beranda';
	
			$this->load->view('v_utama',$data);
		}
	}

 ?>
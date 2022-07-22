<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class Latihan2 extends CI_Controller {
		// Construct ini dapat juga berfungsi untuk memanggil pertama helper atau library yang akan digunakan
		function __construct(){
			parent::__construct();
			$this->load->model('M_latihan2');
		} 

		public function index()
		{
			// get data pegawai pada model
			$data['list_pegawai'] = $this->M_latihan2->getDataPegawai();

			// load view v_latihan2
			$this->load->view('v_latihan2', $data);
		}
	}
?>
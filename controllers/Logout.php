<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class Logout extends CI_Controller {
		// Construct ini dapat juga berfungsi untuk memanggil pertama helper atau library yang akan digunakan
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->library('form_validation');
		}

		public function index()
		{
			if ($this->session->userdata('login')) {
				$this->session->unset_userdata('login');
				session_destroy();
				redirect('');
			}
			else
			{
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

 ?>
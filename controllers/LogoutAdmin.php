<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class LogoutAdmin extends CI_Controller {
		// Construct ini dapat juga berfungsi untuk memanggil pertama helper atau library yang akan digunakan
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->library('form_validation');
		}

		public function index()
		{
			if ($this->session->userdata('admin')) {
				$this->session->unset_userdata('admin');
				session_destroy();
				header("location: ".base_url()."index.php/loginAdmin");
			}
			else
			{
				header("location: ".base_url()."index.php/warunkoffeeadmin");
			}
		}
	}

 ?>
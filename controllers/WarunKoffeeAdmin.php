<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class WarunKoffeeAdmin extends CI_Controller {
		// Construct ini dapat juga berfungsi untuk memanggil pertama helper atau library yang akan digunakan
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->model("M_admin");
			$this->load->library('form_validation');
		}

		public function index()
		{
			// load view v_beranda
			$data['content'] = 'v_homeAdmin';
			$data['list_owner'] = $this->M_warunKoffee->getAdmin();
			$data['list_career'] = $this->M_warunKoffee->getCareer();
			$data['history'] = $this->M_warunKoffee->getHistory();
			$data['sessionAdmin'] = $this->session->userdata('admin');
			if ($data['sessionAdmin']) {
				$data['admin_name'] = $data['sessionAdmin']['admin_name'];
	        	$data['admin_email'] = $data['sessionAdmin']['admin_email'];
	        	$this->load->view('v_admin_warunKoffee', $data);
			}
			else
			{
				header("location: ".base_url()."index.php/loginAdmin");
			}
		}
	}

 ?>
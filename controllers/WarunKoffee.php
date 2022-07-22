<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class WarunKoffee extends CI_Controller {
		// Construct ini dapat juga berfungsi untuk memanggil pertama helper atau library yang akan digunakan
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->library('form_validation');
		}

		public function index()
		{
			// load view v_beranda
			$data['content'] = 'v_homeWK';
			$data['list_owner'] = $this->M_warunKoffee->getAdmin();
			$data['list_career'] = $this->M_warunKoffee->getCareer();
			$data['history'] = $this->M_warunKoffee->getHistory();
			$data['session'] = $this->session->userdata('login');
			if ($data['session']) {
				$data['user_name'] = $data['session']['user_name'];
	        	$data['user_email'] = $data['session']['user_email'];
	        	$data['count'] = 1;
			}
			$this->load->view('v_warunKoffee',$data);
		}
	}

 ?>
<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class AboutUs extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->library('form_validation');
		}
		
		public function index()
		{
			// load view v_coffee
			$data['content'] = 'v_aboutUs';
			$data['list_owner'] = $this->M_warunKoffee->getAdmin();
			$data['list_career'] = $this->M_warunKoffee->getCareer();
			$data['history'] = $this->M_warunKoffee->getHistory();
			$data['session'] = $this->session->userdata('login');
			if ($data['session']) {
				$data['user_name'] = $data['session']['user_name'];
	        	$data['user_email'] = $data['session']['user_email'];
			}
			$this->load->view('v_warunKoffee', $data);
		}
	}

 ?>
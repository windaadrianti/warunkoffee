<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class Food extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->library('form_validation');
		}

		public function index()
		{
			// load view v_coffee
			$data['content'] = 'v_food';
			$data['list_grill'] = $this->M_warunKoffee->getFood();
			$data['session'] = $this->session->userdata('login');
			if ($data['session']) {
				$data['user_name'] = $data['session']['user_name'];
	        	$data['user_email'] = $data['session']['user_email'];
			}
			$this->load->view('v_warunKoffee', $data);
		}
	}

 ?>
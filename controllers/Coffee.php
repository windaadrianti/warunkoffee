<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class Coffee extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->library('form_validation');
		}

		public function index()
		{
			// load view v_coffee
			$data['list_coffee'] = $this->M_warunKoffee->getCoffee();
			$data['content'] = 'v_coffee';
			$data['session'] = $this->session->userdata('login');
			if ($data['session']) {
				$data['user_name'] = $data['session']['user_name'];
	        	$data['user_email'] = $data['session']['user_email'];
			}
			$this->load->view('v_warunKoffee', $data);
		}
	}

 ?>
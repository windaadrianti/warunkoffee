<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class FoodAdmin extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->library('form_validation');
		}

		public function index()
		{
			// load view v_coffee
			$data['list_grill'] = $this->M_warunKoffee->getFood();
			$data['content'] = 'v_foodAdmin';
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
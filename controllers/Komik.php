<?php
defined('BASEPATH') OR EXIT('No direct script acces allowed');

class Komik extends CI_Controller
{
	function __construct()
 	{
		parent::__construct();
		$this->load->model("M_buku");
		$this->load->library('form_validation');

 	}
	
	public function index()
	{
		$data['list_book'] = $this->M_buku->getbuku();
		$data['content']  ='v_komik';
		$data['session'] = $this->session->userdata('login');
		if ($data['session']) {
				$data['id'] = $data['session']['id'];
				$data['username'] = $data['session']['username'];
	        	$data['email'] = $data['session']['email'];
	         	// $data['password'] = $data['session']['password'];
	        }
		$this->load->view('v_book', $data);
	}
}
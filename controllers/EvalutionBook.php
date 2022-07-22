<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

 class EvalutionBook extends CI_Controller
 {
 	
 	function __construct()
 	{
		parent::__construct();
		$this->load->model("M_buku");

 	}

 	public function index()
 	{
 		//load view v_beranda
 		$data['list_book'] = $this->M_buku->getbuku();
 		$data['content'] = 'v_home';
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
	
 ?>

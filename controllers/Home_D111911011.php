<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

 class Utama extends CI_Controller
 {
 	
 	function __construct()
 	{
		parent::__construct();
 	}

 	public function index()
 	{
 		//load view v_beranda
 		$data['content'] = 'v_home_D111911011';

 		$this->load->view('v_D111911011_home', $data);
 	}
 	
 } 
	
 ?>
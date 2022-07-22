<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

 class Logout extends CI_Controller
 {
 	
 	function __construct()
 	{
		parent::__construct();
 	}

 	public function index()
 	{
 		
 		$data['content'] = 'v_beranda';

 		$this->load->view('v_D111911011', $data);
 	}
 	
 } 
	
 ?>
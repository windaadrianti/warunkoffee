<?php
defined('BASEPATH') OR EXIT('No direct script acces allowed');

class Home extends CI_Controller
{
	
	public function index()
	{
		$data['content']  ='v_D111911011_home';
		$this->load->view('v_book', $data);
	}
}
<?php
defined('BASEPATH') OR EXIT('No direct script acces allowed');

class Tentang extends CI_Controller
{
	
	public function index()
	{
		$data['content']  ='v_tentang';
		$this->load->view('v_D111911011_home', $data);
	}
}
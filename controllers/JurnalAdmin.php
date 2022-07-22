<?php
defined('BASEPATH') OR EXIT('No direct script acces allowed');

class JurnalAdmin extends CI_Controller
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
		$data['content']  ='v_jurnalAdmin';
		$this->load->view('v_bookAdmin', $data);

	}
	
}
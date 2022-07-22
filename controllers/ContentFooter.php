<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class ContentFooter extends CI_Controller {
		
		public function index()
		{
			// load view v_ContentFooter
			$dataFooter['contentFooter'] = 'v_contentFooter';

			$this->load->view('v_warunKoffee', $dataFooter);
		}
	}

 ?>
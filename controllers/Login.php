<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class Login extends CI_Controller {
		// Construct ini dapat juga berfungsi untuk memanggil pertama helper atau library yang akan digunakan
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->model("M_user");
			$this->load->library('form_validation');
		}

		public function index()
		{
			$user_email = $this->input->post('user_email');
			$user_password = md5($this->input->post('user_password'));
			$checkQuery = $this->M_user->checkUser($user_email, $user_password);

			// mengecek login dengan username = robert dan password = 12345
			if ($checkQuery) {
				// Membuat session name
				$session_array = array();
				foreach ($checkQuery as $row) {
					$session_array = array(
						'user_id' => $row->user_id,
						'user_name' => $row->user_name,
						'user_password' => $row->user_password,
						'user_email' => $row->user_email
					);
				$this->session->set_userdata('login', $session_array);
				redirect($_SERVER['HTTP_REFERER']);
				}
			}

			else
			{
				?>
				<script type='text/javascript'>
					alert('Username atau password salah!');
					history.go(-1);
				</script> <?php
			}
		}
	}

 ?>
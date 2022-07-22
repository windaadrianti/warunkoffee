<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class LoginAdmin extends CI_Controller {
		// Construct ini dapat juga berfungsi untuk memanggil pertama helper atau library yang akan digunakan
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->model("M_admin");
			$this->load->library('form_validation');
		}

		public function index()
		{
			if ($this->session->userdata('admin')) {
				header("Location: ".base_url()."index.php/warunkoffeeadmin");
			}

			$data['content'] = 'v_loginAdmin';
			// $data["rowUser"] = $this->M_user->getUserId($id);
			$this->load->view('v_admin_warunkoffee', $data);
		}

		public function login()
		{
			// load view v_beranda
			// $data['admin'] = $this->M_warunKoffee->getadmin();
			$admin_email = $this->input->post('admin_email');
			$admin_password = md5($this->input->post('admin_password'));
			// $where = array(
			// 	'admin_email' => $admin_email,
			// 	'admin_password' => $admin_password
			// );

			$checkQuery = $this->M_admin->checkAdmin($admin_email, $admin_password);

			// mengecek login dengan adminname = robert dan password = 12345
			if ($checkQuery) {
				// Membuat session name
				$session_array = array();
				foreach ($checkQuery as $row) {
					$session_array = array(
						'admin_id' => $row->admin_id,
						'admin_name' => $row->admin_name,
						'admin_password' => $row->admin_password,
						'admin_email' => $row->admin_email
					);
				$this->session->set_userdata('admin', $session_array);
				header("location: ".base_url()."index.php/warunkoffeeadmin");
				}
			}

			else
			{
				?>
				<script type='text/javascript'>
					alert('email or password is incorrect!');
					history.go(-1);
				</script> <?php
			}
		}
	}

 ?>
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoginBook extends CI_Controller{
		
		public function __construct()
	    {
	      parent::__construct();
	      $this->load->model("M_registrasiBook");
	      // $this->load->library('form_validation');
	    }

		public function index()
		{
			//memuat view
			$this->load->view('v_login');

		}

		public function cek_login()
		{
			//mendeklarasikan method POST dengan variable
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$akses = $this->input->post('akses');
			// var_dump($akses);exit();

			//mengecek login dengan username
			if($akses == 'admin'){

				// $cekAkun = $this->M_registrasiBook->checkUser($user_name, $user_password);

				//mengecek login dengan username=admin dan password=12345
				if($cekAkun){
					$session_array = array();
					foreach ($cekAkun as $row) {
						$session_array = array(
							'id' => $row->id,
							'username' => $row->username,
							'password' => $row->password,
							'email' => $row->email
						);
					}
				}
					//membuat session username
					$this->session->set_userdata('admin', $session_array);
					// var_dump($this->session->set_userdata('username', $user_name));exit();

					//jika username atau password benar maka akan masuk ke halaman home
				redirect(base_url('/index.php/admin'));
			}
			elseif($akses == 'user')
			{

				$cekAkun = $this->M_registrasiBook->checkUser($username, $password);

				//mengecek login dengan username// var_dump($cekAkun);exit();
				if($cekAkun){
					$session_array = array();
					foreach ($cekAkun as $row) {
						$session_array = array(
							'id' => $row->id,
							'username' => $row->username,
							'email' => $row->email
						);	
					}
					//membuat session username
					$this->session->set_userdata('login', $session_array);
					redirect('EvalutionBook');
				}
				else{
					echo "Gagal Login";
				}
			}
		}

		// //halaman home
		// function home(){
		// 	//cek session jika masih aktif
		// 	if ($this->session->userdata('username')) {
		// 		//redirect ke halaman home jika sessioon masih aktif
		// 		$this->load->view('v_login');
		// 	}else{
		// 		//redirect ke halaman index jika session telah dihapus
		// 		redirect(base_url('/index.php/login'));
		// 	}
		// }

		// function logout()
		// {

		// 	//menghapus session yang telah dibuat
		// 	$this->session->sess_destroy();
		// 	//redirect ke halaman login
		// 	redirect(base_url('/index.php/login/'));
		// }
	}
  ?>
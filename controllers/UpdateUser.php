<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class UpdateUser extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->model("M_user");
			$this->load->library(array('form_validation','session'));
		}
		
		public function index()
		{
			// load view v_coffee
			$data['session'] = $this->session->userdata('login');
			if ($data['session'] == NULL) {
				redirect(base_url());
			}
			$data['user_id'] = $data['session']['user_id'];
			$data['user_name'] = $data['session']['user_name'];
			$data['user_email'] = $data['session']['user_email'];
			$data['user_password'] = $data['session']['user_password'];
			$data['content'] = 'v_updateUser';
			$data['list_payment'] = $this->M_warunKoffee->getPayment();
			// $data["rowUser"] = $this->M_user->getUserId($id);
			$this->load->view('v_warunKoffee', $data);
		}

		public function update()
		{
			// $this->form_validation->set_rules('user_email','user_email', 'required|min_length[6]|max_length[70]');
			$user_password = $this->input->post('user_password');
			if ($this->M_user->checkUserPassword($user_password)) {
				$this->form_validation->set_rules('first_name','first_name', 'required|min_length[3]|max_length[50]');
				$this->form_validation->set_rules('last_name','last_name', 'required|min_length[3]|max_length[50]');
				$this->form_validation->set_rules('user_new_password','user_new_password','required|min_length[8]|max_length[200]');
				$this->form_validation->set_rules('confirm_new_password', 'confirm_new_password', 'matches[user_new_password]');
				if ($this->form_validation->run() === TRUE) {
					$user_id = $this->input->post('user_id');
					$enc_password = md5($this->input->post('user_new_password'));

					if ($this->input->post('last_name') != NULL) {
						$user_name = $this->input->post('first_name')." ".$this->input->post('last_name');
					}
					else 
					{
						$user_name = $this->input->post('first_name');	
					}
					// $user_email = $this->input->post('user_email');
					$user_gender = $this->input->post('user_gender');
					$user_date = strtotime($this->input->post('user_date'));
					$new_format = date('Y-m-d', $user_date);
					$country = $this->input->post('country');
					$province = $this->input->post('province');
					$city = $this->input->post('city');
					$detail = $this->input->post('detail');
					$user_address = ucwords($detail)." ".ucwords($city)." ".ucwords($province)." ".ucwords($country);
					$payment_id = $this->input->post('payment_id');
					$date = date("Y-m-d H:i:s");
					$data = array(
						'user_name' => ucwords($user_name),
						'user_password' => $enc_password,
						'user_gender' => $user_gender,
						'user_date' => $new_format,
						'user_address' => $user_address,
						'payment_id' => $payment_id,
						'user_update_at' => $date,
					);
					$this->M_user->updateUser($user_id, $data);
					$checkQuery = $this->M_user->checkUserId($user_id);

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
						?>
						<script type='text/javascript'>
							alert('You have been updated! Click Ok to continue!');
							window.location.href='../';
						</script>
						<?php
						}
					}
				}
				else
				{
					?>
						<script type='text/javascript'>
							alert('Data is not correct!');
							history.go(-1);
						</script> 
					<?php
				}	
			}
			else
			{
				?>
					<script type='text/javascript'>
						alert('Old password is not correct!');
						history.go(-1);
					</script> 
				<?php
			}
		}
	}

 ?>
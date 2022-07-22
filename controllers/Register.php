<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class Register extends CI_Controller {
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
			if ($this->session->userdata('login')) {
				redirect(base_url());
			}
			$data['content'] = 'v_signUp';
			$data['list_payment'] = $this->M_warunKoffee->getPayment();
			$this->load->view('v_warunKoffee', $data);
			
		}

		public function save()
		{
			$this->form_validation->set_rules('first_name','first_name', 'required|min_length[3]|max_length[50]');
			$this->form_validation->set_rules('first_name','last_name', 'required|min_length[3]|max_length[50]');
			$this->form_validation->set_rules('user_email','user_email', 'required|min_length[6]|max_length[70]|is_unique[user_table.user_email]');
			$this->form_validation->set_rules('user_password','user_password','required|min_length[8]|max_length[200]');
			$this->form_validation->set_rules('confirm_password', 'confirm_password', 'matches[user_password]');
			if ($this->form_validation->run() === TRUE) {
				$user_name = $this->input->post('first_name')." ".$this->input->post('last_name');
				$user_email = $this->input->post('user_email');
				$enc_password = md5($this->input->post('user_password'));
				$user_gender = $this->input->post('user_gender');
				$user_date = strtotime($this->input->post('user_date'));
				$new_format = date('Y-m-d', $user_date);
				$country = $this->input->post('country');
				$province = $this->input->post('province');
				$city = $this->input->post('city');
				$detail = $this->input->post('detail');
				$user_address = ucwords($detail)." ".ucwords($city)." ".ucwords($province)." ".ucwords($country);
				$payment_id = $this->input->post('payment_id');
				$data = array(
					'user_name' => ucwords($user_name),
					'user_email' => $user_email,
					'user_password' => $enc_password,
					'user_gender' => $user_gender,
					'user_date' => $new_format,
					'user_address' => $user_address,
					'payment_id' => $payment_id,
				);
				$this->M_user->insertUser($data);
				?>
				<script type='text/javascript'>
					alert('You have been registered! Please Login!');
					window.location.href='../';
				</script>
				<?php
			}
			else
			{
				?>
				<script type='text/javascript'>
					alert('Email is already exists or Password is not incorrect!');
					history.go(-1);
				</script> 
				<?php
			}
		}
	}

 ?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_admin extends CI_Model
	{
		private $admin_table  = "admin_table";

		// public function updateUser($user_id, $enc_password)
		// {
		// 	if ($this->input->post('last_name') != NULL) {
		// 		$user_name = $this->input->post('first_name')." ".$this->input->post('last_name');
		// 	}
		// 	else 
		// 	{
		// 		$user_name = $this->input->post('first_name');	
		// 	}
		// 	// $user_email = $this->input->post('user_email');
		// 	$user_gender = $this->input->post('user_gender');
		// 	$user_date = strtotime($this->input->post('user_date'));
		// 	$new_format = date('Y-m-d', $user_date);
		// 	$country = $this->input->post('country');
		// 	$province = $this->input->post('province');
		// 	$city = $this->input->post('city');
		// 	$detail = $this->input->post('detail');
		// 	$user_address = ucwords($detail)." ".ucwords($city)." ".ucwords($province)." ".ucwords($country);
		// 	$payment_id = $this->input->post('payment_id');
		// 	$date = date("Y-m-d H:i:s");
		// 	$data = array(
		// 		'user_name' => ucwords($user_name),
		// 		'user_password' => $enc_password,
		// 		'user_gender' => $user_gender,
		// 		'user_date' => $new_format,
		// 		'user_address' => $user_address,
		// 		'payment_id' => $payment_id,
		// 		'user_update_at' => $date,
		// 	);

		// 	return $this->db->update($this->admin_table, $data, array('user_id' => $user_id));
		// }

		public function checkAdmin($admin_email, $admin_password)
		{
			$this->db->select('*');
			$this->db->from($this->admin_table);
			$this->db->where('admin_email', $admin_email);
			$this->db->where('admin_password', $admin_password);

			$query = $this->db->get();
			return $query->result();
		}

		public function checkAdminId($admin_id)
		{
			$this->db->select('*');
			$this->db->from($this->admin_table);
			$this->db->where('admin_id', $admin_id);

			$query = $this->db->get();
			return $query->result();
		}

		public function checkUserPassword($user_password)
		{
			return $this->db->get_where($this->admin_table, ["user_password" => $user_password]);
		}
	}

?>
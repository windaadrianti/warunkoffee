<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class M_user extends CI_Model
	{
		private $user_table  = "user_table";

		public function insertUser($data = array())
		{
			return $this->db->insert('user_table', $data);
		}

		public function updateUser($user_id, $data = array())
		{
			return $this->db->update($this->user_table, $data, array('user_id' => $user_id));
		}

		public function checkUser($user_email, $user_password)
		{
			$this->db->select('*');
			$this->db->from($this->user_table);
			$this->db->where('user_email', $user_email);
			$this->db->where('user_password', $user_password);

			$query = $this->db->get();
			return $query->result();
		}

		public function checkUserId($user_id)
		{
			$this->db->select('*');
			$this->db->from($this->user_table);
			$this->db->where('user_id', $user_id);

			$query = $this->db->get();
			return $query->result();
		}

		public function checkUserPassword($user_password)
		{
			return $this->db->get_where($this->user_table, ["user_password" => $user_password]);
		}

		public function delete($user_id)
		{
			return $this->db->delete($this->user_table, array('user_id' => $user_id));
		}
	}

?>
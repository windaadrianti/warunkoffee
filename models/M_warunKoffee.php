<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class M_warunKoffee extends CI_Model
	{
		private $admin_table  = "admin_table";
		private $coffee_table  = "coffee_table";
		private $grill_table  = "grill_table";
		private $payment_table  = "payment_table";
		private $store_table  = "store_table";
		private $transaction_table  = "transaction_table";
		private $user_table  = "user_table";
		

		public function getCoffee()
		{
			$this->db->select('*');
			$this->db->from($this->coffee_table);
			// $this->db->join($this->_table2.' b', 'b.id_jabatan=a.id_jabatan');

			$query = $this->db->get();
			return $query;
		}

		public function getFood()
		{
			$this->db->select('*');
			$this->db->from($this->grill_table);
			// $this->db->join($this->_table2.' b', 'b.id_jabatan=a.id_jabatan');

			$query = $this->db->get();
			return $query;
		}

		public function getStore()
		{
			$this->db->select('*');
			$this->db->from($this->store_table);
			// $this->db->join($this->_table2.' b', 'b.id_jabatan=a.id_jabatan');

			$query = $this->db->get();
			return $query;
		}

		public function getUserDetail()
		{
			$this->db->select('*');
			$this->db->from($this->user_table);
			// $this->db->join($this->_table2.' b', 'b.id_jabatan=a.id_jabatan');

			$query = $this->db->get();
			return $query;
		}

		public function getAdmin()
		{
			$this->db->select('*');
			$this->db->from($this->admin_table);

			$query = $this->db->get();
			return $query;
		}

		public function getUser($user_email)
		{
			$this->db->select('*');
			$this->db->from($this->user_table);
			$this->db->where('user_email', $user_email);

			$query = $this->db->get();
			return $query;	
		}

		public function getHistory()
		{
			$data = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
			return $data;
		}

		public function getCareer()
		{
			$data = array(
						array(
							'vision' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
							'mission' => array(
								0 => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit Ut enim ad',
								1 => 'Lorem ipsum dolor sit amet.',
								2 => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
								3 => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit'
							),
							'statistic' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
							'satisfaction' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit! labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo'
						)
					);
			return $data;
		}

		public function getPayment()
		{
			$this->db->select('*');
			$this->db->from($this->payment_table);

			$query = $this->db->get();
			return $query;
		}

		// public function getById($id)
		// {
		// 	return $this->db->get_where($this->_table, ["id_pegawai" => $id])->row();
		// }

		// public function getAll_Jabatan()
		// {
		// 	return $this->db->get($this->_table2)->result();
		// }

		// public function save($data = array())
		// {
		// 	return $this->db->insert($this->_table, $data);
		// }

		// public function update($id,$data = array())
		// {
		// 	// error_reporting(0);
		// 	return $this->db->update($this->_table, $data, array('id_pegawai' => $id));
		// }

		// public function delete($id)
		// {
		// 	return $this->db->delete($this->_table, array("id_pegawai" => $id));
		// }
	} 

 ?>
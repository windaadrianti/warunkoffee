<?php defined('BASEPATH') OR exit ('No direct script access allowed');
	
	class M_coffee extends CI_Model
	{
		private $coffee_table = "coffee_table";

		public function insertCoffee($data = array())
		{
			return $this->db->insert('coffee_table', $data);
		}

		public function getCoffeeId($coffee_id)
		{
			$this->db->select('*');
			$this->db->from($this->coffee_table);
			$this->db->where('coffee_id', $coffee_id);

			$query = $this->db->get();
			return $query;
			// return $this->db->get_where($this->coffee_table, ["coffe_id" => $id])->row();
		}

		public function updateCoffee($coffee_id, $data = array())
		{
			return $this->db->update($this->coffee_table, $data, array('coffee_id' => $coffee_id));
		}

		public function delete($coffee_id)
		{
			return $this->db->delete($this->coffee_table, array('coffee_id' => $coffee_id));
		}
	}
		
?>
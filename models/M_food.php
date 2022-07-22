<?php defined('BASEPATH') OR exit ('No direct script access allowed');
	
	class M_food extends CI_Model
	{
		private $grill_table = "grill_table";

		public function insertFood($data = array())
		{
			return $this->db->insert('grill_table', $data);
		}

		public function getFoodId($grill_id)
		{
			$this->db->select('*');
			$this->db->from($this->grill_table);
			$this->db->where('grill_id', $grill_id);

			$query = $this->db->get();
			return $query;
			// return $this->db->get_where($this->grill_table, ["coffe_id" => $id])->row();
		}

		public function updateFood($grill_id, $data = array())
		{

			return $this->db->update($this->grill_table, $data, array('grill_id' => $grill_id));
		}

		public function delete($grill_id)
		{
			return $this->db->delete($this->grill_table, array('grill_id' => $grill_id));
		}
	}
		
?>
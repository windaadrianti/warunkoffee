<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class M_pegawai extends CI_Model
	{
		private $_table  = "t_pegawai";
		private $_table2 = "t_jabatan";

		public function getAll()
		{
			$this->db->select('*');
			$this->db->from($this->_table.' a');
			$this->db->join($this->_table2.' b', 'b.id_jabatan=a.id_jabatan');

			$query = $this->db->get();
			return $query;
		}

		public function getById($id)
		{
			return $this->db->get_where($this->_table, ["id_pegawai" => $id])->row();
		}

		public function getAll_Jabatan()
		{
			return $this->db->get($this->_table2)->result();
		}

		public function save($data = array())
		{
			return $this->db->insert($this->_table, $data);
		}

		public function update($id,$data = array())
		{
			// error_reporting(0);
			return $this->db->update($this->_table, $data, array('id_pegawai' => $id));
		}

		public function delete($id)
		{
			return $this->db->delete($this->_table, array("id_pegawai" => $id));
		}
	} 

 ?>
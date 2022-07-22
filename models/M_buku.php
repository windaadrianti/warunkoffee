<?php defined('BASEPATH') OR exit('No direct script access allowed');

  class M_buku extends CI_Model
  {
    private $admin = "admin";
    private $buku = "buku";
    private $cart = "cart";
    private $kategori = "kategori";
    private $transaksi = "transaksi";
    private $user = "user";

  public function getbuku()
    {
      $this->db->select('*');
      $this->db->from($this->buku.' a');
      $this->db->join($this->kategori.' b', 'b.id=a.kategori_id');
      // $this->db->join($this->_table2.' b', 'b.id_jabatan=a.id_jabatan');

      $query = $this->db->get();
      return $query;
    }

    public function getkategori()
    {
      $this->db->select('*');
      $this->db->from($this->kategori);
      // $this->db->join($this->_table2.' b', 'b.id_jabatan=a.id_jabatan');

      $query = $this->db->get();
      return $query;
    }


 //    public function getAll()
 //    {
 //      $this->db->select('*');
 //      $this->db->from($this->_table.' a');
 //      $this->db->join($this->_table2.' b', 'b.id_kategori=a.id_kategori');

 //      $query = $this->db->get();
 //      return $query;
 //    }

 //    public function getById($id)
 //    {
 //      return $this->db->get_where($this->_table, ["id_pegawai" => $id])->row();
 //    }

 //    public function getAll_Jabatan()
 //    {
 //      return $this->db->get($this->_table2)->result();
 //    }

 //    public function save($data = array())
 //    {
 //      return $this->db->insert($this->_table, $data);
 //    }

 //    public function update($id,$data = array())
 //    {
 //      // error_reporting(0);
 //      return $this->db->update($this->_table, $data, array('id_pegawai' => $id));
 //    }

 //    public function delete($id)
 //    {
 //      return $this->db->delete($this->_table, array("id_pegawai" => $id));
 //    }
  } 

 ?>
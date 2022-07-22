<?php defined('BASEPATH') OR exit('No direct script access allowed');

  class M_registrasiBook extends CI_Model
  {
    private $user  = "user";
    private $admin  = "admin";

    public function getAll()
    {
      $this->db->select('*');
      $this->db->from($this->user);

      $query = $this->db->get();
      return $query;
    }

    public function checkUser($username, $password)
    {
      $this->db->select('*');
      $this->db->from($this->user);
      $this->db->where('username', $username);
      $this->db->where('password', $password);

      $query = $this->db->get();
      return $query->result();
    }

    public function save($data = array())
    {
      return $this->db->insert($this->user, $data);
    }

    public function update($id,$data = array())
    {
      return $this->db->update($this->user, $data, array('id' => $id));
    }
  }
?>
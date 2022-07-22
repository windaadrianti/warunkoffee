<?php defined('BASEPATH') OR exit('No direct script access allowed');
  
  class M_login extends CI_Model
  {
    private $admin  = "admin";

    public function admin($username, $password)
    {
      $this->db->select('*');
      $this->db->from($this->admin);
      $this->db->where('username', $username);
      $this->db->where('password', $password);

      $query = $this->db->get();
      return $query->result();
    }

    public function Password($password)
    {
      return $this->db->get_where($this->admin, ["password" => $password]);
    }

    public function user($user)
    {
      $this->db->select('*');
      $this->db->from($this->user);
      $this->db->where('username', $username);
      $this->db->where('password', $password);

      $query = $this->db->get();
      return $query->result();
    }

    public function Password($password)
    {
      return $this->db->get_where($this->user, ["password" => $password]);
    }
  }

?>
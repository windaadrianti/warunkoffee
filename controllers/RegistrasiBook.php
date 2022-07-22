<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

  class RegistrasiBook extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model("M_registrasiBook");
    }
    
    public function index()
    {
      // $data["list_user"] = $this->M_kelolaakun->getAll();
      $data['content'] = 'v_registrasiBook';
      $data['session'] = $this->session->userdata('RegistrasiBook');
         if ($data['session']) {
            $data['id'] = $data['session']['id'];
            $data['username'] = $data['session']['username'];
            $data['email'] = $data['session']['email'];
          }
      $this->load->view('v_book', $data);
    }

    public function save()
    {
      $id = $this->input->post('id');
      $data = array (
        'id' => $this->input->post('id'),
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'password' => md5($this->input->post('password')),
      );
      if($id=='')
      {
        $this->M_registrasiBook->save($data);
        redirect("LoginBook");
      }
      else
      { 
        $this->M_registrasiBook->update($id, $data);
        $this->session->set_flashdata('success', 'User berhasil diubah');
        redirect("RegistrasiBook");
      }
    }
  }
?>
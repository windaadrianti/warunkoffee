<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

  class D111911011_Pegawai extends CI_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model("M_pegawai_D111911011");
      $this->load->library('form_validation');
    }
    
    public function index()
    {
      $data["list_pegawai"] = $this->M_pegawai_D111911011->getAll();

      $data['content'] = 'v_pegawai_D111911011';

      $this->load->view('v_utama', $data);
    }

    public function open_form($id='')
    {
      $data["row"] = $this->M_pegawai_D111911011->getById($id);
      $data["jabatan"] = $this->M_pegawai_D111911011->getAll_Jabatan();
      $data['content'] = 'v_pegawai_form_D111911011';

      $this->load->view('v_utama', $data);
    }

    public function save()
    {
      $id = $this->input->post('id_pegawai');
      $data = array (
        'id_jabatan' => $this->input->post('id_jabatan'),
        'nip' => $this->input->post('nip'),
        'nama' => $this->input->post('nama'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'agama' => $this->input->post('agama'),
        'telepon' => $this->input->post('telepon'),
        'alamat' => $this->input->post('alamat'),
      );
      if($id=='')
      {
        $this->M_pegawai_D111911011->save($data);
        $this->session->set_flashdata('success', 'Pegawai berhasil ditambahkan');
        redirect("D111911011_Pegawai");
      }
      else
      { 
        $this->M_pegawai_D111911011->update($id, $data);
        $this->session->set_flashdata('success', 'Pegawai berhasil diubah');
        redirect("D111911011_Pegawai");
      }
    }

    public function delete($id)
    {
      $this->M_pegawai_D111911011->delete($id);
      $this->session->set_flashdata('success', 'Pegawai berhasil dihapus');
      redirect("D111911011_Pegawai");
    }

  }

 ?>
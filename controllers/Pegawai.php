<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class Pegawai extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_pegawai");
			$this->load->library('form_validation');
		}
		
		public function index()
		{
			// load view v_pegawai
			// error_reporting(0);
			$data["list_pegawai"] = $this->M_pegawai->getAll();

			$data['content'] = 'v_pegawai';

			$this->load->view('v_utama', $data);
		}

		public function open_form($id='') 
		{
			$data["row"] = $this->M_pegawai->getById($id);
			$data["jabatan"] = $this->M_pegawai->getAll_Jabatan();
			$data['content'] = 'v_pegawai_form';

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
			//var_dump($data);die;
			if($id=='')
			{
				$this->M_pegawai->save($data);
				$this->session->set_flashdata('success', 'Pegawai berhasil ditambahkan');
				redirect("pegawai");
			}
			else
			{ 
				$this->M_pegawai->update($id, $data);
				$this->session->set_flashdata('success', 'Pegawai berhasil diubah');
				redirect("pegawai");
			}
		}

		public function delete($id)
		{
			$this->M_pegawai->delete($id);
			$this->session->set_flashdata('success', 'Pegawai berhasil dihapus');
			redirect("pegawai");
		}

	}

 ?>
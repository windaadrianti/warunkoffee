<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Restfull extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model("M_pegawai");

			header('Access-Control-Allow-Origin: *');
			header('Access-Control-Allow-Method: PUT, GET, POST, DELETE, OPTIONS');
			header('Access-Control-Allow-Headers: Content_Type, x-xsrf-token');
		}

		public function get_all_pegawai(){
			$pegawai = $this->M_pegawai->getAll();
			if (!empty($pegawai)) {
				foreach ($pegawai->result_array() as $row) {
					$json[] = array(
						'id_pegawai' => $row['id_pegawai'],
						'nip' => $row['nip'],
						'nama_jabatan' => $row['nama_jabatan'],
						'nama' => $row['nama'],
						'agama' => $row['agama'],
						'telepon' => $row['telepon'],
						'jenis_kelamin' => $row['jenis_kelamin'],
						'alamat' => $row['alamat'],
					);
				}
			}
			else
			{
				$json = array();
			}

			echo json_encode($json);
		}

		public function get_pegawai($id_pegawai = '')
		{
			if (!empty($id_pegawai)) {
				$row = $this->M_pegawai->getById($id_pegawai);
				$json = array(
					'id_pegawai' => $row->id_pegawai,
					'nip' => $row->nip,
					'id_jabatan' => $row->id_jabatan,
					'nama' => $row->nama,
					'agama' => $row->agama,
					'telepon' => $row->telepon,
					'jenis_kelamin' => $row->jenis_kelamin,
					'alamat' => $row->alamat,
				);
			}
			else
			{
				$json = array();
			}

			echo json_encode($json);
		}

		public function add_pegawai()
		{
			$nip = $this->input->post('nip');
			$id_jabatan = $this->input->post('id_jabatan');
			$nama = $this->input->post('nama');
			$agama = $this->input->post('agama');
			$telepon = $this->input->post('telepon');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');
			
			if (!empty($nama)) {
				$data = array(
					'nip' => $nip,
					'id_jabatan' => $id_jabatan,
					'nama' => $nama,
					'agama' => $agama,
					'telepon' => $telepon,
					'jenis_kelamin' => $jenis_kelamin,
					'alamat' => $alamat,
				);

				$simpan = $this->M_pegawai->save($data);
				if ($simpan) {
					$json['status'] = 1;
				}
				else
				{
					$json['status'] = 0;
				}
			}

			echo json_encode($json);

		}

		public function edit_pegawai($id)
		{
			$nip = $this->input->post('nip');
			$id_jabatan = $this->input->post('id_jabatan');
			$nama = $this->input->post('nama');
			$agama = $this->input->post('agama');
			$telepon = $this->input->post('telepon');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$alamat = $this->input->post('alamat');
			
			if (!empty($nama)) {
				$data = array(
					'nip' => $nip,
					'id_jabatan' => $id_jabatan,
					'nama' => $nama,
					'agama' => $agama,
					'telepon' => $telepon,
					'jenis_kelamin' => $jenis_kelamin,
					'alamat' => $alamat,
				);

				$simpan = $this->M_pegawai->update($id, $data);
				if ($simpan) {
					$json['status'] = 1;
				}
				else
				{
					$json['status'] = 0;
				}
			}

			echo json_encode($json);

		}

		public function delete_pegawai($id)
		{
			if (!empty($id)) {
				$hapus = $this->M_pegawai->delete($id);
				if ($hapus) {
					$json['status'] = 1;
				}
				else
				{
					$json['status'] = 0;
				}
			}

			echo json_encode($json);
		}
	}
?>
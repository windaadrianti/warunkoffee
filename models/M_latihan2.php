<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class M_latihan2 extends CI_Model{

		// mendefinisikan function getDataPegawai() di model
		function getDataPegawai(){
			// Penampung data dengan array
			$data = array(
				array(
					'nik' => 12345,
					'nama' => 'Robert Downey Jr',
					'jabatan' => 'Iron Man'
				),
				array(
					'nik' => 313133,
					'nama' => 'Tom Holland',
					'jabatan' => 'Spider-Man'
				),
				array(
					'nik' => 221131,
					'nama' => 'Thor',
					'jabatan' => 'Son of Odin'
				),
				array(
					'nik' => 'D111911042',
					'nama' => 'Keny Kirana',
					'jabatan' => 'Mahasiswa'
				)
			);
			return $data;
		}
	} 
?>
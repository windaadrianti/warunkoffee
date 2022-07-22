<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class M_d111911027 extends CI_Model{

		// mendefinisikan function getDataPegawai() di model
		function getDataUser(){
			// Penampung data dengan array
			$data =
			array( 
					'nim' => 'D111911027',
					'nama' => 'Ecep Achmad Sutisna',
					'alamat' => 'Kp. Cigugur RT. 01 RW. 013 Desa Cigugurgirang Kec. Parongpong Kab. Bandung Barat'
			);
			return $data;
		}
	} 
?>
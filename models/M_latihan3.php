<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');

	class M_latihan3 extends CI_Model{

		// mendefinisikan function getDataPegawai() di model
		function getDataPegawai(){
			// Penampung data dengan array
			$data =
			array( 
				array(
					'nim' => 'D111911027',
					'nama' => 'Ecep Achmad Sutisna',
					'alamat' => 'Kp. Cigugur RT. 01 RW. 013 Desa Cigugurgirang Kec. Parongpong Kab. Bandung Barat'
				),
			);
			return $data;
		}
	} 
?>
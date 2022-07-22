<?php
 if(!defined('BASEPATH')) exit('No direct script access allowed'); 
	class Latihan extends CI_Controller {
		public function index()
		{
			// Memuat view dengan nama V_latihan1
			$this->load->view('v_latihan1');
		}
		public function method()
		{
			// Mendeklarasikan method POST dengan variabel
			$nilai1 = $this->input->get('nilai1');
			$nilai2 = $this->input->get('nilai2');
			$operasi = $this->input->get('operasi');
// var_dump($nilai1);s
			// Membuat kondisi perhitungan
			if ($operasi=='+') {
				$hitung = $nilai1 + $nilai2; 
			}
			elseif ($operasi == '-') {
				$hitung = $nilai1 - $nilai2;
			}
			elseif ($operasi == '*') {
				$hitung = $nilai1 * $nilai2;
			}
			elseif ($operasi == '/') {
				$hitung = $nilai1 / $nilai2;
			}
			echo "Hasilnya adalah: <b>".$hitung."</b>";
		}
	}
?>
<?php 
	defined('BASEPATH') OR exit ('No direct script access allowed');
	class perkenalkan extends CI_Controller{
		public function namasaya(){
			echo "Segment ke-1 adalah ".$this->uri->segment('1')."<br/>";
			echo "Segment ke-2 adalah ".$this->uri->segment('2')."<br/>";
			echo "Segment ke-3 adalah ".$this->uri->segment('3')."<br/>";
			echo "Segment ke-4 adalah ".$this->uri->segment('4')."<br/>";
			echo "Segment ke-5 adalah ".$this->uri->segment('5')."<br/>";
		}
	}
 ?>
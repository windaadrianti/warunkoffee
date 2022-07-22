<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class UserAdmin extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->model("M_user");
			$this->load->library('form_validation');
		}

		public function index()
		{
			// load view v_coffee
			$data['list_user'] = $this->M_warunKoffee->getUserDetail();
			$data['list_payment'] = $this->M_warunKoffee->getPayment();
			$data['content'] = 'v_userAdmin';
			$data['sessionAdmin'] = $this->session->userdata('admin');
			if ($data['sessionAdmin']) {
				$data['admin_name'] = $data['sessionAdmin']['admin_name'];
	        	$data['admin_email'] = $data['sessionAdmin']['admin_email'];
	        	$this->load->view('v_admin_warunKoffee', $data);
			}
			else
			{
				header("location: ".base_url()."index.php/loginAdmin");
			}
		}
		public function delete($user_id)
		{
			if ($this->session->userdata('admin') == NULL) {
				header("location: ".base_url()."index.php/loginAdmin");
			}
			$this->M_user->delete($user_id);
			?>
			<script type='text/javascript'>
				alert('Data has deleted successfully!');
				window.location.href='<?php echo base_url().'index.php/userAdmin'; ?>';
			</script>
			<?php
		}
	}

 ?> 
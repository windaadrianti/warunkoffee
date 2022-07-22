<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class CoffeeData extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->model("M_coffee");
			$this->load->library(array('form_validation','session'));
		}
		
		public function index()
		{
			// load view v_coffee
			if ($this->session->userdata('admin') == NULL) {
				header("location: ".base_url()."index.php/loginAdmin");
			}
			$data['content'] = 'v_coffeeAddData';
			$data['list_coffee'] = $this->M_warunKoffee->getCoffee();
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


		public function setUpdate($coffee_id)
		{
			// load view v_coffee
			if ($this->session->userdata('admin') == NULL) {
				header("location: ".base_url()."index.php/loginAdmin");
			}
			$data['content'] = 'v_coffeeUpdate';
			$data['arrayCoffee'] = $this->M_coffee->getCoffeeId($coffee_id);
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

		public function save()
		{
			if ($this->session->userdata('admin') == NULL) {
				header("location: ".base_url()."index.php/loginAdmin");
			}
			$this->form_validation->set_rules('coffee_name','coffee_name', 'required|min_length[3]|max_length[50]');
			// $this->form_validation->set_rules('coffee_price','coffee_price', 'required|callback_decimal_numeric');
			$this->form_validation->set_rules('coffee_desc','coffee_desc', 'required|min_length[6]|max_length[255]');

			if ($this->form_validation->run() === TRUE) {
				$allowed_types = array('gif','jpg','jpeg','png');
				$file_name = $_FILES["coffee_picture"]["name"];
				$file_tmp = $_FILES["coffee_picture"]["tmp_name"];
				$file_size = $_FILES["coffee_picture"]["size"];
				$explode = explode('.', $file_name);
				$extension = strtolower(end($explode));
				// var_dump(in_array($extension, $allowed_types));exit;
				if ((in_array($extension, $allowed_types)) == TRUE ) {
					move_uploaded_file($file_tmp,'assets/img/coffee/'.$file_name);
					$coffee_name = $this->input->post('coffee_name');
					$coffee_price = $this->input->post('coffee_price');
					$coffee_desc = $this->input->post('coffee_desc');
					$coffee_category = $this->input->post('coffee_category');
					$data = array(
						'coffee_name' => ucwords($coffee_name),
						'coffee_price' => $coffee_price,
						'coffee_desc' => $coffee_desc,
						'coffee_category' => $coffee_category,
						'coffee_picture' => $file_name,
					);
					$this->M_coffee->insertCoffee($data);
					?>
					<script type='text/javascript'>
						alert('Data added successfully!');
						window.location.href='<?php echo base_url().'index.php/coffeeData'; ?>';
					</script> 
					<?php
				}

				else
				{
					?>
					<script type='text/javascript'>
						alert('The extension must be gif, jpg or png!');
						history.go(-1);
					</script> 
					<?php	
				}
			}
			else
			{
				?>
					<script type='text/javascript'>
						alert('Coffee name at least must have 3 characters and the description at least must have 6 characters!');
						history.go(-1);
					</script> 
				<?php
			}	
		}

		public function update($coffee_id)
		{
			if ($this->session->userdata('admin') == NULL) {
				header("location: ".base_url()."index.php/loginAdmin");
			}
			$this->form_validation->set_rules('coffee_name','coffee_name', 'required|min_length[3]|max_length[50]');
			// $this->form_validation->set_rules('coffee_price','coffee_price', 'required|callback_decimal_numeric');
			$this->form_validation->set_rules('coffee_desc','coffee_desc', 'required|min_length[6]|max_length[255]');

			if ($this->form_validation->run() === TRUE) {
				// var_dump(in_array($extension, $allowed_types));exit;
				$file_name = $_FILES["coffee_picture"]["name"];
				if ($file_name != NULL) {
					$allowed_types = array('gif','jpg','jpeg','png');
					$file_tmp = $_FILES["coffee_picture"]["tmp_name"];
					$file_size = $_FILES["coffee_picture"]["size"];
					$explode = explode('.', $file_name);
					$extension = strtolower(end($explode));
					if ((in_array($extension, $allowed_types)) == TRUE ) {
						move_uploaded_file($file_tmp,'assets/img/coffee/'.$file_name);
						$coffee_name = $this->input->post('coffee_name');
						$coffee_price = $this->input->post('coffee_price');
						$coffee_desc = $this->input->post('coffee_desc');
						$coffee_category = $this->input->post('coffee_category');
						$data = array(
							'coffee_name' => ucwords($coffee_name),
							'coffee_price' => $coffee_price,
							'coffee_desc' => $coffee_desc,
							'coffee_category' => $coffee_category,
							'coffee_picture' => $file_name,
						);
					}
					else
					{
						?>
						<script type='text/javascript'>
							alert('The extension must be gif, jpg or png!');
							history.go(-1);
						</script> 
						<?php
					}	
				}
				else
				{
					$coffee_name = $this->input->post('coffee_name');
					$coffee_price = $this->input->post('coffee_price');
					$coffee_desc = $this->input->post('coffee_desc');
					$coffee_category = $this->input->post('coffee_category');
					$data = array(
						'coffee_name' => ucwords($coffee_name),
						'coffee_price' => $coffee_price,
						'coffee_desc' => $coffee_desc,
						'coffee_category' => $coffee_category,
					);	
				}

				$this->M_coffee->updateCoffee($coffee_id, $data);
				?>
				<script type='text/javascript'>
					alert('Data has changed successfully!');
					window.location.href='<?php echo base_url().'index.php/coffeeAdmin'; ?>';
				</script> 
				<?php
			}
			else
			{
				?>
					<script type='text/javascript'>
						alert('Coffee name at least must have 3 characters and the description at least must have 6 characters!');
						history.go(-1);
					</script> 
				<?php
			}	
		}

		public function delete($coffee_id)
		{
			if ($this->session->userdata('admin') == NULL) {
				header("location: ".base_url()."index.php/loginAdmin");
			}
			$this->M_coffee->delete($coffee_id);
			?>
			<script type='text/javascript'>
				alert('Data has deleted successfully!');
				window.location.href='<?php echo base_url().'index.php/coffeeAdmin'; ?>';
			</script>
			<?php
		}
	}

 ?>
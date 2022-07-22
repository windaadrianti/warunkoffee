<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');

	class FoodData extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model("M_warunKoffee");
			$this->load->model("M_food");
			$this->load->library(array('form_validation','session'));
		}
		
		public function index()
		{
			// load view v_coffee
			if ($this->session->userdata('admin') == NULL) {
				header("location: ".base_url()."index.php/loginAdmin");
			}
			$data['content'] = 'v_foodAddData';
			$data['list_grill'] = $this->M_warunKoffee->getFood();
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


		public function setUpdate($grill_id)
		{
			// load view v_coffee
			if ($this->session->userdata('admin') == NULL) {
				header("location: ".base_url()."index.php/loginAdmin");
			}
			$data['content'] = 'v_foodUpdate';
			$data['arrayGrill'] = $this->M_food->getFoodId($grill_id);
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
			$this->form_validation->set_rules('grill_name','grill_name', 'required|min_length[3]|max_length[50]');
			// $this->form_validation->set_rules('grill_price','grill_price', 'required|callback_decimal_numeric');
			$this->form_validation->set_rules('grill_desc','grill_desc', 'required|min_length[6]|max_length[255]');

			if ($this->form_validation->run() === TRUE) {

				$allowed_types = array('gif','jpg','jpeg','png');
				$file_name = $_FILES["grill_picture"]["name"];
				$file_tmp = $_FILES["grill_picture"]["tmp_name"];
				$file_size = $_FILES["grill_picture"]["size"];
				$explode = explode('.', $file_name);
				$extension = strtolower(end($explode));
				// var_dump(in_array($extension, $allowed_types));exit;
				if ((in_array($extension, $allowed_types)) == TRUE ) {
					$grill_name = $this->input->post('grill_name');
					$grill_price = $this->input->post('grill_price');
					$grill_desc = $this->input->post('grill_desc');
					$grill_category = $this->input->post('grill_category');
					$data = array(
						'grill_name' => ucwords($grill_name),
						'grill_price' => $grill_price,
						'grill_desc' => $grill_desc,
						'grill_category' => $grill_category,
						'grill_picture' => $file_name,
					);
					move_uploaded_file($file_tmp,'assets/img/grill/'.$file_name);
					$this->M_food->insertFood($data);
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
						alert('Food name at least must have 3 characters and the description at least must have 6 characters!');
						history.go(-1);
					</script> 
				<?php
			}	
		}

		public function update($grill_id)
		{
			if ($this->session->userdata('admin') == NULL) {
				header("location: ".base_url()."index.php/loginAdmin");
			}
			$this->form_validation->set_rules('grill_name','grill_name', 'required|min_length[3]|max_length[50]');
			// $this->form_validation->set_rules('grillice','grillice', 'required|callback_decimal_numeric');
			$this->form_validation->set_rules('grill_desc','grill_desc', 'required|min_length[6]|max_length[255]');

			if ($this->form_validation->run() === TRUE) {
				// var_dump(in_array($extension, $allowed_types));exit;
				$file_name = $_FILES["grill_picture"]["name"];
				
				if ($file_name != NULL) {
					$allowed_types = array('gif','jpg','jpeg','png');
					$file_tmp = $_FILES["grill_picture"]["tmp_name"];
					$file_size = $_FILES["grill_picture"]["size"];
					$explode = explode('.', $file_name);
					$extension = strtolower(end($explode));
					
					if ((in_array($extension, $allowed_types)) == TRUE ) {
						move_uploaded_file($file_tmp,'assets/img/grill/'.$file_name);
						$grill_name = $this->input->post('grill_name');
						$grill_price = $this->input->post('grill_price');
						$grill_desc = $this->input->post('grill_desc');
						$grill_category = $this->input->post('grill_category');
						$data = array(
							'grill_name' => ucwords($grill_name),
							'grill_price' => $grill_price,
							'grill_desc' => $grill_desc,
							'grill_category' => $grill_category,
							'grill_picture' => $file_name,
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
				elseif ($file_name == NULL)
				{
					$grill_name = $this->input->post('grill_name');
					$grill_price = $this->input->post('grill_price');
					$grill_desc = $this->input->post('grill_desc');
					$grill_category = $this->input->post('grill_category');
					$data = array(
						'grill_name' => ucwords($grill_name),
						'grill_price' => $grill_price,
						'grill_desc' => $grill_desc,
						'grill_category' => $grill_category,
					);	
				}
				$this->M_food->updateFood($grill_id, $data);
				?>
				<script type='text/javascript'>
					alert('Data has changed successfully!');
					window.location.href='<?php echo base_url().'index.php/foodAdmin'; ?>';
				</script> 
				<?php
			}
			else
			{
				?>
					<script type='text/javascript'>
						alert('Food name at least must have 3 characters and the description at least must have 6 characters!');
						history.go(-1);
					</script> 
				<?php
			}	
		}

		public function delete($grill_id)
		{
			if ($this->session->userdata('admin') == NULL) {
				header("location: ".base_url()."index.php/loginAdmin");
			}
			$this->M_food->delete($grill_id);
			?>
			<script type='text/javascript'>
				alert('Data has deleted successfully!');
				window.location.href='<?php echo base_url().'index.php/foodAdmin'; ?>';
			</script>
			<?php
		}
	}

 ?>
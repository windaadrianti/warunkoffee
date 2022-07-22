<title>WarunKoffee - User</title>
<script type="text/javascript">
    function setDatePicker(){
	  $(".datepicker").datepicker({
	    format: "yyyy-mm-dd",
	    todayHighlight: true,
	    autoclose: true
	  }).attr("readonly", "readonly").css({"cursor":"pointer", "background":"white"});
	}
</script>
<div class="container mt-5 mb-0 p-5 rounded">
	<hr style="background-color: transparent;">
	<hr style="background-color: transparent;">
	<h3 class="py-3" style="text-align: center;">Update Profile</h3>
	<form class="signUp" action="<?php echo base_url();?>index.php/updateUser/update" method="POST">
		<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" class="form-control">
	   	<div  style="background-color: #F0F0F0;" class="container p-5 rounded">
	  	<div class="container px-5">
			<label for="dob">Account Data</label>
	  		<div class="row mb-4">
			    <div class="col">
			      <div class="input-group">
				  	<div class="input-group-prepend">
					    <span class="input-group-text" id="inputGroup-sizing-default">
					    	<i class="fa fa-user" aria-hidden="true"></i>
					    </span>
				  	</div>
				  	<?php
				  		error_reporting(0);
				  		// $arr_name = str_split($user_name);
				  		$split_name = explode(" ", $user_name, 2);
				  		// for ($i=0; $i <count($user_name) ; $i++) { 
				  	 ?>
				  	<?php 
				  		if ($split_name) {
				  			$first_name = $split_name[0];
				  			$last_name = $split_name[1];
				  		}
				  		else
				  		{
				  			$first_name = $split_name[0];
				  			$last_name = "";
				  		}
				  	?>
				  	<input name="first_name" type="text" class="form-control" placeholder="First Name" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $first_name; ?>">
			  	  </div>
			    </div>
			    <div class="col">
			    	<div class="input-group">
				  		<input name="last_name" type="text" class="form-control" placeholder="Last Name" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $last_name; ?>">
			  		</div>
			    </div>
	  		</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-envelope" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="email" name="user_email" class="form-control" placeholder="E-Mail" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $user_email; ?>" disabled>
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-key" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="password" class="form-control" name="user_password" placeholder="Old Password" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-key" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="password" class="form-control" name="user_new_password" placeholder="New Password" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-check" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="password" class="form-control" name="confirm_new_password" placeholder="Confirm New Password" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<hr>
			<label for="dob">Gender</label>
		  	<div class="row mb-4">
			    <div class="col">
			      	<div class="input-group">
					  	<div class="input-group-prepend">
						    <div class="input-group-text">
						    	<input name="user_gender" value="L" type="radio" aria-label="Radio button for following text input">
						    </div>
					  	</div>
					  	<input type="text" class="form-control" placeholder="Male" disabled aria-label="Text input with radio button">
			  	  	</div>
			    </div>
			    <div class="col">
			    	<div class="input-group">
					  	<div class="input-group-prepend">
						    <div class="input-group-text">
						    	<input name="user_gender" value="P" type="radio" aria-label="Radio button for following text input">
						    </div>
					  	</div>
					  	<input type="text" class="form-control" placeholder="Female" disabled aria-label="Text input with radio button">
				  	</div>
			    </div>
	  		</div>
	  		<div class="input-group">
			   <label for="dob">Tanggal Lahir</label>
			      <div class="input-group date">
			         <input name="user_date" type="text" id="datepicker" class="form-control">
			         <script>
			         	$('#datepicker').datepicker({
				            uiLibrary: 'bootstrap4'
				        });
			         </script>
			      </div>
			</div>
			<hr>
			<label for="dob">Address</label>
			<div class="input-group mb-3">
			  	<div class="input-group-prepend">
				    <span class="input-group-text px-5" id="inputGroup-sizing-default">
				    	Country
				    </span>
			  	</div>
			  	<input type="text" class="form-control" name="country" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<div class="input-group mb-3">
			  	<div class="input-group-prepend">
				    <span class="input-group-text px-5" id="inputGroup-sizing-default">
				    	Province
				    </span>
			  	</div>
			  	<input type="text" class="form-control" name="province" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<div class="input-group mb-3">
			  	<div class="input-group-prepend">
				    <span class="input-group-text px-5" id="inputGroup-sizing-default">
				    	City
				    </span>
			  	</div>
			  	<input type="text" class="form-control" name="city" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<div class="input-group mb-3">
			  	<div class="form-group">
				    <label class="text-secondary" for="formControlTextarea1">Details</label>
				    <textarea name="detail" class="col-12 form-control" id="formControlTextarea1" rows="3" cols="100%"></textarea>
			  	</div>
		  	</div>
		  	<hr>
			<label for="dob">Payment Method</label>
		  	<div class="input-group mb-3">
			  	<select name="payment_id" class="form-control form-select form-select-lg">
					<?php 
						echo '<option value="" disabled>Choose here</option>';
						foreach ($list_payment->result() as $rowPayment) {
							echo '<option value="'.$rowPayment->payment_id.'">'.$rowPayment->payment_category.'</option>';
						}
					?>
				</select>
			</div>

  <!-- Submit button -->
		<button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
	</form>
  <!-- Register buttons -->
			<hr>
			<div class="text-center">
			    <p>or sign up with:</p>
			    <button type="button" class="btn btn-primary btn-floating mx-1">
			      <i class="fab fa-facebook-f"></i>
			    </button>

			    <button type="button" class="btn btn-primary btn-floating mx-1">
			      <i class="fab fa-google"></i>
			    </button>

			    <button type="button" class="btn btn-primary btn-floating mx-1">
			      <i class="fab fa-twitter"></i>
			    </button>

			    <button type="button" class="btn btn-primary btn-floating mx-1">
			      <i class="fab fa-github"></i>
			    </button>
		 </div>	
  	</div>
  </div>
</div>
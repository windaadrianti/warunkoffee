<title>ADMIN- LOGIN</title>
<div class="container mt-5 mb-0 p-5 rounded">
	<hr style="background-color: transparent;">
	<hr style="background-color: transparent;">
	<hr style="background-color: transparent;">
	<h3 class="py-3" style="text-align: center;">Login</h3>
	<form class="signUp" action="<?php echo base_url();?>index.php/loginadmin/login" method="POST">
	   	<div  style="background-color: #F0F0F0;" class="container p-5 rounded">
	  	<div class="container px-5">
	  		<div class="row mb-4">
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-envelope" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="email" name="admin_email" class="form-control" placeholder="E-Mail" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-key" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="password" class="form-control" name="admin_password" placeholder="Password" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>

  <!-- Submit button -->
		<button type="submit" class="btn btn-info btn-block mb-4">Sign up</button>
	</form>
  <!-- Register buttons -->
  	</div>
  </div>
</div>
</div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="icon" type="img/png" href="<?php echo base_url();?>assets/img/logo-01.png">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/custom.min.css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script> -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.js"></script>
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	 <!-- <?php if (isset($session)){ ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>	
	 <?php } ?>  -->
<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
</head>
<style type="text/css">
	button.btn-content{
		background-color: transparent;
		border: 1px solid #000;
		color: #777;
	}
	button.btn-content:hover{
		background-color: #F71C1C;
		border: 1px solid #F71C1C;
		color: #fff;
	}
	button.btn-dropdown1{
		background-color: transparent;
		border: 1px solid #fff;
		color: #777;
	}
	button.btn-dropdown1:hover{
		background-color: #F4623A;
		border: 1px solid #F4623A;
		color: #fff;
	}
	button.btn-dropdown2{
		background-color: transparent;
		border: 1px solid #fff;
		color: #777;
	}
	button.btn-dropdown2:hover{
		background-color: #F71C1C;
		border: 1px solid #F71C1C;
		color: #fff;
	}
</style>
<body>
	<!-- header -->
	<!-- <?php if ($this->session->flashdata('danger'))	{ ?>
		<div role="alert"class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
				&times; 
			</button>
			<i class="fa fa-check sign">
				<?php 
					echo $this->session->flashdata('danger');
				?>
			</i>
		</div>
	<?php } ?> -->
	<nav style="font-family: calibri;" class="navbar fixed-top navbar-expand-lg row navbar-light bg-white shadow-sm p-sm-2 p-0 mb-5">
		<div class="container">
	  		<a class="navbar-brand col-md-3 col-sm-6 mx-sm-5" href="<?php echo base_url();?>index.php">
			  <img src="<?php echo base_url();?>assets/img/logo-01.png" alt="Responsive image" width="100em">
			</a>
			<div style="text-align: center;" class="collapse navbar-collapse col-md-6 col-lg-9 mx-lg-auto mx-lg-5" id="navbarToggleExternalContent">
			    <div style="width: 100%;" class="navbar-nav col-6">
			        <a class="nav-item nav-link" href="<?php echo base_url();?>index.php">HOME</a>
			        <a class="nav-item nav-link" href="<?php echo base_url();?>index.php/coffee">COFFEE</a>
			        <a class="nav-item nav-link" href="<?php echo base_url();?>index.php/food">FOOD</a>
			        <a class="nav-item nav-link" href="<?php echo base_url();?>index.php/store">OUR STORE</a>
			        <a class="nav-item nav-link" href="<?php echo base_url();?>index.php/aboutUs">ABOUT US</a>
			        <a class="nav-item nav-link d-block d-lg-none" data-toggle="modal" data-target="#searchModal">
			        	SEARCH
			        </a>
			        <a class="nav-item nav-link d-block d-lg-none" data-toggle="modal" data-target="#accountModalLong">
			        	ACCOUNT
			        </a>
			        <a class="nav-item nav-link d-block d-lg-none" data-toggle="modal" data-target="#cartModal">
			        	CART
			        </a>
			   	</div>
			   	<div style="width: 100%;" class="navbar-nav col-md-3 mx-lg-auto mx-md-5">
			        <a class="nav-item nav-link d-none d-lg-block" data-toggle="modal" data-target="#searchModal">
			        	<i class="fa fa-search" aria-hidden="true"></i>
			        </a>
			        <a class="nav-item nav-link d-none d-lg-block" data-toggle="modal" data-target="#cartModal">
			        	<i class="fa fa-cart-plus" aria-hidden="true"></i>
			        </a>
			        <?php if (!isset($session)) { ?>
			        <a class="nav-item nav-link d-none d-lg-block" data-toggle="modal" data-target="#accountModalLong">
			        	<i class="fa fa-user" aria-hidden="true"></i>
			        </a>
			        <?php } else { ?>
			        <div class="dropdown">
					  <a class="nav-item nav-link d-none d-lg-block dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
					    <i class="fa fa-user" aria-hidden="true"></i>
					  </a>
					  <d class="dropdown-menu dropdown-menu-right px-5" aria-labelledby="dropdownMenuButton">
					    <a href="#" class="dropdown-item m-0 w-100 rounded py-3" aria-labelledby="dropdownMenuLink">
					    	<table>
					    		<tr>
					    			<td><?php echo "<h6>Account Setting</h6>"; ?></td>
					    		</tr>
					    		<tr>
					    			<td>
					    				<h4 class="text-secondary">
									    	<?php
									    		$arr_name = str_split($user_name);
									    		if (count($arr_name) >= 20) {
									    			$split_name = explode(" ", $user_name, 2);
									    			$first_name = $split_name[0];
									    			echo $first_name;
									    		}
									    		else
									    		{
									    			echo $user_name;
									    		}
									    	?>		
					    				</h4>
					    			</td>
					    		</tr>
					    	</table>
					    </a>
					    <hr>	
					  	<div class="dropdown-devider">
					    	<a style="text-decoration: none; text-align: justify;" href="<?php echo base_url();?>index.php/updateUser">
					    		<button class="dropdown-item rounded py-3 col-12 btn btn-dropdown1">
					    			<div class="row">
					    				<div class="col-1">
					    					<i class="fa fa-pencil" aria-hidden="true"></i>
					    				</div>
					    				<div class="col-1">
					    					<?php echo "Change Profile"; ?>	
					    				</div>
					    			</div>
					    		</button>
					    	</a>
					    	<a style="text-decoration: none; text-align: justify;" href="<?php echo base_url();?>index.php/logout">
					    		<button class="dropdown-item rounded py-3 col-12 btn btn-dropdown2">
					    			<div class="row">
					    				<div class="col-1">
					    					<i class="fa fa-sign-out" aria-hidden="true"></i>
					    				</div>
					    				<div class="col-1">
					    					<?php echo "Logout"; ?>	
					    				</div>
					    			</div>
					    		</button>
					    	</a>
					  	</div>
					  </div>
					</div>
			        <?php } ?>
			    </div>
			</div>
	  	</div>
	  	<button class="navbar-toggler mx-sm-5 mx-md-5" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>		
	</nav>
	<!-- Modal -->
	<!-- <?php if (isset($session)){ ?>
		<?php  ?>
			<?php if ($count < 1){ ?>
				<script type='text/javascript'>
					alert('Blablabla!');
				</script>	
			<?php } 
		}				
	?> -->

	<!-- <div class="modal hide fade" id="affirmationModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div style="background-color: #F71C1C; color: #fff;" class="modal-header">
	        <h5 class="modal-title"><?php echo "Selamat anda berhasil masuk!"; ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="input-group mb-3">
	        	<h3><?php echo $user_name; ?></h3>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div> -->

	<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div style="background-color: #F71C1C; color: #fff;" class="modal-header">
	        <h5 class="modal-title" id="searchModalLabel">Search Items</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="inputGroup-sizing-default">
			    	<i class="fa fa-search" aria-hidden="true"></i>
			    </span>
			  </div>
			  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-content">Search</button>
	      </div>
	    </div>
	  </div>
	</div>


	<div class="modal fade" id="accountModalLong" tabindex="-1" role="dialog" aria-labelledby="accountLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div style="background-color: #F71C1C; color: #fff;" class="modal-header">
	        <h5 class="modal-title" id="accountLongTitle">Account</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      	<div class="modal-body">
				<form class="login" action="<?php echo base_url().'index.php/login';?>" method="POST">
		      		<div class="first-body">
			        	<h6>Login</h6>
			        	<div class="input-group mb-3">
				        	<div class="input-group-prepend">
							    <span class="input-group-text" id="inputGroup-sizing-default">
							    	<i class="fa fa-user" aria-hidden="true"></i>
							    </span>
						  	</div>
					  		<input type="text" class="form-control" name="user_email" placeholder="Email" aria-label="Default" aria-describedby="inputGroup-sizing-default">
					  	</div>
					  	<div class="input-group mb-3">
						  	<div class="input-group-prepend">
							    <span class="input-group-text" id="inputGroup-sizing-default">
							    	<i class="fa fa-lock" aria-hidden="true"></i>
							    </span>
						  	</div>
						  	<input type="password" name="user_password" class="form-control" placeholder="Password" aria-label="Default" aria-describedby="inputGroup-sizing-default">
					  	</div>
					  	<button class="col-12 btn btn-content">Login</button>
					  	<hr>
					  	<p style="text-align: center;">Has no account? <a href="<?php echo base_url();?>index.php/register">Sign Up</a></p>
					  	<hr>
		        	</div>
		      	</form>
	      </div>
	    </div>
	  </div>
	</div>	
	<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div style="background-color: #F71C1C; color: #fff;" class="modal-header">
	        <h5 class="modal-title" id="cartModalLabel">Cart Items</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
		    <div class="container" style="text-align: center;">
		    	<i style="color:#F71C1C;" class="fa fa-exclamation-triangle" aria-hidden="true"></i>
		    	<p class="text-primary">Oops! Your cart is still empty.</p>
		    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-content">Add</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- End of Modal -->
	<!-- End of Header -->
	<!-- <div class="container my-5">
		<div class="row"> -->
			<?php 
				$this->load->view($content);
			?>
		<!-- </div>
	</div> -->
	<!-- Copyright -->
	<nav style="background-color: #F71C1C;" class="nav px-5 my-5 pt-5 flex-column">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<img src="<?php echo base_url();?>assets/img/logo-01.png" alt="Responsive image" width="150em">
				</div>
				<div class="col-2">
					<a class="nav-link text-light" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
				</div>
				<div class="col-2">
					<a class="nav-link text-light" href="<?php echo base_url();?>index.php/store">Location</a>
				</div>
				<div class="col-2">
					<a class="nav-link text-light" href="https://facebook.com/">
						<i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbspFacebook
					</a>
					<a class="nav-link text-light" href="https://youtube.com">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp&nbspYoutube
					</a>
					<a class="nav-link text-light" href="https://instagram.com">
						<i class="fa fa-instagram" aria-hidden="true"></i>&nbsp&nbspInstagram
					</a>
					<a class="nav-link text-light" href="https://twitter.com">
						<i class="fa fa-twitter-square" aria-hidden="true"></i>&nbsp&nbspTwitter
					</a>
				</div>
				<div class="col-2">
					<a class="nav-link text-light" href="#" data-toggle="modal" data-target="#cSModalLong">Costumer Service</a>
				</div>
			</div>
			<div class="row">
				<div class="my-5 col-12">
					<h6 style="text-align: center; color: #fff;">Group 3 <br> @ 2022</h6>
				</div>
			</div>
		</div>
	</nav>
	<!-- Modal -->
	<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div style="background-color: #F71C1C; color: #fff;" class="modal-header">
	        <h5 class="modal-title" id="contactModalLabel">Save the Contact</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
		    <div class="container" style="text-align: center;">
		    	<i class="fa fa-phone" aria-hidden="true"></i>
		    	<p>(022) 657 8473.</p>
		    </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" data-dismiss="modal" class="btn btn-content">Done</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="cSModalLong" tabindex="-1" role="dialog" aria-labelledby="cSLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div style="background-color: #F71C1C; color: #fff;" class="modal-header">
	        <h5 class="modal-title" id="cSLongTitle">Account</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form class="costumerService">
	      		<div class="first-body">
		        	<h6>Costumer Service</h6>
		        	<div class="input-group mb-3">
			        	<div class="input-group-prepend">
						    <span class="input-group-text" id="inputGroup-sizing-default">
						    	<i class="fa fa-user" aria-hidden="true"></i>
						    </span>
					  	</div>
				  		<input type="text" class="form-control" placeholder="Username/Email" aria-label="Default" aria-describedby="inputGroup-sizing-default">
				  	</div>
				  	<div class="input-group mb-3">
					  	<div class="input-group-prepend">
						    <textarea class="col-12 form-control" placeholder="Type Message here" id="formControlTextarea1" rows="3" cols="100%"></textarea>
						</div>
				  	</div>
				  	<button class="col-12 btn btn-content">Send Message</button>
				  	<hr>
	        	</div>
	      	</form>
	<!-- End of Modal -->
</body>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for this template --> 
<script src="<?php echo base_url(); ?>js/custom.min.js"></script>
<script src="<?php echo base_url(); ?>js/custom.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Evalution Book</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
	<link rel="icon" type="img/png" href="assets/img/logo/logo-01.png">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic">
	<link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.min.css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
	<script src="<?php base_url();?>assets/js/lib/vue.js"></script>
	<script src="<?php base_url();?>assets/js/lib/vue-router.js"></script>
</head>
<body>
	<nav style="font-family: calibri; background-color: #FA8072" class="navbar fixed-top navbar-expand-lg row navbar-light shadow p-sm-1 p-1 mb-5">
		<div class="container">
			<div class="col-lg-10 align-self-end">
				<img src="<?php echo base_url();?>assets/img/logo/logo-01.png" width="65em" class="rounded float-start" alt="Responsive image">
				<a class="navbar-brand col-md-3 col-sm-6 mx-sm-5" href="<?php echo base_url();?>index.php/EvalutionBook">
	  			<h5>Evalution Book</h5>
			</a>
			</div>
			 <div style="text-align: center;" class="collapse navbar-collapse col-md-6 col-lg-9 mx-lg-auto mx-lg-5" id="navbarToggleExternalContent">
			    <div style="width: 100%;" class="navbar-nav col-9">
			   	</div>
			</div> 
	  	</div>
	  	<button class="navbar-toggler mx-sm-5 mx-md-5" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
    	</button>
    	<div>
    		<div class="col-2">
    			<?php if ($session == NULL) { ?>
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
					    			<td>
					    				<h4 style="color: #87CEFA; text-align: center; font-weight: bold;">
									    	<?php
									    		echo $username;
									    	?>	
					    				</h4>
					    			</td>
					    		</tr>
					    	</table>
					    </a>
					    <hr>	
					  	<div class="dropdown-devider">
					    	<!-- <a style="text-decoration: none; text-align: justify;" href="<?php echo base_url();?>index.php/updateUser">
					    		<button class="dropdown-item rounded py-3 col-12 btn btn-dropdown1">
					    			<div class="row">
					    				<div class="col-1">
					    					<i class="fa fa-pencil" aria-hidden="true"></i>
					    				</div> -->
					    				<!-- <div class="col-1">
					    					<?php echo "Change Profile"; ?>	
					    				</div>
					    			</div>
					    		</button>
					    	</a> -->
					    	<a style="text-decoration: none; text-align: justify;" href="<?php echo base_url();?>index.php/LoginBook">
					    		<button class="dropdown-item rounded py-3 col-12 btn btn-dropdown2">
					    			<div class="row">
					    				<!-- <div class="col-1">
					    					<i class="fa fa-sign-out" aria-hidden="true"></i>
					    				</div> -->
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
      <!-- <a class="nav-link mx-4"  href="<?php echo base_url();?>index.php/LoginBook" role="button" aria-haspopup="true" aria-expanded="false">Login</a> -->
	</nav>
	<?php if (isset($session)){ ?>
		
	<div class="container">
		<div id="carouselSlideControls" class="carousel slide container" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="<?php echo base_url();?>assets/img/menu/hero-02.png" alt="First slide">
		      <div style="background-color: rgba(0, 0, 0, 0.3); border-radius: 20px;" class="carousel-caption d-none d-md-block">
			    <h1>WELCOME TO EVALUTION BOOK</h1>
			  </div>
		    </div>
		  </div>
		 </div>
	</div>
	<div style="text-align: center;" class="row list-group-horizontal">
		  	<a href="<?php echo base_url();?>index.php/biografi" class="col-lg-2 list-group-item list-group-item-action">
		    	Biografi
		  	</a>
		  	<a href="<?php echo base_url();?>index.php/Jurnal" class="col-lg-2 list-group-item list-group-item-action">Jurnal</a>
		  	<a href="<?php echo base_url();?>index.php/Pendidikan" class="col-lg-2 list-group-item list-group-item-action">Pendidikan</a>
		  	<a href="<?php echo base_url();?>index.php/Komik" class="col-lg-2 list-group-item list-group-item-action">Komik</a>
		  	<a href="<?php echo base_url();?>index.php/Novel" class="col-lg-2 list-group-item list-group-item-action">Novel</a>
		  	<a href="<?php echo base_url();?>index.php/Sejarah" class="col-lg-2 list-group-item list-group-item-action">Sejarah</a>
		</div>
		<div class="container" style="margin-top: 20px;">
		<div class="row">
	<?php } ?>
			<?php 
				//load content
				$this->load->view($content);
			 ?>
		</div>
		</div>
		<nav style="background-color: #FA8072;" class="nav px-5 my-5 pt-5 flex-column">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<!-- <img src="assets/img/logo/logo-footer-01.png" alt="Responsive image" width="150em"> -->
					<h5>EvalutionBook</h5>
				</div>
				<div class="col-2">
					<a class="nav-link text-light" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
				</div>
				<div class="col-2">
					<a class="nav-link text-light" href="store.html">Location</a>
				</div>
				<div class="col-2">
					<a class="nav-link text-light">
						<i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbspFacebook
					</a>
					<a class="nav-link text-light">
						<i class="fa fa-instagram" aria-hidden="true"></i>&nbsp&nbspInstagram
					</a>
					<a class="nav-link text-light">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp&nbspYoutube
					</a>
					<a class="nav-link text-light">
						<i class="fa fa-twitter-square" aria-hidden="true"></i>&nbsp&nbspTwitter
					</a>
				</div>
			</div>
			<div class="row">
				<div class="my-5 col-12">
					<h6 style="text-align: center; color: #000000;">@EvalutionBook 2021</h6>
				</div>
			</div>
		</div>
	</nav>
	<style type="text/css">
		button.btn-content{
			background-color: transparent;
			border: 1px solid #000;
			color: #777;
		}
		button.btn-content:hover{
			background-color: #00a14b;
			border: 1px solid #00a14b;
			color: #fff;
		}
		button.btn-search{
			background-color: #d1d1d1;
			border: 1px solid #d1d1d1;
			color: #777;
		}
		button.btn-search:hover{
			background-color: #a5a5a5;
			border: 1px solid #a5a5a5;
			color: #777;
		}
	</style>
</body>
</html>
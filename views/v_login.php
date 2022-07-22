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
				<a class="navbar-brand col-md-3 col-sm-6 mx-sm-5">
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
	</nav>
	<br><br>
	<div class="container mt-5 mb-0 p-5 rounded">
			<form class="signUp" action="<?php echo base_url();?>index.php/LoginBook/cek_login" method="POST">
	   	<div  style="background-color: #C0C0C0;" class="container p-5 rounded">
	   		<h3 class="py-3" style="text-align: center;">Login</h3>
	  	<div class="container px-5">
	  		<div class="row mb-4">
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <!-- <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-envelope" aria-hidden="true"></i>
				    </span> -->
			  	</div>
			  	<input type="text" name="username" class="form-control" placeholder="Username" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <!-- <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-key" aria-hidden="true"></i>
				    </span> -->
			  	</div>
			  	<input type="password" class="form-control" name="password" placeholder="Password" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<div class="mb-3 mx-3 form-check">
    			<input name="akses" type="radio" type="checkbox" class="form-check-input" id="exampleCheck1" value="admin">
    			<label name="akses" class="form-check-label" for="exampleCheck1">Admin</label>
  			</div>
  			<div class="mb-3 form-check">
    			<input name="akses" type="radio" class="form-check-input" id="exampleCheck1" value="user">
    			<label class="form-check-label" for="exampleCheck1">User</label>
  			</div>
		  	<!-- <select class="mb-3 form-select" aria-label="Default select example">
  				<option selected>Hak Akses Login</option>
  				<option value="1">Admin</option>
				<option value="2">User</option>
			</select> -->
		<button style="background-color: #FA8072" type="submit" class="btn btn-block mb-4">Login</button>
		<a href="<?php echo base_url(); ?>index.php/RegistrasiBook" style="background-color: #FA8072" type="submit" class="btn btn-block mb-4">Register</a>
	</form>
				</div>
			</div>
		</div>
		<!-- <h2>Sigin</h2>
			<form action="<?php echo base_url().'index.php/D111911011/cek_login';?>" method="POST">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Hak Akses</td>
				<td>
					<select name="akses">
						<option value="user">user</option>
						<option value="admin">admin</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="login"></td>
			</tr>
		</table>
		</form> -->
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
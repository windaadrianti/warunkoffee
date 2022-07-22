<!DOCTYPE html>
<html lang="en">
<head>
	<title>UTS Web Programming 2</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container">
			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Navbar links -->
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>index.php/d111911027/home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>index.php/d111911027/about">Tentang</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url();?>index.php/d111911027/logout">logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container" style="margin-top: 10px;">
		<div class="row">
			<div class="col-sm-12">
				<div class="thumbnail">
					<div class="caption">
						<h3>Tentang</h3>
						<div class="alert alert-success" role="alert">
							Saya adalah seorang mahasiswa jurusan teknik informatika
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Copyright -->
	<div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		@Copyright 2021 Web Programming 2
	</div>
	<!-- Copyright -->
</body>
</html>
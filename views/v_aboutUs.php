<title>WarunKoffee - About Us</title>
<div class="container mt-5 mb-0 pt-5 pb-0">
	<hr style="background-color: transparent;">
	<hr style="background-color: transparent;">
	<h3 style="text-align: center;">History</h3>
	<p class="text-primary" style="text-align: justify;">
		&nbsp &nbsp &nbsp &nbsp <?php echo $history; ?> 
		<br>
		&nbsp &nbsp &nbsp &nbsp Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat.
		<a class="text-secondary" href="#">Load more</a>
	</p>
	<hr>
	<h3 style="text-align: center;">Founder</h3>
		<?php 
			$i = 0;
			foreach ($list_owner->result() as $rowOwner) { 
				if ($i % 2 == 0) { ?>
					<div class="row my-md-5 my-lg-3">
						<div class="col-6">
							<?php echo "<img class='d-block w-75 shadow p-3 mb-5 rounded ml-5' src='".base_url().'assets/img/founder/'.$rowOwner->admin_picture."'>";?>
						</div>
						<div class="col-6">
							<table class="table mx-ld-5 mx-md-0">
								<tr class="table-light">
									<td>Name</td>
									<td>:</td>
									<td><?php echo ucwords($rowOwner->admin_name); ?></td>
								</tr>
								<tr class="table-light">
									<td>Email</td>
									<td>:</td>
									<td><?php echo strtolower($rowOwner->admin_email); ?></td>
								</tr>
								<tr class="table-light">
									<td>Motto</td>
									<td>:</td>
									<td style="font-style: italic;">"<?php echo $rowOwner->admin_motto; ?>"</td>
								</tr>
							</table>
							<div class="container row mx-md-1 px-5">
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_instagram; ?>">
										<button class="btn btn-content">
										<i class="fa fa-instagram" aria-hidden="true"></i>&nbsp&nbspInstagram
										</button>
									</a>
								</div>
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_facebook; ?>">
										<button class="btn btn-content">
										<i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbspFacebook
										</button>
									</a>	
								</div>
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_twitter; ?>">
										<button class="btn btn-content">
										<i class="fa fa-twitter-square" aria-hidden="true"></i>&nbsp&nbspTwitter
										</button>
									</a>	
								</div>
							</div>
						</div>
					</div>
		<?php
				} elseif($i % 2 == 1) { ?>
					<div class="row my-md-5 my-lg-3">
						<div class="col-6">
							<table class="table mx-ld-5 mx-md-0">
								<tr class="table-light">
									<td>Name</td>
									<td>:</td>
									<td><?php echo ucwords($rowOwner->admin_name); ?></td>
								</tr>
								<tr class="table-light">
									<td>Email</td>
									<td>:</td>
									<td><?php echo strtolower($rowOwner->admin_email); ?></td>
								</tr>
								<tr class="table-light">
									<td>Motto</td>
									<td>:</td>
									<td style="font-style: italic;">"<?php echo $rowOwner->admin_email; ?>"</td>
								</tr>
							</table>
							<div class="container row mx-md-1 px-5">
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_instagram; ?>">
										<button class="btn btn-content">
										<i class="fa fa-instagram" aria-hidden="true"></i>&nbsp&nbspInstagram
										</button>
									</a>
								</div>
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_facebook; ?>">
										<button class="btn btn-content">
										<i class="fa fa-facebook-official" aria-hidden="true"></i>&nbsp&nbspFacebook
										</button>
									</a>	
								</div>
								<div class="col-3 mx-lg-2 mx-md-5">
									<a href="<?php echo $rowOwner->admin_twitter; ?>">
										<button class="btn btn-content">
										<i class="fa fa-twitter-square" aria-hidden="true"></i>&nbsp&nbspTwitter
										</button>
									</a>	
								</div>
							</div>
						</div>
						<div class="col-6">
							<?php echo "<img class='d-block w-75 shadow p-3 mb-5 rounded ml-5' src='".base_url().'assets/img/founder/'.$rowOwner->admin_picture."'>";?>
						</div>
					</div>
		<?php
				}
			$i++;
			}
		?>
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
	</style>	
</div>
<!-- End of Body Content -->
<!-- Section -->
<section class="container page-section" id="services">
	<h2 class="text-center mt-0"><b>CAREER</b></h2>
	<hr class="divider my-4">
	<?php
	if (is_array($list_career) || is_object($list_career)) {
		foreach ($list_career as $rowCareer) { ?>
			<div class="row">
				<div class="col-3 text-center">
					<div style="border: 1px solid #f4f4f4;" class="mt-5 p-3">
						<i class="fas fa-4x fa-eye mb-4" style="color:#F71C1C;"></i>
						<h3 class="h4 mb-2">Vision</h3>
						<p class="text-muted mb-0"><?php echo $rowCareer['vision']; ?></p>
					</div>
				</div>
				<div class="col-3 text-center">
					<div style="border: 1px solid #f4f4f4;" class="mt-5 p-3">
						<i class="fas fa-4x fa-bullseye mb-4" style="color:#F71C1C;"></i>
						<h3 class="h4 mb-2">Mission</h3>
						<ol class="text-secondary" style="text-align: left;">
							<?php for ($i=0; $i < count($rowCareer['mission']); $i++) { ?>
								<li style="text-align: justify;"><?php echo $rowCareer['mission'][$i]; ?></li>
							<?php } ?>
						</ol>
					</div>
				</div>
				<div class="col-3 text-center">
					<div style="border: 1px solid #f4f4f4;" class="mt-5 p-3">
						<i class="fas fa-4x fa-bar-chart mb-4" style="color:#F71C1C;"></i>
						<h3 class="h4 mb-2">Statistic</h3>
						<p class="text-muted mb-0"><?php echo $rowCareer['statistic']; ?></p>
					</div>
				</div>
				<div class="col-3 text-center">
					<div style="border: 1px solid #f4f4f4;" class="mt-5 p-3">
						<i class="fas fa-4x fa-heart mb-4" style="color:#F71C1C;"></i>
						<h3 class="h4 mb-2">Your satisfaction is Our Priority</h3>
						<p class="text-muted mb-0"><?php echo $rowCareer['satisfaction']; ?></p>
					</div>
				</div>
			</div>
	<?php
		}
	}
	?>
	
</section>
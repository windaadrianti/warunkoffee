<title>WarunKoffee - Food</title>
<div class="container mb-5 pt-5">
	<div class= "m-5 py-5">
		<?php 
			$i = 0;
			foreach ($list_grill->result() as $rowGrill) {
				if ($rowGrill->grill_category == "list") {
					if ($i % 2 == 0) { ?>
						<table class="mb-3 shadow">
							<tr>
								<td class="p-2 pr-5" style="background-color: #F0F0F0; border-radius: 5px 0px 0px 5px;">
									<div class="py-2 px-lg-5 m-lg-5 px-md-2 m-md-2" style="color: #F71C1C;">
										<h4>
										<?php if ($session == NULL){ ?>
											<?php echo "<a class='portfolio-box' href='#' data-toggle='modal' data-target='#accountModalLong'>"; ?>
										<?php } else { ?>
											<?php echo "<a href='food/".$rowGrill->grill_id."'>"; ?>
										<?php } ?>
												<?php echo strtoupper($rowGrill->grill_name); ?>
											</a>
										</h4>
										<p><?php echo "IDR ".number_format($rowGrill->grill_price); ?></p>
										<hr style="background-color: #F71C1C;">
									</div>
								</td>
								<td class="p-1" style="background-color: #F0F0F0; border-radius: 0px 5px 5px 0px;">
								<?php if ($session == NULL){ ?>
									<?php echo "<a class='portfolio-box' href='#' data-toggle='modal' data-target='#accountModalLong'>"; ?>
								<?php } else { ?>
									<?php echo "<a href='food/".$rowGrill->grill_id."''>"; ?>
								<?php } ?>
										<?php echo "<img class='img-fluid w-100 rounded' src='".base_url().'assets/img/grill/'.$rowGrill->grill_picture."'>";?>
									</a>	
								</td>
							</tr>
						</table> <?php
					}

					elseif ($i % 2 == 1) { ?>
						<table class="mb-3 shadow">
							<tr>
								<td class="p-1" style="background-color: #F2721C; border-radius: 5px 0px 0px 5px;">
								<?php if ($session == NULL){ ?>
									<?php echo "<a class='portfolio-box' href='#' data-toggle='modal' data-target='#accountModalLong'>"; ?>
								<?php } else { ?>
									<?php echo "<a href='food/".$rowGrill->grill_id."''>"; ?>
								<?php } ?>
										<?php echo "<img class='img-fluid w-100 rounded' src='".base_url().'assets/img/grill/'.$rowGrill->grill_picture."'>";?>
									</a>	
								</td>
								<td class="p-2 pr-5" style="background-color: #F2721C; border-radius: 0px 5px 5px 0px;">
									<div class="py-2 px-lg-5 m-lg-5 px-md-2 m-md-2" style="color: #FFF;">
										<h4>
										<?php if ($session == NULL){ ?>
											<?php echo "<a class='secondLink' href='#' data-toggle='modal' data-target='#accountModalLong'>"; ?>
										<?php } else { ?>
											<?php echo "<a class='secondLink' href='food/".$rowGrill->grill_id."'>"; ?>
										<?php } ?>
												<?php echo strtoupper($rowGrill->grill_name); ?>
											</a>
										</h4>
										<p><?php echo "IDR ".number_format($rowGrill->grill_price); ?></p>
										<hr style="background-color: #FFF;">
									</div>
								</td>
							</tr>
						</table> <?php
					}
				$i++;
				}
			}
		 ?>
	</div>
</div>
<!-- End of PortofolioImage -->
<!-- Body Content -->
<div class="container mb-5 pb-5">
	<hr>
	<h2 style="color: #F71C1C; text-align: center; font-weight: bold;">NEW FOR YOU</h2>
	<div class="row">
		<?php 
			foreach ($list_grill->result() as $rowGrill) {
				if ($rowGrill->grill_category == 'potrait') { ?>
					<div class="col-4">
					<?php if ($session == NULL){ ?>
						<?php echo "<a href='#' data-toggle='modal' data-target='#accountModalLong'>"; ?>
					<?php } else { ?>
						<?php echo "<a href='food/".$rowGrill->grill_id."'>"; ?>
					<?php } ?>		
							<?php echo "<img class='w-75 p-3 mb-5 mx-5' src='".base_url().'assets/img/grill/'.$rowGrill->grill_picture."'>";?>
						</a>
						<hr>
						<div style="color: #F71C1C; text-align: center;" class="container">
							<h4>
							<?php if ($session == NULL){ ?>
								<?php echo "<a href='#' data-toggle='modal' data-target='#accountModalLong'>"; ?>
							<?php } else { ?>
								<?php echo "<a href='food/".$rowGrill->grill_id."'>"; ?>
							<?php } ?>
									<?php echo strtoupper($rowGrill->grill_name); ?>
								</a>
							</h4>
							<p><?php echo "IDR ".number_format($rowGrill->grill_price); ?></p>	
						</div>
					</div> <?php			
				}
			}
		 ?>
		
		<!-- <div class="col-4">
			<a href="<?php echo base_url();?>assets/img/grill/6-01.png">
				<img class="w-75 p-3 mb-5 mx-5" src="<?php echo base_url();?>assets/img/grill/6-01.png">
			</a>
			<hr>
			<div style="color: #F71C1C; text-align: center;" class="container">
				<h4><a href="<?php echo base_url();?>assets/img/grill/6-01.png">CHICKEN GRILLED</a></h4><p>IDR 68.9K</p>	
			</div>
		</div>
		<div class="col-4">
			<a href="<?php echo base_url();?>assets/img/grill/7-01.png">
				<img class="w-75 p-3 mb-5 mx-5" src="<?php echo base_url();?>assets/img/grill/7-01.png">
			</a>
			<hr>
			<div style="color: #F71C1C; text-align: center;" class="container">
				<h4><a href="<?php echo base_url();?>assets/img/grill/7-01.png">CHICKEN NUT SATAY</a></h4><p>IDR 34.9K</p>	
			</div>
		</div> -->
		<style type="text/css">
			h4 a:hover{
				color: #F71C1C;
			}
			h4 a.secondLink{
				color: #160C0C;
			}
			h4 a.secondLink:hover{
				color: #222;
			}
		</style>
	</div>
	<div class="row">
		<div class="col-4">
			&nbsp
		</div>
		<div class="col-4">
			<button class="btn btn-content w-100">See More</button>
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
				button.btn-food{
					background-color: #fff;
					border: 1px solid #F2721C;
					color: #F71C1C;
				}
				button.btn-food:hover{
					background-color: #F71C1C;
					border: 1px solid #F71C1C;
					color: #fff;
				}
			</style>
		</div>
		<div class="col-4">
			&nbsp
		</div>
	</div>
	<hr>
</div>
<header class="masthead p-5" style="background-image: url(<?php echo base_url();?>assets/img/grill/8-01.png);">
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center text-center">
			<div class="col-lg-10 align-self-end">
				<h1 class="text-uppercase text-white font-weight-bold">DEDICATED TO EXCELLENT</h1>
				<hr class="divider my-4">
			</div>
			<div class="col-lg-8 align-self-baseline"> 
				<p class="text-white-75 font-weight-light mb-5"> 
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
				</p>
				<a class="btn btn-header btn-primary btn-xl js-scroll-trigger" href="#">
					Find Out More
				</a>
				<style type="text/css">
					a.btn-header{
						background-color: #F71C1C;
						border: 1px solid #F71C1C;
						color: #fff;
					}
					a.btn-header:hover{
						background-color: transparent;
						border: 1px solid #fff;
						color: #fff;
					}
				</style>
			</div>
		</div>
	</div>
</header>		
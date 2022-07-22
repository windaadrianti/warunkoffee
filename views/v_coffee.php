<title>WarunKoffee - Coffee</title>
<div class="container my-5">
	<div class="row">
		<section id="portfolio" class="position-static my-5 pt-5">		
			<div class="container-fluid p-0">
				<div class="row no-gutters">
					<?php
						foreach ($list_coffee->result() as $rowCoffee) {
							if ($rowCoffee->coffee_category == "section") {
					?>
								<div class="col-lg-4 col-sm-6">
								<?php if ($session == NULL){ ?>
									<?php echo "<a class='portfolio-box' href='#' data-toggle='modal' data-target='#accountModalLong'>"; ?>
								<?php } else { ?>	
									<?php echo "<a class='portfolio-box' href='coffee/".$rowCoffee->coffee_id."'>"; ?>
								<?php } ?>
										<?php echo "<img class='img-fluid' src='".base_url().'assets/img/coffee/'.$rowCoffee->coffee_picture."'>";?>
										<div class="portfolio-box-caption"style="background-color:rgba(247,28,28,0.75);">
											<div class="project-category text-white-10">
												<h5><?php echo strtoupper($rowCoffee->coffee_name); ?></h5> 
											</div>
											<div class="project-category">
												<?php echo "IDR ".number_format($rowCoffee->coffee_price); ?>
											</div>
										</div>
									</a>
								</div>
					<?php
							}
						}
					?>
				</div>
			</div>
		</section>

		<div class="container mb-5 py-5">
		<hr>
			<h2 style="color: #F71C1C; text-align: center; font-weight: bold;">NEW FOR YOU</h2>
			<div class="row">
				<?php 
					foreach ($list_coffee->result() as $rowCoffee) {
						if($rowCoffee->coffee_category == "potrait"){
				 ?>
				<div class="col-4">
				<?php if ($session == NULL){ ?>
					<?php echo "<a class='portfolio-box' href='#' data-toggle='modal' data-target='#accountModalLong'>"; ?>
				<?php } else { ?>
					<?php echo "<a class='portfolio-box' href='coffee/".$rowCoffee->coffee_id."'>"; ?>
				<?php } ?>
						<?php echo "<img class='img-fluid w-75 mx-5' src='".base_url().'assets/img/coffee/'.$rowCoffee->coffee_picture."'>";?>
					</a>
					<hr>
					<div style="color: #F71C1C; text-align: center;" class="container">
					<?php if ($session == NULL){ ?>
						<?php echo "<a class='portfolio-box' href='#' data-toggle='modal' data-target='#accountModalLong'>"; ?>
					<?php } else {?>
						<?php echo "<a class='portfolio-box' href='coffee/".$rowCoffee->coffee_id."'>"; ?>
					<?php } ?>
							<h4>
								<?php echo strtoupper($rowCoffee->coffee_name); ?>
							</h4>
						</a>
						<p><?php echo "IDR ".number_format($rowCoffee->coffee_price); ?></p>	
					</div>
				</div>
				<?php 
						}
					}
				 ?>
				<style type="text/css">
					h4 a:hover{
						color: #F71C1C;
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
					</style>
				</div>
				<div class="col-4">
					&nbsp
				</div>
			</div>
			<hr>
		</div>	
	</div>	
</div>
<!-- <div class="container">

</div> -->
<header class="masthead p-5" style="background-image: url(<?php echo base_url();?>assets/img/coffee/bg-01.png);">
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

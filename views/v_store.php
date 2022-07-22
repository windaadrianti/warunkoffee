<title>WarunKoffee - Store</title>
<section id="portfolio" class="my-5 pt-5">
	<div class="container-fluid">
		<div class="row">
			<?php 
				foreach ($list_store->result() as $rowStore) { ?>
					<div class="col-4">
						<a class='portfolio-box' href='<?php echo $rowStore->store_location; ?>'>
							<!-- <img class="mx-5 w-75" src="<?php echo base_url();?>assets/img/store/3-01.png" alt=""> -->
							<?php echo "<img class='mx-5 w-75' src='".base_url().'assets/img/store/'.$rowStore->store_picture."'>";?>
							<div class="portfolio-box-caption"style="background-color:rgba(247,28,28,0.75)">
								<div class="project-category text-white-10">
									<h5><?php echo strtoupper($rowStore->store_division); ?></h5> 
								</div>
								<div class="project-category">
									<i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp&nbsp&nbsp
									Find Us In Google Maps
								</div>
							</div>
						</a>
					</div>	<?php
				}
			 ?>
		</div>
		<div class="row my-5">
			<?php 
				foreach ($list_store->result() as $rowStore) { ?>
					<div class="col-4">	
						<div style="color: #F71C1C;" class="container">
							<h4 style="text-align: center;">
								<a href='<?php echo $rowStore->store_location; ?>'>
									<?php echo ucwords($rowStore->store_division); ?>	
								</a>
							</h4>
							<p style="text-align: center;">
								Find Us on Google		
							</p>	
						</div>
					</div> <?php
				} 
			?>
		</div>
	</div>
</section>
<hr>
<header class="masthead p-5" style="background-image: url(<?php echo base_url();?>assets/img/store/bg.png);">
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
					h4 a:hover{
					color: #F71C1C;
					}
					h4 a.secondLink{
						color: #160C0C;
					}
					h4 a.secondLink:hover{
						color: #FFF;
					}
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
		</div>
	</div>
</header>
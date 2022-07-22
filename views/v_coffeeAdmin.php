<title>ADMIN - COFFEE</title>
<div class="col-sm-12">
	<div class="container my-5 py-5 thumbnail">
	<hr><hr><hr>
		<div class="caption">
			<h3 style="text-align: center;">Coffee Data</h3>
		</div>
		<hr>
		<table class="table table-striped">
			<tr class="thead-dark">
				<th style="text-align: center;" scope="col">No</th>
				<th scope="col">Coffee Name</th>
				<th scope="col">Coffee Price</th>
				<th style="text-align: center;" scope="col">Description</th>
				<th style="text-align: center;" scope="col">Coffee Picture</th>
				<th scope="col">Coffee Category Layout</th>
				<th scope="col" colspan="2">
					<a href="<?php echo base_url();?>index.php/coffeeData" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add New Data</a>
				</th>
			</tr>
			<?php 
				$no = 1;
				foreach ($list_coffee->result() as $rowCoffee) {
					?>
					<tr>
						<td>
							<?php echo $no; ?>								
						</td>
						<td>
							<?php 
								if ($rowCoffee->coffee_name != NULL){ 
									echo strtoupper($rowCoffee->coffee_name);
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowCoffee->coffee_price != NULL){ 
									echo "IDR ".number_format($rowCoffee->coffee_price);
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowCoffee->coffee_desc != NULL){ 
									echo $rowCoffee->coffee_desc;
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowCoffee->coffee_picture != NULL){ 
									if ($rowCoffee->coffee_category == 'section') {
										echo "<img class='px-3 img-fluid' src='".base_url().'assets/img/coffee/'.$rowCoffee->coffee_picture."'>";
									}
									else
									{
										echo "<img class='mx-5 img-fluid w-50' src='".base_url().'assets/img/coffee/'.$rowCoffee->coffee_picture."'>";	
									}									
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>	
						</td>
						<td><?php echo $rowCoffee->coffee_category; ?></td>
						<td style="text-align: center;" class="mx-5 px-1">
							<a href="<?php echo base_url();?>index.php/coffeeData/setUpdate/<?php echo $rowCoffee->coffee_id; ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						</td>
						<td style="text-align: center;" class="mx-5 px-1">
							<a href="<?php echo base_url();?>index.php/coffeeData/delete/<?php echo $rowCoffee->coffee_id; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
					<?php 
					$no++;
				}
			 ?>
		</table>
	</div>
</div>
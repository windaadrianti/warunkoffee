<title>ADMIN - FOOD</title>
<div class="col-sm-12">
	<div class="container my-5 py-5 thumbnail">
	<hr><hr><hr>
		<div class="caption">
			<h3 style="text-align: center;">Food Data</h3>
		</div>
		<hr>
		<table class="table table-striped">
			<tr class="thead-dark">
				<th style="text-align: center;" scope="col">No</th>
				<th scope="col">Food Name</th>
				<th scope="col">Food Price</th>
				<th style="text-align: center;" scope="col">Description</th>
				<th style="text-align: center;" scope="col">Food Picture</th>
				<th scope="col">Food Category Layout</th>
				<th scope="col" colspan="2">
					<a href="<?php echo base_url();?>index.php/foodData" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Add New Data</a>
				</th>
			</tr>
			<?php 
				$no = 1;
				foreach ($list_grill->result() as $rowGrill) {
					?>
					<tr>
						<td>
							<?php echo $no; ?>								
						</td>
						<td>
							<?php 
								if ($rowGrill->grill_name != NULL){ 
									echo strtoupper($rowGrill->grill_name);
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowGrill->grill_price != NULL){ 
									echo "IDR ".number_format($rowGrill->grill_price);
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowGrill->grill_desc != NULL){ 
									echo $rowGrill->grill_desc;
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowGrill->grill_picture != NULL){ 
									if ($rowGrill->grill_category == 'list') {
										echo "<img class='mx-5 w-75 img-fluid' src='".base_url().'assets/img/grill/'.$rowGrill->grill_picture."'>";
									}
									else
									{
										echo "<img class='mx-5 img-fluid w-50' src='".base_url().'assets/img/grill/'.$rowGrill->grill_picture."'>";	
									}									
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>	
						</td>
						<td><?php echo $rowGrill->grill_category; ?></td>
						<td style="text-align: center;" class="mx-5 px-1">
							<a href="<?php echo base_url();?>index.php/foodData/setUpdate/<?php echo $rowGrill->grill_id; ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						</td>
						<td style="text-align: center;" class="mx-5 px-1">
							<a href="<?php echo base_url();?>index.php/foodData/delete/<?php echo $rowGrill->grill_id; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
					<?php 
					$no++;
				}
			 ?>
		</table>
	</div>
</div>
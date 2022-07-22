<title>ADMIN - USER</title>
<div class="col-sm-12">
	<div class="container my-5 py-5 thumbnail">
	<hr><hr><hr>
		<div class="caption">
			<h3 style="text-align: center;">User Data</h3>
		</div>
		<hr>
		<table class="table table-striped">
			<tr class="thead-dark">
				<th style="text-align: center;" scope="col">No</th>
				<th scope="col">User Name</th>
				<th scope="col">User Email</th>
				<th style="text-align: center;" scope="col">User Address</th>
				<th style="text-align: center;" scope="col">User Birth Date</th>
				<th style="text-align: center;" scope="col">User Gender</th>
				<th scope="col">Payment Method</th>
				<th scope="col">Created at</th>
				<th scope="col">Last Update at</th>
				<th scope="col">Action</th>
			</tr>
			<?php 
				$no = 1;
				foreach ($list_user->result() as $rowUser) {
					?>
					<tr>
						<td>
							<?php echo $no; ?>								
						</td>
						<td>
							<?php 
								if ($rowUser->user_name != NULL){ 
									echo ucwords($rowUser->user_name);
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowUser->user_email != NULL){ 
									echo $rowUser->user_email;
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowUser->user_address != NULL){ 
									echo $rowUser->user_address;
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowUser->user_date != NULL){ 
									$date = strtotime($rowUser->user_date);
									echo date('F jS Y', $date);
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowUser->user_gender != NULL){ 
									if ($rowUser->user_gender == 'L') {
										echo "<p class='mx-5 text-info'>L</p>";
									}
									else
									{
										echo "<p class='mx-5 text-danger'>P</p>";	
									}									
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>	
						</td>
						<td>
							<?php
								foreach ($list_payment->result() as $rowPayment) { 
									if ($rowUser->payment_id === $rowPayment->payment_id){ 
										echo $rowPayment->payment_category;
									} 
									else 
									{ echo"<i>Data is empty</i>"; }
								} 
							?>
						</td>
						<td>
							<?php 
								if ($rowUser->user_created_at != NULL){
									$date = strtotime($rowUser->user_created_at);
									echo date('F jS Y H:i:s', $date);
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td>
							<?php 
								if ($rowUser->user_update_at != NULL){ 
									$date = strtotime($rowUser->user_update_at);
									echo date('F jS Y H:i:s', $date);
								} 
								else 
								{ echo"<i>Data is empty</i>"; } 
							?>
						</td>
						<td style="text-align: center;" class="mx-5 px-1">
							<a href="<?php echo base_url();?>index.php/userAdmin/delete/<?php echo $rowUser->user_id; ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
						</td>
					</tr>
					<?php 
					$no++;
				}
			 ?>
		</table>
	</div>
</div>
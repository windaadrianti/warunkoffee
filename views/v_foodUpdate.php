<title>ADMIN - FOOD</title>
<div class="container mt-5 mb-0 p-5 rounded">
	<hr style="background-color: transparent;">
	<hr style="background-color: transparent;">
	<hr style="background-color: transparent;">
	<h3 class="py-3" style="text-align: center;">Update Data Food</h3>
	<?php foreach ($arrayGrill->result() as $rowGrill){ ?>
	<form class="signUp" action="<?php echo base_url();?>index.php/foodData/update/<?php echo $rowGrill->grill_id; ?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="grill_id" value="<?php echo $rowGrill->grill_id; ?>" class="form-control">
	   	<div  style="background-color: #F0F0F0;" class="container p-5 rounded">
	  	<div class="container px-5">
	  		<div class="row mb-4">
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-cutlery mx-3" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="text" name="grill_name" class="form-control" placeholder="Name" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo strtoupper($rowGrill->grill_name);?>">
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-usd mx-3" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="number" class="form-control" name="grill_price" placeholder="Price" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $rowGrill->grill_price;?>">
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-align-left mx-3" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<textarea class="form-control" name="grill_desc" placeholder="grill Description" aria-label="Default" aria-describedby="inputGroup-sizing-default"><?php echo $rowGrill->grill_desc;?></textarea>
		  	</div>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<?php echo "Old <br/> Photo"; ?>
				    </span>
			  	</div>
			  	<?php echo "<img class='ml-3 w-25 img-fluid' src='".base_url().'assets/img/grill/'.$rowGrill->grill_picture."'>"; ?>
		  	</div>
		  	<hr>
			<label for="dob">New Photo (Enable to skip)</label>
		  	<div class="input-group mb-4">
			  	<div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">
				    	<i class="fa fa-file-image-o mx-3" aria-hidden="true"></i>
				    </span>
			  	</div>
			  	<input type="file" class="mx-2" name="grill_picture" aria-label="Default" aria-describedby="inputGroup-sizing-default">
		  	</div>
		  	<hr>
			<label for="dob">Category Layout</label>
		  	<div class="input-group mb-3">
			  	<select name="grill_category" class="form-control form-select form-select-lg">
			  		<option disabled>Choose Category Here</option>
			  		<option value="list">List (Orientation must be landscape)</option>
			  		<option value="potrait">Potrait (Orientation must be potrait)</option>
				</select>
			</div>
  <!-- Submit button -->
  		<div class="row">
  			<div class="col-12">
  				<button type="submit" class="btn btn-info btn-block mb-2 w-100">Save Changes</button>
  			</div>
  			<div class="col-12">
  				<a class="btn btn-danger btn-block" href="<?php echo base_url().'index.php/foodAdmin'; ?>">Cancel</a>
  			</div>
  		</div>
		
		<?php } ?>
	</form>
  <!-- Register buttons -->
  	</div>
  </div>
</div>
</div>
</div>
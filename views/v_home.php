<div class="container mb-5 py-4">
	<h2 style="color: #F71C1C; text-align: center; font-weight: bold;">BEST SELLER</h2>
	<hr>
	<div class="row">
		<?php 
			foreach ($list_book->result() as $rowBook) {
			if($rowBook->kategori_id == 1 || $rowBook->kategori_id == 2 || $rowBook->kategori_id == 3) { ?>
				<div class="col-lg-3 col-md-6 col-sm-6 mt-sm-5m'; ">
					<div class="listContent py-lg-0 py-md-5">
						<a href="<?php echo base_url();?>assets/img/menu/novel/1-01.png">
							<?php echo "<img class='w-100 shadow rounded' src='".base_url().'assets/img/recommend/'.$rowBook->foto."'>";?>
						</a>
						<hr>
						<div style="color: #F71C1C; text-align: justify-all;" class="container py-3">
							<table class="table table-sm table-borderless">
								<tr>
									<th colspan="3"><h4><a href="<?php echo base_url();?>assets/img/menu/novel/1-01.png"> <?php echo $rowBook->judul; ?> </a></h4></th>
								</tr>
								<tr>
									<td>Penulis</td>
									<td> : </td>
									<td><?php echo $rowBook->penulis; ?></td>
								</tr>
								<tr>
									<td>Tahun Terbit</td>
									<td> : </td>
									<td><?php echo $rowBook->tahun_terbit; ?></td>
								</tr>
								<tr>
									<td>Penerbit</td>
									<td> : </td>
									<td><?php echo $rowBook->penerbit; ?></td>
								</tr>
								<tr>
									<td>Genre</td>
									<td> : </td>
									<td><?php echo $rowBook->nama; ?></td>
								</tr>
								<tr>
									<td>Harga</td>
									<td>:</td>
									<td><?php echo $rowBook->harga; ?></td>
								</tr>
							</table>
						</div>
					</div>	
					<div class="container pt-5" style="margin-top: -5em">
						<button class="btn btn-content w-50" data-toggle="modal" data-target=".bd-target-modal-lg">Add to Cart</button>
					</div>
				</div>
			<?php
					}
				}
		 	?>
	</div>
</div>
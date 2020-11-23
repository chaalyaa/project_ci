
	<div class="row">
		<div class="col-lg-6">
			
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<form role="form" method="post" action="<?php echo site_url('update/'.$product['product_id']); ?>">
							
							<div class="form-group">
								<label>Product ID</label>
							<input class="form-control" value="<?php echo $product['product_id']; ?>" disabled>
							</div>

							<div class="form-group">
								<label>Product Name</label>
							<input class="form-control" name="p_name" value="<?php echo $product['product_name']; ?>">
							</div>

							<label>Product Price</label>
							<div class="form-group input-group">
								
								<span class="input-group-addon">Rp</span>
								<input type="text" class="form-control" name="p_price" value="<?php echo $product['product_price'];?>">
								<span class="input-group-addon">.00</span>
							</div>					

						<div class="form-group">
							<label>Category</label>
							<select class="form-control" name="p_catId">
								<option value="<?php echo $product['category_id']; ?>"><?php echo $product['category_name']; ?></option>
								<?php foreach ($category as $list) :
								?>
									<option value="<?php echo $list['category_id']; ?>"><?php echo $list['category_name']; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						
						<div class="form-group">
							<input type="submit" class="btn btn-success" name="addProd" value="Add"> 
							<button class="btn btn-danger"> <?php echo anchor("product", "Cancel", "style='text-decoration:none; color:white;'");?></button>
						</div>
					</form>
						</div>
					</div>
				</div>
			
		</div>
	</div>

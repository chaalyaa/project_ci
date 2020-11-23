		<div class="row">
		<div class="col-lg-8">
			
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<form role="form" method="post" action="add">

							<div class="form-group">
								<label>Product Name</label>
							<input class="form-control" name="p_name" >
							</div>							
							
							<label>Product Price</label>
							<div class="form-group input-group">
								
								<span class="input-group-addon">Rp</span>
								<input type="text" class="form-control" name="p_price">
								<span class="input-group-addon">.00</span>
							</div>

						<div class="form-group">
							<label>Category</label>
							<select class="form-control" name="p_catId">
								<?php foreach ($category as $list) :
								?>
									<option value="<?php echo $list['category_id']; ?>"><?php echo $list['category_name']; ?></option>;
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

<!DOCTYPE html>
<html>
<head>
	<title>Category Management</title>
</head>
<body>
	<h1 class="page-header">Create New Category</h1>
	
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<form role="form" method="post" action="<?php echo site_url('category/update/'.$category['category_id']); ?>">

						<div class="form-group">
							<label>Category ID</label>
							<input class="form-control" name="c_id" value="<?php echo $category['category_id'];?>" dissabled>
						</div>						

						<div class="form-group">
							<label>Category Name</label>
							<input class="form-control" name="c_name" value="<?php echo $category['category_name'];?>">
						</div>
																
						<div class="form-group">
							<input type="submit" class="btn btn-success" name="updateCat" value="Update"> <input type="submit" class="btn btn-danger" name="cancel" value="cancel">
						</div>
					</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
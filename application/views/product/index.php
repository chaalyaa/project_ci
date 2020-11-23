<div class="row">
    <div class="panel-body">
    <button class="btn btn-default btn-md"> <?php echo anchor("product/add", "Add New", "style='text-decoration:none; '"); ?></button>

    </div>
</div>


<div class="row">
    
        <div class="panel-body">
        <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-product">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>		
    <?php			
        foreach($product_list as $list) :							
            ?>
            <tr>
                <td><?php echo $list['product_id'];?></td>
                <td><?php echo $list['product_name'];?></td>
                <td>Rp<?php echo number_format($list['product_price']);?></td>
                <td><?php echo $list['category_name'];?></td>
                <td>                    
                    <button class="btn btn-info btn-sm"> <?php echo anchor("product/pdf/".$list['product_id'], "Print", "style='text-decoration:none; color:white;'"); ?></button>
                    <button class="btn btn-primary btn-sm" ><?php echo anchor("product/".$list['product_id'], "View", "style='text-decoration:none; color:white;'"); ?> </button>
                    <button class="btn btn-success btn-sm" ><?php echo anchor("product/edit/".$list['product_id'], "Edit", "style='text-decoration:none; color:white;'"); ?> </button>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')"> <?php echo anchor("product/delete/".$list['product_id'], "Delete", "style='text-decoration:none; color:white;'"); ?></button>
                    
                </td>
                
            </tr>
        <?php
            endforeach;			
        ?>
        </tbody>
    </table>
    </div>
        </div>
    
</div>

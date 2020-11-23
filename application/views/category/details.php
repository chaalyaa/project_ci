
<div class="row">
    <div class="col-lg-6">
    <div class="panel-body">
        <table class="table">
            <tr>
                <th>Category ID</th>
                <td><?php echo $category_item['category_id'];?></td>            
            </tr>
            <tr>            
                <th>Category Name</th>
                <td><?php echo $category_item['category_name'];?></td>
            </tr>    
        </table>
    </div>
    </div>

</div>

<div class="row">
        
    <div class="panel-body">
        <h4>
            Product List
        </h4>
    <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-product">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            
        </tr>
    </thead>
    <tbody>		
<?php    			
    foreach($product as $list) :        
        ?>
        <tr>
            <td><?php echo $list['product_id'];?></td>
            <td><?php echo $list['product_name'];?></td>
            <td>Rp<?php echo number_format($list['product_price']);?></td>            
            
            
        </tr>
    <?php
        endforeach;			
    ?>
    </tbody>
</table>
</div>
    </div>

</div>

<div class="row">   
    <div class="panel-body">
        <?php echo anchor('category', 'Return', "class='btn btn-info btn-sm'",);?>
    </div>
</div>

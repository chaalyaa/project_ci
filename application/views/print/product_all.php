<!DOCTYPE html>
<html><head>      
</head><body>
    <h3>Product Report</h3>
    
    <table class="table table-striped table-bordered table-hover" id="dataTables-product">
        
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Category</th>                            
            </tr>
            
    <?php			
        foreach($product_list as $list) :							
            ?>
            <tr>
                <td><?php echo $list['product_id'];?></td>
                <td><?php echo $list['product_name'];?></td>
                <td>Rp<?php echo number_format($list['product_price']);?></td>
                <td><?php echo $list['category_name'];?></td>                            
            </tr>
        <?php
            endforeach;			
        ?>
        
    </table>
                        
</body></html>




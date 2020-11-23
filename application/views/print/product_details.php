<!DOCTYPE html>
<html><head>      
</head><body>
    <h3>Product Report</h3>
<div class="row">
    <div class="col-lg-8">
        <div class="panel-body">
            <table class = "table">    		
                <tr>
                    <th>Product ID</th>
                    <td><?php echo $product_item['product_id'];?></td>            
                </tr>
                <tr>            
                    <th>Product Name</th>
                    <td><?php echo $product_item['product_name'];?></td>
                </tr>
                <tr>            
                    <th>Price</th>
                    <td><?php echo $product_item['product_price'];?></td>
                </tr>
                <tr>            
                    <th>Category</th>
                    <td><?php echo $product_item['category_name'];?></td>
                </tr>    
            </table>
        </div>
    </div>
</div>

</body></html>

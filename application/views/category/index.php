
<div class="row">
    <div class="panel-body">
    <button class="btn btn-default btn-md"> <?php echo anchor("category/add", "Add New", "style='text-decoration:none; '"); ?></button>
    </div>
</div>

<div class="row">
    <div class="panel-body">
    <table class="table table-striped table-bordered table-hover" id="dataTables-category">
    <thead>
        <tr>
            <th>Category ID</th>
            <th>Category Name</th>
            <th></th>
        </tr>
    </thead>
	<tbody>
        <?php			
        foreach($category_list as $list) :							
            ?>
            <tr>
                <td><?php echo $list['category_id'];?></td>
                <td><?php echo $list['category_name'];?></td>
                <td>
                    <button class="btn btn-primary btn-sm" ><?php echo anchor("category/view/".$list['category_id'], "View", "style='text-decoration:none; color:white;'"); ?></button>
                    <button class="btn btn-success btn-sm" ><?php echo anchor("category/edit/".$list['category_id'], "Edit", "style='text-decoration:none; color:white;'"); ?></button>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?')" ><?php echo anchor("category/delete/".$list['category_id'], "Delete", "style='text-decoration:none; color:white;'"); ?> </button>
                </td>
                
            </tr>
        <?php
            endforeach;			
        ?>
    </tbody>	
</table>
    </div>
</div>

<script>
    jQuery(document).ready(function () {
        jQuery('#dataTables-category').dataTable();
    });
</script>
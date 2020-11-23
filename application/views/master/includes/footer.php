<!-- JS Scripts-->
    <!-- jQuery Js -->
    <!-- <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js"></script> -->
    <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    
    <!-- Bootstrap Js -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <!-- <script src="<?php echo base_url();?>assets/js/dataTables/jquery.dataTables.js"></script> -->
    <!-- <script src="<?php echo base_url();?>assets/js/dataTables/dataTables.bootstrap.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>    
        
        
        
        <script>
            $(document).ready(function () {
                // $('#dataTables-product').dataTable();
                var table = $('#dataTables-product').DataTable( {
                    lengthChange: false,
                    dom: 'Bfrtip',
                    buttons: [ 
                    {
                        extend: 'print',
                        title: 'Product export',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3 ],
                        }
                    },
                    {
                        extend: 'excel',
                        title: 'Product export',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3 ],
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Product export',
                        exportOptions: {
                            columns: [ 0, 1, 2, 3 ],
                        }
                    },                                      
                        'colvis' ],
                                        

                } );
            
                table.buttons().container()
                    .appendTo( '#dataTables-product_wrapper .col-md-6:eq(0)' );


                var table2 = $('#dataTables-category').DataTable( {
                    lengthChange: false,
                    dom: 'Bfrtip',
                    buttons: [ 
                    {
                        extend: 'print',
                        title: 'Category export',
                        exportOptions: {
                            columns: [ 0, 1],
                        }
                    },
                    {
                        extend: 'excel',
                        title: 'Category export',
                        exportOptions: {
                            columns: [ 0, 1 ],
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        title: 'Category export',
                        exportOptions: {
                            columns: [ 0, 1 ],
                        }
                    },                                      
                        'colvis' ],
                                        

                } );
            
                table2.buttons().container()
                    .appendTo( '#dataTables-category_wrapper .col-md-6:eq(0)' );
            });
            
    </script>
         <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/custom-scripts.js"></script>
<script>
    $(document).ready(function(){
        $('#datatable').DataTable({
            paging: true, // Enable pagination
            searching: true, // Enable search functionality
            ordering: true, // Enable column ordering
            order: [[0, 'asc']], // Set default ordering (column index, order direction)
            lengthChange: true, // Allow changing number of rows displayed
            pageLength: 10, // Set default number of rows per page
            autoWidth: false, // Disable automatic column width calculation
            responsive: true, // Enable responsive table
            // More options can be set according to your needs
        })
});
</script>
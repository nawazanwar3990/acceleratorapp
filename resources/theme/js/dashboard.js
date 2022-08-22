$(document).ready(function () {
    $('.custom-datatable').DataTable({
        responsive: true,
        fixedColumns: true,
        scrollX: true,
        "ordering": false,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});

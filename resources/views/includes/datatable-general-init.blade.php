<script>
    let tableResponsive = false;
    @if (isset($responsive))
        tableResponsive = true;
    @endif
    $(document).ready(function () {
        let table = $('#{{ $table }}').DataTable({
            responsive: tableResponsive,
            "pageLength": 50,
            "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            "order": [], //Initial no order.
            "aaSorting": [],
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Global Search....."
            },
            dom: "<'row'<'col-md-4 col-sm-12'l><'col-md-4 col-sm-12 text-center'<'btn-group'B>><'col-md-4 col-sm-12'f>>tip",
            "buttons": [
                    @if(isset($create))
                {
                    text: '<i class="fa fa-plus-circle"></i>',
                    "titleAttr": '{{ __('general.create') }}',
                    className: 'btn btn-sm btn-primary text-white',
                    action: function (dt, node, config) {
                        window.location = '{{ route($create) }}';
                    }
                },
                    @endif
                {
                    "extend": 'csv',
                    "text": '<i class="bx  bx-file-excel"></i>',
                    "titleAttr": '{{ __('general.export_csv') }}',
                    footer: true,
                    className: 'btn btn-sm btn-primary text-white',
                    exportOptions: {
                        columns: ':not(.no-export)'
                    }
                },
                {
                    "extend": 'excel',
                    "text": '<i class="fas fa-file-excel"></i>',
                    "titleAttr": '{{ __('general.export_excel') }}',
                    footer: true,
                    className: 'btn btn-sm btn-primary text-white',
                    exportOptions: {
                        columns: ':not(.no-export)'
                    }
                },
                {
                    "extend": 'pdf',
                    "text": '<i class="fas fa-file-pdf"></i>',
                    "titleAttr": '{{ __('general.export_pdf') }}',
                    footer: true,
                    className: 'btn btn-sm btn-primary text-white',
                    exportOptions: {
                        columns: ':not(.no-export)'
                    }
                },
                {
                    "extend": 'print',
                    "titleAttr": '{{ __('general.print') }}',
                    "text": '<i class="fa fa-print"></i>',
                    footer: true,
                    className: 'btn btn-sm btn-primary text-white',
                    exportOptions: {
                        columns: ':not(.no-export)'
                    }
                },
            ],
        });

        for (let i = 0; i <=5; i++) {
            table.button(i).nodes().attr('data-bs-toggle','tooltip');
        }

        $('[data-bs-toggle="tooltip"]').tooltip({html: true});
    });
</script>

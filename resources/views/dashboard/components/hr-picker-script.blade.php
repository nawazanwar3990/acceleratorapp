<script>
    $(document).ready(function () {
        $('#hr-picker-table').DataTable({
            columnDefs: [
                {'orderable': false, 'targets': 0, 'searchable': false},
            ],
            "lengthMenu": [[10, 25, 50, 100, 500], [10, 25, 50, 100, 500]],
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'ajax': {
                'url': '{{ route("dashboard.hr-picker") }}'
            },

            'columns': [
                {data: 'button'},
                {data: 'image'},
                {data: 'id'},
                {data: 'first_name'},
                {data: 'middle_name'},
                {data: 'last_name'},
                {data: 'cnic'},
                {data: 'cell_1'},
                // {data: 'present_linear_address'},
            ]
        });
    });

    let currentElement;
    function showHrPickerModal(cElement) {
        $('.hr-picker-modal').modal('show');
        currentElement = cElement;
    }

    function pickHr(HrID) {
        showWait();
        $.ajax({
            type: 'POST',
            url: "{{ route('dashboard.get.hr-details') }}",
            data: {'hrID': HrID},
            success: function (result) {
                hideWait();
                if (result.success === true) {
                    $(currentElement).closest('tr').find('.hr-name').val(result.full_name);
                    $(currentElement).closest('tr').find('.hr-id').val(result.record.id);
                    $(currentElement).closest('tr').find('.hr-cnic').val(result.record.cnic);
                    $(currentElement).closest('tr').find('.hr-cell').val(result.record.cell_1);
                    $(currentElement).closest('tr').find('.hr-address').val(result.record.present_linear_address);
                    if (result.pic === '') {
                        $(currentElement).closest('tr').find('.hr-pic').attr('src', "{{ url('theme/images/user-picture.png') }}");
                    } else {
                        $(currentElement).closest('tr').find('.hr-pic').attr('src', result.pic);
                    }
                    $('.hr-picker-modal').modal('hide');
                } else {
                    showError(result.msg);
                }
            }
        });
    }

    function cloneHrRow(cElement) {
        let clone = $(cElement).closest('tr').clone();
        $(clone).find('input[type=text]').val('');
        $(clone).find('input[type=number]').val('');
        $(clone).find('input[type=hidden]').val('');
        $(clone).find('.hr-pic').attr('src', "{{ url('theme/images/user-picture.png') }}");
        $(cElement).closest('tbody').append(clone);
    }

    function removeHrClonedRow(cElement) {
        let length = $(cElement).closest('tbody').find('tr').length;
        if (length > 1) {
            $(cElement).closest('tr').remove();
        } else {
            showError("At least one row is required.");
        }
    }
</script>

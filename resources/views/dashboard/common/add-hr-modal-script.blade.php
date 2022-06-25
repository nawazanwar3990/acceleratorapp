<script>
    $(document).on('submit', 'form#add-hr-form', function(e) {
        e.preventDefault();
        let form = $(this);

        showWait();
        $.ajax({
            method: 'POST',
            url: form.attr('action'),
            dataType: 'json',
            data: form.serialize(),
            beforeSend: function() {
                __disable_submit_button($("input[type='submit']"));
            },
            success: function(result) {
                hideWait();
                if (result.success == true) {
                    showMessage(result.msg);

                    // let customerName = result.customer.customer_name;
                    // let customerId = result.customer.id;
                    // $('#customer_id').append('<option value="' + customerId + '" selected="selected">' + customerName + '</option>');

                    $('#add-hr-modal').modal('hide');
                    $('#modal_first_name').val('');
                    $('#modal_last_name').val('');
                    $('#modal_cnic').val('');
                    $('#modal_cell_1').val('');
                    $('#modal_date_of_birth').val('');
                    __enable_submit_button($("input[type='submit']"));
                } else {
                    showError(result.msg);
                }
            },
        });
    });

    function __disable_submit_button(element) {
        element.attr('disabled', true);
    }

    function __enable_submit_button(element) {
        element.attr('disabled', false);
    }

</script>

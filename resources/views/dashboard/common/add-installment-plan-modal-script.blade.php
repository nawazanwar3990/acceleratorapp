<script>
    $(document).on('submit', 'form#add-installment-plan-form', function(e) {
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

                    let installPlanName = result.data.name;
                    let planID = result.data.id;
                    $('#installment_plan_id').append('<option value="' + planID + '" selected="selected">' + installPlanName + '</option>');

                    $('#add-installment-plan-modal').modal('hide');
                    $('#installment_modal_name').val('');
                    $('#installment_modal_months').val('');
                    $('#installment_modal_installment_duration').val('');
                    $('#installment_modal_total_installments').val('');
                    $('#installment_modal_reminder_days').val('10');
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

    function calculateTotalInstallments() {
        let months = Number($('#installment_modal_months').val());
        let duration = Number($('#installment_modal_installment_duration').val());
        if (months > 0 && duration > 0) {
            let totalInstallments = (months / duration) ;
            $('#installment_modal_total_installments').val(totalInstallments);
        }
    }
</script>

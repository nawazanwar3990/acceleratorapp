@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
@endsection
@section('innerScript')

    <script>
        $(function () {
            $('.select2').select2();
        });

        function getAccountHeadCode(cElement) {
            let headCode = $(cElement).val();
            $(cElement).closest('tr').find('.head-code').val(headCode);
        }

        function cloneRow(cElement) {
            let clone = $(cElement).closest('tr').clone();
            clone.find("span.select2 ").remove();
            $(clone).find('input[type=text]').val('');
            $(clone).find('input[type=number]').val('');
            $(clone).find('input[type=hidden]').val('');
            clone.find("select").select2({width: '100%'});
            $(cElement).closest('tbody').append(clone);

        }

        function removeClonedRow(cElement) {
            let length = $(cElement).closest('tbody').find('tr').length;
            if (length > 1) {
                $(cElement).closest('tr').remove();
            } else {
                alert("At least one row is Required")
            }
        }

        function calculateVoucherTotal() {
            let grandTotal = 0;
            $('.account-amount').each(function () {
                let innerPriceTotal = Number($(this).val());
                grandTotal += innerPriceTotal;
            });

            $('#voucher_total').val(grandTotal);
        }
    </script>
@endsection

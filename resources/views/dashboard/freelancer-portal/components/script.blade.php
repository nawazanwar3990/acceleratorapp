<script>
    function cloneRow(cElement) {
        let clone = $(cElement).closest('tr').clone();
        $(clone).find('input[type=text]').val('');
        $(clone).find('input[type=number]').val('');
        $(clone).find('input[type=hidden]').val('');
        $(cElement).closest('tbody').append(clone);
        applyCalculations();
    }

    function removeClonedRow(cElement) {
        let length = $(cElement).closest('tbody').find('tr').length;
        if (length > 1) {
            $(cElement).closest('tr').remove();
        } else {
            alert("At least one row is Required")
        }
        applyCalculations();
    }
</script>

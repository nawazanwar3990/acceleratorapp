<script>
    function generatePassword(fieldToDisplay) {
        let passwordField = '#' + fieldToDisplay;
        let result = '';
        let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let charactersLength = characters.length;
        for ( let i = 0; i < 7; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        $(passwordField).val(result);
    }

    $('#printBtn').click(function(){
        let mode = 'iframe'; //popup
        let close = mode == "popup";
        let options = {
            mode: mode,
            popClose: true,
            popHt: 1300,
            popWd: 1000,
            popX: 0,
            popY: 0
        };
        $("#printArea").printArea(options);
    });

    function ResetForm(urlToReset) {
        swal.fire({
            title: "{{ __('general.ask_for_reset') }}",
            type: "question",
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonText: "{{ __('general.confirm_reset') }}",
            confirmButtonColor: '#472051',
            cancelButtonColor: '#472051',
            allowOutsideClick: () => {
                const popup = swal.getPopup();
                popup.classList.remove('swal2-show');
                setTimeout(() => {
                    popup.classList.add('headShake', 'animated');
                })
                setTimeout(() => {
                    popup.classList.remove('headShake', 'animated');
                }, 500);
                return false;
            }

        }).then((result) => {
            if (result.value === true) {
                window.location.replace(urlToReset);
            }
        });
    }

    function SubmitAndPrint(form_id_to_submit) {
        $("#doPrint").val('1');
        $("#"+form_id_to_submit).submit();
    }

    function SubmitAndNew(form_id_to_submit) {
        $("#saveNew").val('1');
        $("#"+form_id_to_submit).submit();
    }

    function FullPayForm(field_paid_amount, field_total_amount) {
        let totalAmount = Number($('#' + field_total_amount).val().replace(/,/g, ''));
        $('#' + field_paid_amount).val(totalAmount).trigger('change');
    }

    function LogoutConfirm() {
        swal.fire({
            title: "{{ __('general.ask_for_logout') }}",
            type: "question",
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonText: "{{ __('general.confirm_logout') }}",
            confirmButtonColor: '#472051',
            cancelButtonColor: '#472051',
            allowOutsideClick: () => {
                const popup = swal.getPopup();
                popup.classList.remove('swal2-show');
                setTimeout(() => {
                    popup.classList.add('headShake', 'animated');
                })
                setTimeout(() => {
                    popup.classList.remove('headShake', 'animated');
                }, 500);
                return false;
            }
        }).then((result) => {
            if (result.value === true) {
                $('#logoutForm').submit();
            }
        });
    }

    function DeleteEntry(recID) {
        swal.fire({
            title: "{{ __('general.ask_for_delete') }}",
            type: "question",
            showCancelButton: true,
            showConfirmButton: true,
            confirmButtonText: "{{ __('general.confirm_delete') }}",
            confirmButtonColor: '#472051',
            cancelButtonColor: '#472051',
            allowOutsideClick: () => {
                const popup = swal.getPopup();
                popup.classList.remove('swal2-show');
                setTimeout(() => {
                    popup.classList.add('headShake', 'animated');
                })
                setTimeout(() => {
                    popup.classList.remove('headShake', 'animated');
                }, 500);
                return false;
            }
        }).then((result) => {
            if (result.value === true) {
                $('#deleteForm'+recID).submit();
            }
        });
    }

    function showWait() {
        Swal.fire({
            html: '{!! __('general.request_wait') !!}',
            allowOutsideClick: () => !Swal.isLoading()
        });
        Swal.showLoading();
    }

    function hideWait() {
        Swal.close();
    }

    $(document).ready(function () {
        $('[data-bs-toggle="tooltip"]').tooltip({html: true});

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true,
            todayBtn: "linked",
        });

        $('.monthpicker').datepicker({
            format: "MM-yyyy",
            autoclose: true,
            minViewMode: 1,
            maxViewMode: 2,
            orientation: 'bottom',
        });

        $('.input-group-text').click(function () {
            let dateField = $(this).closest('div').find('.datepicker');
            if (dateField.length) {
                $(dateField).focus();
            }
        });
    });

    {{--function resetPassword(userID) {--}}
    {{--    swal.fire({--}}
    {{--        title: "{{ __('general.ask_for_password_reset') }}",--}}
    {{--        type: "question",--}}
    {{--        showCancelButton: true,--}}
    {{--        showConfirmButton: true,--}}
    {{--        confirmButtonText: "{{ __('general.confirm_reset') }}",--}}
    {{--        confirmButtonColor: '#03a9f3',--}}
    {{--        cancelButtonColor: '#e98891',--}}
    {{--        allowOutsideClick: () => {--}}
    {{--            const popup = swal.getPopup();--}}
    {{--            popup.classList.remove('swal2-show');--}}
    {{--            setTimeout(() => {--}}
    {{--                popup.classList.add('headShake', 'animated');--}}
    {{--            })--}}
    {{--            setTimeout(() => {--}}
    {{--                popup.classList.remove('headShake', 'animated');--}}
    {{--            }, 500);--}}
    {{--            return false;--}}
    {{--        }--}}
    {{--    }).then((result) => {--}}
    {{--        if (result.value === true) {--}}
    {{--            showWait();--}}
    {{--            $.ajax({--}}
    {{--                type: 'POST',--}}
    {{--                url: "{{ route('tenant.dashboard.reset-password', [\App\Services\TenantService::getTenant()]) }}",--}}
    {{--                data: {--}}
    {{--                    'userID': userID,--}}
    {{--                },--}}
    {{--                success: function (data) {--}}
    {{--                    hideWait();--}}
    {{--                    if (data.success === true) {--}}
    {{--                        Swal.fire("{{ __('general.success') }}", data.msg, "success");--}}
    {{--                    } else {--}}
    {{--                        $.toast({--}}
    {{--                            heading: "Error",--}}
    {{--                            text: data.msg,--}}
    {{--                            position: 'top-right',--}}
    {{--                            icon: 'error',--}}
    {{--                            hideAfter: 3000,--}}
    {{--                            stack: 6--}}
    {{--                        });--}}
    {{--                    }--}}
    {{--                }--}}
    {{--            });--}}
    {{--        }--}}
    {{--    });--}}

    {{--}--}}

    {{--function getSupplierBalance(cElement, field_id_to_display_balance, field_id_to_display_last, parent_id_to_visible) {--}}
    {{--    let oid = $(cElement).val();--}}
    {{--    $.ajax({--}}
    {{--        type: 'POST',--}}
    {{--        url: "{{ route('tenant.dashboard.api.supplier.balance', [\App\Services\TenantService::getTenant()]) }}",--}}
    {{--        data: {supplierID: oid},--}}
    {{--        success: function (result) {--}}
    {{--            if (result.success === true) {--}}
    {{--                $(('#' + field_id_to_display_balance)).html(result.balance);--}}
    {{--                if ($('#' + field_id_to_display_last ).length) {--}}
    {{--                    $('#' + field_id_to_display_last).html(result.last);--}}
    {{--                }--}}
    {{--                $(('#' + parent_id_to_visible)).show();--}}
    {{--            } else {--}}
    {{--                toastr.error(result.msg);--}}
    {{--            }--}}
    {{--        }--}}
    {{--    });--}}
    {{--}--}}

    $('.solid-validation').parsley().on('form:submit', function() {
        showWait();
    });

    function toDataUrl(url, callback) {
        var xhr = new XMLHttpRequest();
        xhr.onload = function () {
            var reader = new FileReader();
            reader.onloadend = function () {
                callback(reader.result);
            }
            reader.readAsDataURL(xhr.response);
        };
        xhr.open('GET', url);
        xhr.responseType = 'blob';
        xhr.send();
    }

    function generate_qr_code(dataForQR, imageHolderID) {
        let imagePath = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' + dataForQR;
        toDataUrl(imagePath, function (myBase64) {
            $('#' + imageHolderID).empty().html("<img src=" + myBase64 + " class='img-fluid'>");
            $('#' + imageHolderID).val(myBase64);
        });
    }
    function initDropify() {
        $('.dropify').dropify({
            tpl: {
                message: '<div class="dropify-message"><span class="file-icon" /></div>',
            }
        });
    }

    function showError(errorMsg) {
        $.toast({
            heading: "{{ __('general.error') }}",
            text: errorMsg,
            position: 'top-right',
            icon: 'error',
            hideAfter: 3000,
            stack: 6
        });
    }

    function showMessage(message) {
        $.toast({
            heading: "{{ __('general.success') }}",
            text: message,
            position: 'top-right',
            icon: 'success',
            hideAfter: 3000,
            stack: 6
        });
    }

    function n2w(num) {
        let arr = num.toString().split('');
        let arrLastMember = arr[arr.length - 1];
        let arrSecondLastMember = arr[arr.length - 2];
        let suffix = 'th';

        if (arrLastMember == 1 &&
            num != "11") {

            suffix = 'st';
        }
        if (arrLastMember == 2 &&
            num != "12") {

            suffix = 'nd';
        }
        if (arrLastMember == 3 &&
            num != "13") {

            suffix = 'rd';
        }

        return (num + suffix);
    }

    function formatCurrency(value) {
        return Math.ceil(value).toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
    }
</script>

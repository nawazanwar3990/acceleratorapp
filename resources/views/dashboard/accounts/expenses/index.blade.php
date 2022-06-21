@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header',['url'=>'dashboard.expenses.create','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\Accounts\Expenses::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.accounts.expenses.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>
        function markPaid(expID) {
            swal.fire({
                title: "{!! __('general.ask_for_mark_as_paid') !!}",
                type: "question",
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "{{ __('general.confirm_mark_as_paid') }}",
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
                    $.ajax({
                        type: 'POST',
                        url: "{{ route('dashboard.mark-expense-paid') }}",
                        data: {'expenseID': expID},
                        success: function (result) {
                            if (result.success === true) {
                                showMessage(result.msg);
                                window.location.reload();
                            } else {
                                showError(result.msg);
                            }
                        }
                    });
                }
            });
        }
    </script>
@endsection

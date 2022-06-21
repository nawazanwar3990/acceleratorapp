@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' =>route('dashboard.employee-loan.store'), 'method' => 'POST','files' => true,'id' =>'loan_form', 'class' => 'solid-validation']) !!}
                        <x-hidden-building-id />
                        <x-created-by-field />
                        @include('dashboard.accounts.employee-loan.fields')
                        <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="loan_form" cancelRoute="dashboard.employee-loan.index"/>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
@endsection
@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();
        });

        function getEmployeeLoanDetails() {
            let employeeID = $('#employee_id').val();
            if (employeeID > 0) {
                showWait();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.employee-loan-details') }}",
                    data: {'employeeID': employeeID},
                    success: function (result) {
                        hideWait();
                        if (result.success === true) {
                            $('#allowed_loan').val(result.loanAmountFormatted);
                            $('#allowed_loan_hidden').val(result.loanAmount);
                            $('#loan_amount').attr('max', result.loanAmount);
                            $('.details-row').fadeIn('slow');
                        } else {
                            showError(result.msg);
                        }
                    }
                });
            }
        }

        function applyReturnCondition() {
            let return_type = $('#return_type').val();
            if (return_type == 1) { //on time return
                $('#return_date').attr('required', true);
                $('#deduct_type').attr('required', false);
                $('#deduct_value').attr('required', false);
                $('.one-time').fadeIn('slow');
                $('.salary-deduct').fadeOut('slow');
            } else if (return_type === '2') { //salary deduction
                $('#return_date').attr('required', false);
                $('#deduct_type').attr('required', true);
                $('#deduct_value').attr('required', true);
                $('.one-time').fadeOut('slow');
                $('.salary-deduct').fadeIn('slow');
            }
            // calculateReturnAmount();
        }
    </script>
@endsection

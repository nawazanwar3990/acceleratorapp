@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    @include('includes.datatable-css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header')
                <div class="card-body">
                    {!! Form::open(['url' =>route('dashboard.employees.store'), 'method' => 'POST','files' => true,'id' =>'employee_form', 'class' => 'solid-validation']) !!}
                    <x-hidden-building-id />
                    <x-created-by-field />
                    @include('dashboard.real-estate.human-resource.employee.fields')
                    <x-buttons :save="true" :saveNew="true" :cancel="true" :reset="true"
                               formID="employee_form" cancelRoute="dashboard.employees.index" />
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.real-estate.common.hr-picker-modal')
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    @include('includes.datatable-js')
@endsection
@section('innerScript')
    @include('dashboard.real-estate.common.hr-picker-script')
    <script>
        $(function () {
            $('.select2').select2();
        });
        function showHrModal() {
            $('.hr-picker-modal').modal('show');
        }

        function pickHr(HrID) {
            $('#hr_id').val(HrID);
            showWait();
            getHrDetails(HrID);
        }

        function getHrDetails(HrID) {
            $('#details-row').fadeOut('slow');
            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.hr-details-for-employee') }}",
                data: {'hrID': HrID},
                success: function (result) {
                    hideWait();
                    if (result.success === true) {

                        $('#first_name').html(result.record.first_name);
                        $('#last_name').html(result.record.last_name);
                        $('#cnic').html(result.record.cnic);
                        $('#gender').html(result.record.gender);
                        $('#cell_1').html(result.record.cell_1);
                        $('#cell_2').html(result.record.cell_2);
                        $('#address').html(result.record.present_linear_address);
                        $('.hr-picker-modal').modal('hide');
                        $('#details-row').fadeIn('slow');
                    } else {
                        showError(result.msg);
                    }
                }
            });
        }
    </script>
@endsection

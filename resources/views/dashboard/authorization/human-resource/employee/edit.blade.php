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
                    {!! Form::model($model, ['url' =>route('dashboard.employees.update', $model->id), 'method' => 'POST','files' => true, 'class' => 'solid-validation']) !!}
                    @method('PUT')
                    <x-edit-id :id="$model->id" />
                    <x-updated-by-field />
                    @include('dashboard.authorization.human-resource.employee.fields', ['for' => 'edit'])
                    <x-buttons :update="true" :cancel="true" cancelRoute="dashboard.employees.index" />
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}" type="text/javascript"></script>
    @include('includes.datatable-js')
@endsection
@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();

            getHrDetails({{ $model->Hr->id }});
        });


        function getHrDetails(HrID) {
            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.hr-details') }}",
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
                        $('#details-row').fadeIn('slow');
                    } else {
                        showError(result.msg);
                    }
                }
            });
        }
    </script>
@endsection

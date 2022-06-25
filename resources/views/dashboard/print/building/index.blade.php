@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('css-after')
    <style>
        td{
            padding: 5px !important;
        }

        th{
            padding: 8px;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @include('dashboard.print.building.components.building-filters')

            <div class="card shadow-none pt-0">
                {{--                @include('components.General.form-list-header',['url'=>'dashboard.installment-plans.create','is_create'=>true])--}}
                <div class="card-header" style="background-color: #ffffff;">
                    <div class="row my-3">
                        <div class="col-md-12 text-right">
                            {!! HTML::decode(Form::button('<i class="fa fa-print"></i> ' . __('general.print'), ['class' => 'btn btn-success btn-sm','onclick'=>'printPersonForm()'])) !!}
                        </div>
                    </div>
                </div>
                <div class="card-body" id="printHolder">
                    <table class="table table-bordered table-hover" style="border: solid black 0.5px">
                        {{--                        @include('components.General.table-headings-simple',['headings'=>\App\Enum\TableHeadings\RealEstate\PrintFlatOwners::getTranslationKeys()])--}}
                        <thead style="background-color: #000000; color: #ffffff">
                        <tr>
                            <th style="font-size: 13px" scope="col">{{ __('general.flat_number') }}</th>
                            <th style="font-size: 13px" scope="col">{{ __('general.flat_name') }}</th>
                            <th style="font-size: 13px" scope="col">{{ __('general.flat_type') }}</th>
                            <th style="font-size: 13px" scope="col">{{ __('general.area') }} <small>{{ __('general.square_feet') }}</small></th>
                            <th style="font-size: 13px" scope="col">{{ __('general.location') }}</th>
                            <th style="font-size: 13px" scope="col">{{ __('general.facing') }}</th>
                            <th style="font-size: 13px" scope="col">{{ __('general.current_flat_owner') }}</th>
                            <th style="font-size: 13px" scope="col">{{ __('general.furnished') }}</th>
                            <th style="font-size: 13px" scope="col">{{ __('general.status') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @include('dashboard.print.building.list')
                        </tbody>
                    </table>
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

        function printPersonForm() {
            $(".print_holder").removeClass('d-block d-none').addClass('d-block');
            $(".current_chevron").addClass('d-none');

            $(':input').removeAttr('placeholder');
            $('textarea').removeAttr('placeholder');
            $('input[type=number]').removeAttr('placeholder');

            let printContents = document.getElementById("printHolder").innerHTML;
            let originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        function getFloorsOfBuilding(cElement) {
            // let buildingID = $(cElement).val();
            let buildingID = cElement.value;

            showWait();

            $.ajax({
                type: 'POST',
                url: "{{ route('dashboard.get.floors-of-building') }}",
                data: {'buildingID': buildingID},
                success: function (result) {
                    hideWait();
                    if (result.success == true) {
                        $('#floor_id').empty().append(result.records);
                        $('#flat_id').empty();
                    } else {
                        showError(result.msg);
                    }
                }
            });
        }

        function getFlatsOfFloor(cElement) {
            let floorID = cElement.value;
            let buildingID = $('#building_id').val();

            if (Number(floorID) > 0) {
                showWait();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('dashboard.get.flats-of-floor') }}",
                    data: {'floorID': floorID, 'buildingID': buildingID},
                    success: function (result) {
                        hideWait();
                        if (result.success === true) {
                            $('#flat_id').empty().append(result.records);
                        } else {
                            showError(result.msg);
                        }
                    }
                });
            }
        }

    </script>
@endsection

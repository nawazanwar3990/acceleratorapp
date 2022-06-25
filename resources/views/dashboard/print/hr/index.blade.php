@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            @include('dashboard.print.hr.components.hr-filters')

            <div class="card shadow-none pt-0">

                <div class="card-body" id="printHolder">
                    <table class="table table-bordered table-hover">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\RealEstate\Hr::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.print.hr.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ url('plugins/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
@endsection
@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();
            $(".cnic-mask").inputmask("99999-9999999-9");
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

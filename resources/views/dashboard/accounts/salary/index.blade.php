@extends('layouts.dashboard')
@section('css-before')
    <link href="{{ url('plugins/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @include('dashboard.accounts.salary.components.index-filters')
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header',['url'=>'dashboard.salary.create','is_create'=>true])
                <div class="card-body" style="overflow-x:auto">
                    <table class="table table-bordered table-hover">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\RealEstate\Salary::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.accounts.salary.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.accounts.salary.components.received-by-modal')
@endsection
@section('inner-script-files')
    <script src="{{ url('plugins/select2/js/select2.min.js') }}"></script>
@endsection
@section('innerScript')
    <script>
        $(function () {
            $('.select2').select2();
            $('.employee-select').select2({
                dropdownParent: $('#received_by_modal')
            });
        });

        $('#received_by_modal').on('shown.bs.modal', function (e) {
            $('#received_by').val($(e.relatedTarget).attr('emp-id'));
            $('#received_by').trigger('change');
            $('#salary_id').val($(e.relatedTarget).attr('rec-id'));
        });

        $(document).on('submit', 'form#salary_payment_form', function(e) {
            e.preventDefault();

            $('#received_by_modal').modal('hide')

            swal.fire({
                html: '{!! __('general.request_wait') !!}',
                allowOutsideClick: () => !swal.isLoading()
            });
            swal.showLoading();

            let form = $(this);
            let data = form.serialize();

            $.ajax({
                method: 'POST',
                url: form.attr('action'),
                dataType: 'json',
                data: data,
                success: function(result) {
                    if (result.success == true) {
                        window.location.reload();
                    } else {
                        swal.close();
                        showError(result.msg);
                    }
                },
            });
        });
    </script>
@endsection

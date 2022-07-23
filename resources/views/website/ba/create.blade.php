@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container p-4">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @include('website.ba.components.steps')
                            <div class="col-lg-8 col-md-8 border-start">
                                @if($model)
                                    <h2 class="text-center fw-bold">
                                        Business
                                        For {{ \App\Enum\AcceleratorTypeEnum::getTranslationKeyBy($model->type) }}
                                    </h2>
                                @endif
                                {!! Form::open(['url' =>route('website.ba.store',[$step,($model)?$model->id:null]), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                                @include(sprintf('%s.%s', 'website.ba.components', $step))
                                <div class="card-footer bg-transparent text-center">
                                    <button class="btn btn-primary btn-rounded cs-btn text-white">
                                        <i class="bx bx-arrow-to-left"></i> {{ trans('general.prev') }}
                                    </button>
                                    <button type="submit" class="btn btn-primary btn-rounded cs-btn text-white">
                                        {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                                    </button>
                                </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
    <script>
        (function () {
        })();

        function create_other_company_services() {
            let html = '<table class="table table-bordered table-hover table-sm">' +
                '<thead class="thead-light">' +
                '<tr>' +
                '<th class="text-center">Service Name</th>' +
                '<th class="text-center">Add/Remove</th>' +
                '</tr>' +
                '</thead>' +
                '<tbody>' +
                '<tr>' +
                '<td>' +
                '<input class="form-control form-control-sm" autocomplete="off" required="" name="service_name" type="text">' +
                '</td>' +
                '<td class="text-center">' +
                '<a href="javascript:void(0);" onclick="cloneRow(this);" class="btn btn-xs btn-info mx-1">' +
                ' <i class="bx bx-plus"></i>' +
                '</a>' +
                '<a href="javascript:void(0);" tabindex="18" onclick="removeClonedRow(this);" class="btn btn-xs btn-danger mx-1">' +
                ' <i class="bx bx-minus"></i>' +
                '</a>' +
                '</td>' +
                '</tr>' +
                '</tbody>' +
                '</table>';
            Swal.fire({
                title: 'Add Custom Services',
                html: html,
                width: 900,
                confirmButtonText: 'Add',
                focusConfirm: false,
                preConfirm: () => {
                    let values = [];
                    let elements = Swal.getPopup().querySelector("input[name=service_name]");
                }
            }).then((result) => {

            });
        }

    </script>
@endsection

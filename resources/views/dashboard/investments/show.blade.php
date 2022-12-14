@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                <div class="card-header border-0" style="background-color: transparent !important;">
                    <div class="row d-print-none">
                        <div class="col justify-content-end d-flex">
                            <a class="d-print-none btn btn-primary mx-2" onclick="accept();">Approved</a>
                            <a class="d-print-none btn btn-primary mx-2" onclick="reject();">Reject</a>
                            <div class="card-actions">
                                <a class="d-print-none btn btn-primary btn-minimize btn-action d-inline-flex align-items-center justify-content-center"
                                   data-action="expand" data-bs-toggle="tooltip" title="" data-bs-placement="top"
                                   data-bs-original-title="Toggle Fullscreen" aria-label="Toggle Fullscreen"><i
                                        class="bx bx-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="padding-top: 0;">
                    <div class="vtabs customvtab">
                        <ul class="nav nav-tabs tabs-vertical" role="tablist">
                            @foreach(\App\Enum\InvestmentStepEnum::getTranslationKeys() as $key=>$value)
                                @if($key!==\App\Enum\InvestmentStepEnum::MENTOR)
                                    <li class="nav-item">
                                        <a class="nav-link @if($loop->first) active @endif"
                                           data-bs-toggle="tab"
                                           href="#{{ $key }}"
                                           role="tab"
                                           aria-selected="true">
                                            <span class="hidden-sm-up">{{ $value }}</span>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            @foreach(\App\Enum\InvestmentStepEnum::getTranslationKeys() as $key=>$value)
                                @if($key!==\App\Enum\InvestmentStepEnum::MENTOR)
                                    <div class="tab-pane @if($loop->first) active @endif" id="{{ $key }}"
                                         role="tabpanel">
                                        @include(sprintf('dashboard.investments.components.%s',$key))
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function accept() {
            Swal.fire({
                title: 'Approved Investment',
                html: `{{ Form::textarea('reason',null,['class'=>'form-control','id'=>'reason','placeholder'=>'Enter Reason']) }}`,
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "Proceeded",
                confirmButtonColor: '#01023B',
                cancelButtonColor: '#01023B',
                focusConfirm: false,
                preConfirm: () => {
                    const reason = Swal.getPopup().querySelector('#reason').value
                    if (!reason) {
                        Swal.showValidationMessage(`Enter Reason Here`)
                    }
                    return {reason: reason}
                }
            }).then((result) => {
                let reason = result.value.reason;
            });
        }

        function reject() {
            Swal.fire({
                title: 'Reject Investment',
                html: `{{ Form::textarea('reason',null,['class'=>'form-control','id'=>'reason','placeholder'=>'Enter Reason']) }}`,
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: "Proceeded",
                confirmButtonColor: '#01023B',
                cancelButtonColor: '#01023B',
                focusConfirm: false,
                preConfirm: () => {
                    const reason = Swal.getPopup().querySelector('#reason').value
                    if (!reason) {
                        Swal.showValidationMessage(`Enter Reason Here`)
                    }
                    return {reason: reason}
                }
            }).then((result) => {
                let reason = result.value.reason;
            });
        }
    </script>
@endsection

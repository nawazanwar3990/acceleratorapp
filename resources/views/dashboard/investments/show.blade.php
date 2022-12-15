@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                <div class="card-header bg-transparent border-bottom mb-2">
                    <div class="row d-print-none">
                        <div class="col justify-content-start d-flex">
                            <a class="btn btn-info mx-2" href="{{ route('dashboard.investment-asks.index') }}">
                                <i class="bx bx-arrow-to-left"></i> Back
                            </a>
                        </div>
                        <div class="col justify-content-end d-flex">
                            @if($investmentStatus)
                                <a class="btn btn-info mx-2">
                                    Already {{ucwords($investmentStatus->status)}}
                                </a>
                            @else
                                <a class="btn btn-primary mx-2"
                                   onclick="approvedInvestment();">Approved</a>
                                <a class="btn btn-primary mx-2"
                                   onclick="rejectedInvestment();">Rejected</a>
                            @endif
                            <div class="card-actions">
                                <a class="d-print-none btn btn-primary btn-minimize btn-action d-inline-flex align-items-center justify-content-center"
                                   data-action="expand" data-bs-toggle="tooltip" title="" data-bs-placement="top"
                                   data-bs-original-title="Toggle Fullscreen" aria-label="Toggle Fullscreen"><i
                                        class="bx bx-expand"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
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
    @include('components.common-scripts')
@endsection

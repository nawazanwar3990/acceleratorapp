@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-shadow pt-0">
                @include('dashboard.components.general.form-list-header')
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
@endsection

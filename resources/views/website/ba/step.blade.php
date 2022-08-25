@extends((auth()->user())?'layouts.dashboard':'layouts.website')
@section('innerCSS')
    <style>
        .card {
            border-top: 1px solid #edf1f5 !important;
        }
    </style>
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container p-4 @auth bg-white @endauth">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="row bg-white p-3">
                    @include('website.ba.components.steps')
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-12 border-start">
                        @include('website.ba.components.step-heading')
                        {!! Form::open(['url' =>route('website.ba.store',[$type,$payment,$step,($model)?$model->id:null,$action?'action=edit':'']), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                        @include(sprintf('%s.%s', 'website.ba.components', $step))
                        <div style="margin-top: -30px!important;">
                            <div class="text-center mt-4">
                                @if($step==\App\Enum\StepEnum::PACKAGES)
                                    <a onclick="apply_ba_subscription();"
                                       class="btn btn-primary btn-rounded cs-btn text-white">
                                        {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                                    </a>
                                @else
                                    @if($action)
                                        <button type="submit" class="btn btn-primary btn-rounded cs-btn text-white">
                                            {{ trans('general.update') }} <i class="bx bx-arrow-to-right"></i>
                                        </button>
                                    @else
                                        <button type="submit" class="btn btn-primary btn-rounded cs-btn text-white">
                                            {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                                        </button>
                                    @endif
                                @endif
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('components.common-scripts')

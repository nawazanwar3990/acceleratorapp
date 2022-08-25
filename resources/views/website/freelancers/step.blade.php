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
            <div class="{{ auth()->user()?'col-12':'col-xxl-10 col-xl-10 col-lg-10 col-md-10' }}">
                <div class="row bg-white p-3">
                    @include('website.freelancers.components.steps')
                    <div class="@if(auth()->user()) col-lg-9 col-xl-9 @else col-lg-8 col-md-8 @endif border-start">
                        @include('website.freelancers.components.step-heading')
                        {!! Form::open(['url' =>route('website.freelancers.store',[$type,$payment,$step,($model)?$model->id:null,$action?'action=edit':'']), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                        @include(sprintf('%s.%s', 'website.freelancers.components', $step))
                        <div class="text-center mt-4">
                            @if($step==\App\Enum\StepEnum::PACKAGES)
                                <a onclick="apply_freelancer_subscription();"
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
@endsection
@include('components.common-scripts')

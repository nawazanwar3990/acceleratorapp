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
            <div class="{{ auth()->user()?'col-12':'col-xxl-7 col-xl-7 col-lg-7 col-md-10' }}">
                <div class="card">
                    <div class="card-header bg-white border-bottom">
                        <h4 class="mb-0">{{ trans('general.new_customer') }}</h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['url' =>route('website.customers.store'), 'method' => 'POST','files' => true,'id' =>'plan_form', 'class' => 'solid-validation']) !!}
                        @include('website.customers.fields')
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-rounded cs-btn text-white">
                                {{ trans('general.save') }} <i class="bx bx-arrow-to-right"></i>
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
@endsection

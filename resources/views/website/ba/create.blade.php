@extends('layouts.website')
@section('css-before')
@endsection
@section('css-after')
@endsection
@section('content')
    <div class="container p-4">
        <div class="row justify-content-center my-4">
            <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-6">
                <div class="card">
                    {!! Form::open(['url' =>route('website.ba.store'),'method' =>\App\Enum\MethodEnum::POST]) !!}
                    @csrf
                    <div class="card-body py-0">
                        <div class="row justify-content-center">
                            @foreach(\App\Enum\AcceleratorTypeEnum::getTranslationKeys() as $key=>$value)
                                <div class="col-lg-6 col-md-6">
                                    <div class="card border position-relative">
                                        <div class="radio-holder position-absolute" style="right:0;top:9px;">
                                            <div class="form-check form-switch">
                                                {!! Form::radio('type',$key,(isset($model) && $model->type==$key)?true:false,['id'=>$key,'class'=>'form-check-input','required']) !!}
                                                <label class="form-check-label" for="{{ $key }}"></label>
                                            </div>
                                        </div>
                                        <img class="card-img-top pt-5 pl-5 pr-5"
                                             src="{{ asset('images/icon/business_accelerator.png') }}"
                                             alt="{{ $value }}">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">{{ $value }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer text-center bg-transparent">
                        <button type="submit" class="btn btn-primary btn-rounded cs-btn text-white">
                            {{ trans('general.next') }} <i class="bx bx-arrow-to-right"></i>
                        </button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('innerScript')
@endsection

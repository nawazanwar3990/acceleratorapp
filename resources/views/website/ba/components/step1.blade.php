<div class="row justify-content-center p-5">
    @foreach(\App\Enum\AcceleratorTypeEnum::getTranslationKeys() as $key=>$value)
        <div class="col-lg-6 col-md-6">
            <div class="card border position-relative">
                <div class="radio-holder position-absolute" style="right:0;top:9px;">
                    <div class="form-check form-switch">
                        {!! Form::radio('type',$key,false,['id'=>$key,'class'=>'form-check-input','required']) !!}
                        <label class="form-check-label" for="{{ $key }}"></label>
                    </div>
                </div>
                <img class="card-img-top pt-5 pl-5 pr-5" src="{{ asset('images/icon/business_accelerator.png') }}"
                     alt="{{ $value }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $value }}</h5>
                </div>
            </div>
        </div>
    @endforeach
</div>

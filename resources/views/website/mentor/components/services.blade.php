<div class="row pt-4 justify-content-center">
    <div class="col-12">
        @foreach(\App\Services\ServiceData::get_mentor_services() as $service)
            <div class="card mb-3">
                <div class="card-header">
                    <h6 class="card-title fw-bold mb-0">{{ $service->name }} Services</h6>
                </div>
                <div class="card-body row">
                    @foreach(\App\Services\ServiceData::get_mentor_child_services($service->id) as $child_service)
                        <div class="col-lg-4 mb-3">
                            <div class="form-check form-switch">
                                @if($payment==\App\Enum\PaymentTypeProcessEnum::DIRECT_PAYMENT)
                                    {!! Form::checkbox('services[]',$child_service->name,true,['class'=>'form-check-input align-self-center']) !!}
                                    <label class="form-check-label"> {{ $child_service->name }}</label>
                                @else
                                    {!! Form::checkbox('services[]',$child_service->name,in_array($child_service->name,$mode->services)?true:false,['class'=>'form-check-input align-self-center']) !!}
                                    <label class="form-check-label"> {{ $child_service->name }}</label>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    @if($payment == \App\Enum\PaymentTypeProcessEnum::PRE_PAYMENT)
        @include('website.components.fields.other-services')
    @endif
</div>

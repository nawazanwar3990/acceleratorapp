<div class="row pt-4 justify-content-center">
    <div class="col-12">
        <table class="table table-sm table-bordered">
            @php $selected_services = array() @endphp
            @if(isset($model) AND count($model->services)>0)
                @foreach($model->services as $service)
                    @php  $selected_services[]=$service->id @endphp
                @endforeach
            @endif
            @foreach(\App\Services\ServiceData::get_business_accelerator_services() as $service)
                <tr>
                    <th class="py-2">
                        {{ $service->name }}
                    </th>
                    <td class="py-2 justify-content-center">
                        <div class="form-check form-switch">
                            {!! Form::checkbox('services[]',$service->id,in_array($service->id,$selected_services)?true:false,['class'=>'form-check-input align-self-center']) !!}
                            <label class="form-check-label"></label>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        @if($payment == \App\Enum\PaymentTypeProcessEnum::PRE_PAYMENT)
            @include('website.components.fields.other-services')
        @endif
    </div>
</div>

<div class="row pt-4 justify-content-center">
    <div class="col-12">
        <table class="table table-sm table-bordered">
            @php $selected_services = array() @endphp
            @if(isset($model) AND count($model->services)>0)
            @foreach($model->services as $service)
            @php  $selected_services[]=$service->id @endphp
            @endforeach
            @php
            $services = \App\Models\Service::whereType($service_type)->whereStatus(true)->orderBy('name', 'ASC')->get();
            @endphp
            @endif
            @foreach($services as $service)
            <tr>
                <th class="py-2">
                    {{ $service->name }}
                </th>
                <td class="py-2 justify-content-center">
                    <div class="form-check form-switch">
                        @if($payment==\App\Enum\PaymentTypeProcessEnum::DIRECT_PAYMENT)
                        {!! Form::checkbox('services[]',true,['class'=>'form-check-input align-self-center','readonly']) !!}
                        <label class="form-check-label"> {{ $child_service->name }}</label>
                        @else
                        {!! Form::checkbox('services[]',$child_service->id,in_array($child_service->id,$selected_services)?true:false,['class'=>'form-check-input align-self-center']) !!}
                        <label class="form-check-label"> {{ $child_service->name }}</label>
                        @endif
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

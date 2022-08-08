<div class="row pt-4 justify-content-center">
    <div class="col-12">
        <table class="table custom-datatable table-sm table-bordered">
            @php $selected_services = array() @endphp
            @if($model->services AND  count($model->services)>0)
                @foreach($model->services as $service)
                    @php  $selected_services[]=$service->id @endphp
                @endforeach
            @endif
            @php
                $services = \App\Models\Service::whereType($service_type)->whereStatus(true)->orderBy('name', 'ASC')->get();
            @endphp
            @foreach($services as $service)
                <tr>
                    <th class="py-2">
                        {{ $service->name }}
                    </th>
                    <td class="py-2 justify-content-center text-center">
                        @if($payment==\App\Enum\PaymentTypeProcessEnum::DIRECT_PAYMENT)
                            {!! Form::hidden('services[]',$service->id) !!}
                            <i class="bx bx-check fw-bold fs-4 text-success"></i>
                        @else
                            <div class="form-check form-switch">
                                {!! Form::checkbox('services[]',$service->id,in_array($child_service->id,$selected_services)?true:false,['class'=>'form-check-input align-self-center']) !!}
                                <label class="form-check-label"></label>
                            </div>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
        @if($payment == \App\Enum\PaymentTypeProcessEnum::PRE_PAYMENT)
            @include('website.components.fields.other-services')
        @endif
    </div>
</div>

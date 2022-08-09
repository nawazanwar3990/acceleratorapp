<div class="row pt-4 justify-content-center">
    <div class="col-12">
        <table class="table custom-datatable table-sm table-bordered">
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
                            {!! Form::hidden('services[]',$service->name) !!}
                            <i class="bx bx-check fw-bold fs-4 text-success"></i>
                        @else
                            <div class="form-check form-switch">
                                @if($model->services)
                                    {!! Form::checkbox('services[]',$service->name,in_array($service->name,json_decode($model->services,true)),['class'=>'form-check-input align-self-center']) !!}
                                @else
                                    {!! Form::checkbox('services[]',$service->name,false,['class'=>'form-check-input align-self-center']) !!}
                                @endif
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

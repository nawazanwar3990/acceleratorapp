<div class="row pt-4 justify-content-center">
    <div class="col-12">
        <table class="table table-sm table-bordered">
            @php $selected_services = array() @endphp
            @if(isset($model) AND count($model->services)>0)
                @foreach($model->services as $service)
                    @php  $selected_services[]=$service->id @endphp
                @endforeach
            @endif
            @foreach(\App\Services\ServiceData::get_company_services() as $service)
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
        <div
            class="card other_services_holder">
            <div class="card-header">
                <h5 class="card-title mb-0">{{ trans('general.other_services') }}</h5>
            </div>
            <div class="card-body">
                <table class="table table-sm table-bordered">
                    <tbody>
                    @if(isset($model) AND  $model->other_services)
                        @if(count($model->other_services)>0)
                            @foreach($model->other_services as $service)
                                <tr>
                                    <th class="py-2">
                                        {!! Form::text('other_services[]',$service,['id'=>'other_services[]','class'=>'form-control form-control-sm"']) !!}
                                    </th>
                                    <td class="text-center pt-2">
                                        <a href="javascript:void(0);"
                                           onclick="cloneRow(this);"
                                           class="btn btn-xs btn-info">
                                            <i class="bx bx-plus"></i>
                                        </a>
                                        <a href="javascript:void(0);" tabindex="18"
                                           onclick="removeClonedRow(this);"
                                           class="btn btn-xs btn-danger">
                                            <i class="bx bx-minus"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    @else
                        <tr>
                            <th class="py-2">
                                {!! Form::text('other_services[]',null,['id'=>'other_services[]','class'=>'form-control form-control-sm"']) !!}
                            </th>
                            <td class="text-center pt-2">
                                <a href="javascript:void(0);"
                                   onclick="cloneRow(this);"
                                   class="btn btn-xs btn-info">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="javascript:void(0);" tabindex="18"
                                   onclick="removeClonedRow(this);"
                                   class="btn btn-xs btn-danger">
                                    <i class="bx bx-minus"></i>
                                </a>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

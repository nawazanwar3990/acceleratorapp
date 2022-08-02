<div class="card">
    <div class="card-header bg-transparent px-0">
        <div class="form-check form-switch pl-0">
            {!! Form::checkbox('other_services',false,false,['class'=>'form-check-input','id'=>'other_services','onchange'=>'manageOtherServices(this)']) !!}
            {!! Form::label('other_services',trans('general.do_you_have_other_services')) !!}
        </div>
    </div>
    <div class="card-body d-none" id="other_services_holder">
        <table class="table table-sm table-bordered">
            <tbody>
            @if(isset($model) AND (is_array($model->other_services) AND count($model->other_services)>0))
                @if(count($model->other_services)>0)
                    @foreach($model->other_services as $service)
                        <tr>
                            <th class="py-2">
                                {!! Form::text('other_services[]',$service,['id'=>'other_services[]','class'=>'form-control form-control-sm"']) !!}
                            </th>
                            <td class="text-center pt-2">
                                <a href="javascript:void(0);"
                                   onclick="clone_row(this);"
                                   class="btn btn-xs btn-info">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="javascript:void(0);" tabindex="18"
                                   onclick="remove_clone_row(this);"
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
                           onclick="clone_row(this);"
                           class="btn btn-xs btn-info">
                            <i class="bx bx-plus"></i>
                        </a>
                        <a href="javascript:void(0);" tabindex="18"
                           onclick="remove_clone_row(this);"
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

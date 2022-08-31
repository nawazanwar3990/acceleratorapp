<div class="card">
    <div class="card-header bg-transparent px-0">
        <div class="form-check form-switch pl-0">
            {!! Form::checkbox('other_services',(isset($model) AND (is_array($model->other_services) AND count($model->other_services)>0))?true:false,(isset($model) AND (is_array($model->other_services) AND count($model->other_services)>0))?true:false,['class'=>'form-check-input','id'=>'other_services','onchange'=>'manageOtherServices(this)']) !!}
            {!! Form::label('other_services',trans('general.do_you_have_other_services')) !!}
        </div>
    </div>
    <div class="card-body  @if(isset($model) AND (is_array($model->other_services) AND count($model->other_services)>0)) d-block @else d-none @endif" id="other_services_holder">
        <table class="table custom-datatable table-sm table-bordered">
            <tbody>
            @if(isset($model) AND (is_array($model->other_services) AND count($model->other_services)>0))
                @if(count($model->other_services)>0)
                    @foreach($model->other_services as $service)
                        <tr>
                            <th class="py-2">
                                {!! Form::text('other_services[]',$service,['id'=>'other_services[]','class'=>'input input-sm']) !!}
                            </th>
                            <td class="text-center pt-2">
                                <a href="javascript:void(0);"
                                   onclick="clone_row(this);"
                                   class="button primary-btn btn-sm">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="javascript:void(0);" tabindex="18"
                                   onclick="remove_clone_row(this);"
                                   class="button primary-btn btn-sm">
                                    <i class="bx bx-minus"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            @else

            @endif
            </tbody>
        </table>
    </div>
</div>

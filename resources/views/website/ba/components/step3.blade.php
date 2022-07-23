<div class="row pt-4 justify-content-center">
    <div class="col-12 text-right" style="text-align: right;">
        <a class="btn  btn-primary justify-content-end mb-2" onclick="create_other_company_services();">
            {{ trans('general.other') }} <i class="bx bx-plus-circle"></i>
        </a>
    </div>
    <div class="col-12">
        <table class="table table-sm table-bordered">
            @foreach(\App\Services\ServiceData::get_company_services() as $service)
                <tr>
                    <th class="py-2">
                        {{ $service->name }}
                    </th>
                    <td class="py-2 justify-content-center">
                        <div class="form-check form-switch">
                            {!! Form::checkbox('services[]',$service->id,null,['class'=>'form-check-input align-self-center']) !!}
                            <label class="form-check-label"></label>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

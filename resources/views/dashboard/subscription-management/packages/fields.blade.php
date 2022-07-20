<div class="row mb-3">
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('type' ,__('general.type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::select('type',\App\Enum\PackageTypeEnum::getTranslationKeys(),null,['id'=>'package_type','class'=>'form-control ','placeholder'=>__('general.type'), 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('name' ,__('general.name').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'), 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('duration_type_id' ,__('general.duration_type').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::select('duration_type_id',\App\Services\PackageService::pluck_duration(),null,['id'=>'duration_type_id','class'=>'form-control ','placeholder'=>__('general.duration_type'), 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('duration_limit' ,__('general.duration_limit').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::number('duration_limit',null,['id'=>'duration_limit','class'=>'form-control ','placeholder'=>__('general.duration_limit'), 'required']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('price' ,__('general.price').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::number('price',null,['id'=>'price','class'=>'form-control ']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('reminder_days' ,__('general.reminder_days').'<i class="text-danger">*</i>' ,['class'=>'form-label'])) !!}
        {!!  Form::number('reminder_days',null,['id'=>'reminder_days','class'=>'form-control ']) !!}
    </div>
    <div class="col-md-3 mb-3">
        {!!  Html::decode(Form::label('trail_expire_date' ,__('general.trail_expire_date') ,['class'=>'form-label'])) !!}
        {!!  Form::text('trail_expire_date',null,['id'=>'trail_expire_date','class'=>'form-control datepicker ']) !!}
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">{{ trans('general.modules') }}</h5>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
            <tr>
                <th>{{ trans('general.name') }}</th>
                <th>{{ trans('general.limit') }}</th>
            </tr>
            </thead>
            @foreach(\App\Enum\ModuleEnum::get_package_modules() as $module_key =>$moduleSlug)
                <tr>
                    <td colspan="4">
                        <h6 class="card-title mb-0">{{ ucwords(str_replace('_',' ',$module_key)) }}</h6>
                    </td>
                </tr>
                @foreach($moduleSlug as $mSlug)
                    @php  $module = \App\Models\Subscriptions\Module::where('name',$mSlug)->first(); @endphp
                    <tr>
                        <th>
                            {!!  Form::hidden('module[id][]',$module->id) !!}
                            {{ ucwords(str_replace('_',' ',$module->name))}}
                        </th>
                        <td>
                            {!!  Form::number('module[limit][]',null,['id'=>'module_limit','class'=>'form-control']) !!}
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </table>
    </div>
</div>


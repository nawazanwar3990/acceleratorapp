<div class="row">
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_location_id',trans('general.device_location')) !!}
        {!! Form::select('device_location_id',\App\Services\DefinitionService::get_device_location_dropdown(),null,['id'=>'device_location_id','class'=>'form-control','placeholder'=>trans('general.select')]) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_type_id',trans('general.device_type')) !!}
        {!! Form::select('device_type_id',\App\Services\DefinitionService::get_device_type_dropdown(),null,['id'=>'device_type_id','class'=>'form-control','placeholder'=>trans('general.select')]) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_class_id',trans('general.device_class')) !!}
        {!! Form::select('device_class_id',\App\Services\DefinitionService::get_device_class_dropdown(),null,['id'=>'device_class_id','class'=>'form-control','placeholder'=>trans('general.select')]) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_make_id',trans('general.device_make')) !!}
        {!! Form::select('device_make_id',\App\Services\DefinitionService::get_device_make_dropdown(),null,['id'=>'device_make_id','class'=>'form-control','placeholder'=>trans('general.select')]) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_model_id',trans('general.device_model')) !!}
        {!! Form::select('device_model_id',\App\Services\DefinitionService::get_device_model_dropdown(),null,['id'=>'device_model_id','class'=>'form-control','placeholder'=>trans('general.select')]) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_operating_system_id',trans('general.device_operating_system')) !!}
        {!! Form::select('device_operating_system_id',\App\Services\DefinitionService::get_device_operating_system_dropdown(),null,['id'=>'device_operating_system_id','class'=>'form-control','placeholder'=>trans('general.select')]) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_name',trans('general.device_name')) !!}
        {!!  Form::text('device_name',null,['id'=>'name','class'=>'form-control ','placeholder'=>__('general.name'),'required']) !!}
        @error('device_name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_serial_number',trans('general.serial_number')) !!}
        {!! Form::text('device_serial_number',null, ['device_serial_number' => 'name','class' => 'form-control']) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_ip_address',trans('general.ip_address')) !!}
        {!! Form::text('device_ip_address',null, ['id' => 'device_ip_address','class' => 'form-control']) !!}
    </div>

    <div class=" col-md-3 mb-3">
        {!! Form::label('device_mac_address',trans('general.mac_address')) !!}
        {!! Form::text('device_mac_address',null, ['id' => 'device_mac_address','class' => 'form-control']) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_username',trans('general.username')) !!}
        {!! Form::text('device_username',null, ['id' => 'device_username','class' => 'form-control']) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_password',trans('general.user_password')) !!}
        {!! Form::text('device_password',null, ['id' => 'device_password','class' => 'form-control']) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_admin_login',trans('general.admin_login'))!!}
        {!! Form::text('device_admin_login',null, ['id' => 'device_admin_login','class' => 'form-control']) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_admin_password',trans('general.admin_password')) !!}
        {!! Form::text('device_admin_password',null, ['id' => 'device_admin_password','class' => 'form-control']) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_connection_string',trans('general.connection_string')) !!}
        {!! Form::text('device_connection_string',null, ['id' => 'device_connection_string','class' => 'form-control']) !!}
    </div>

    <div class=" col-md-3 mb-3">
        {!! Form::label('device_generation',trans('general.device_generation'))!!}
        {!! Form::select('device_generation',\App\Enum\DeviceGenerationEnum::getTranslationKeys(),null,['id'=>'device_generation','class'=>'form-control','placeholder'=>trans('general.select')]) !!}
    </div>

    <div class=" col-md-3 mb-3">
        {!! Form::label('device_lot_number',trans('general.lot_number')) !!}
        {!! Form::text('device_lot_number',null, ['id' => 'device_lot_number','class' => 'form-control']) !!}
    </div>
    <div class=" col-md-3 mb-3">
        {!! Form::label('device_lot_date',trans('general.lot_date')) !!}
        {!! Form::date('device_lot_date',null, ['id' => 'device_lot_date','class' => 'form-control']) !!}
    </div>
    <div class=" col-md-12 mb-3">
        {!! Form::label('device_other_info',trans('general.other_info'))!!}
        {!! Form::textarea('device_other_info',null, ['id' => 'device_other_info','class' => 'form-control']) !!}
    </div>
</div>

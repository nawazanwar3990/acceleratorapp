<div class="row mb-3">
    <div class="col-md-4 mb-3">
        {!!  Html::decode(Form::label('role' ,__('general.type').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::select('role_id',\App\Services\DefinitionService::pluck_services_roles(),$slug,['id'=>'first_name','class'=>'form-control ','placeholder'=>__('general.select'),'required']) !!}
        @error('role')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-4 mb-3">
        {!!  Html::decode(Form::label('first_name' ,__('general.first_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('first_name',null,['id'=>'first_name','class'=>'form-control ','placeholder'=>__('general.first_name'),'required']) !!}
        @error('first_name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-4 mb-3">
        {!!  Html::decode(Form::label('last_name' ,__('general.last_name').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('last_name',null,['id'=>'last_name','class'=>'form-control ','placeholder'=>__('general.last_name'),'required']) !!}
        @error('last_name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('email' ,__('general.email') ,['class'=>'form-label']))   !!}
        {!!  Form::text('email',null,['id'=>'email','class'=>'form-control ','placeholder'=>__('general.email')]) !!}
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        {!!  Html::decode(Form::label('cell_1' ,__('general.cell_priority_1').'<i class="text-danger">*</i>' ,['class'=>'form-label']))   !!}
        {!!  Form::text('cell_1',null,['id'=>'cell_1','class'=>'form-control mobile-mask','placeholder'=>__('general.cell_priority_1'), 'required']) !!}
        @error('cell_1')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

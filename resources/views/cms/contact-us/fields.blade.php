<div class="row">
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('name' ,__('general.name'),['class'=>'col-form-label']))   !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'autofocus', 'id' => 'name' ]) !!}
        @error('name')
        <small class="form-control-feedback text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('phone' ,__('general.phone'),['class'=>'col-form-label']))   !!}
        {!! Form::number('phone', old('phone'), ['class' => 'form-control', 'autofocus', 'id' => 'phone' ]) !!}
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('email' ,__('general.email'),['class'=>'col-form-label']))   !!}
        {!! Form::text('email', old('email'), ['class' => 'form-control', 'autofocus', 'id' => 'email' ]) !!}
    </div>
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('message' ,__('general.message'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('message', old('message'), ['class' => 'form-control', 'autofocus', 'id' => 'message' ]) !!}
    </div>
    <div class="mb-3 col-12">
        {!! Form::checkbox('active',($for=='edit')?$model->active:0,null,['class'=>'custom_checkbox']); !!}
        {!!  Html::decode(Form::label('active' ,__('general.active')))   !!}
    </div>
</div>

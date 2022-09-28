
<div class="row">
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('image' ,__('general.image'),['class'=>'col-form-label']))   !!}
        {!! Form::file('image', ['class' => 'form-control dropify','id' => 'image','data-default-file'=>($for=='edit')?asset($model->image):'']) !!}
    </div>
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('name' ,__('general.name'),['class'=>'col-form-label']))   !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'autofocus', 'id' => 'name' ]) !!}
    </div>
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('designation' ,__('general.designation'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('designation', old('designation'), ['class' => 'form-control', 'autofocus', 'id' => 'designation' ]) !!}
    </div>
</div>

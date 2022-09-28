
<div class="row">
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('image' ,__('general.image'),['class'=>'col-form-label']))   !!}
        {!! Form::file('image', ['class' => 'form-control dropify','id' => 'image','data-default-file'=>($for=='edit')?asset($model->image):'']) !!}
    </div>
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('heading' ,__('general.heading'),['class'=>'col-form-label']))   !!}
        {!! Form::text('heading', old('heading'), ['class' => 'form-control', 'autofocus', 'id' => 'heading' ]) !!}
    </div>
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('description' ,__('general.description'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'autofocus', 'id' => 'description' ]) !!}
    </div>
</div>

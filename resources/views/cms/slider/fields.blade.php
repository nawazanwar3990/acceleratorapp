
<div class="row">
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('front_image' ,__('general.front_image'),['class'=>'col-form-label']))   !!}
        {!! Form::file('front_image', ['class' => 'form-control dropify','id' => 'front_image','data-default-file'=>($for=='edit')?asset($model->front_image):'']) !!}
    </div>
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('back_image' ,__('general.back_image'),['class'=>'col-form-label']))   !!}
        {!! Form::file('back_image', ['class' => 'form-control dropify','id' => 'back_image','data-default-file'=>($for=='edit')?asset($model->back_image):'']) !!}
    </div>
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('description' ,__('general.description'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'autofocus', 'id' => 'description' ]) !!}
    </div>
</div>

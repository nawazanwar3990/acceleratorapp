<div class="row">
    <div class="mb-3 col-3">
        {!!  Html::decode(Form::label('layout_id' ,__('general.layout_id'),['class'=>'col-form-label']))   !!}
        {!! Form::select('layout_id',\App\Services\CMS\LayoutService::pluckLayouts(),null, ['class' => 'form-control', 'autofocus', 'id' => 'layout_id','placeholder'=>'Select Layout' ]) !!}
    </div>
    <div class="mb-3 col-3">
        {!!  Html::decode(Form::label('name' ,__('general.name'),['class'=>'col-form-label']))   !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'autofocus', 'id' => 'name' ]) !!}
    </div>
    <div class="mb-3 col-3">
        {!!  Html::decode(Form::label('code' ,__('general.route'),['class'=>'col-form-label']))   !!}
        {!! Form::text('code', old('code'), ['class' => 'form-control', 'autofocus', 'id' => 'code' ]) !!}
        @error('code')
        <small class="form-control-feedback text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="mb-3 col-3">
        {!!  Html::decode(Form::label('order' ,__('general.order'),['class'=>'col-form-label']))   !!}
        {!! Form::number('order', old('order'), ['class' => 'form-control', 'autofocus', 'id' => 'order' ]) !!}
    </div>
</div>
<div class="row">
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('page_title' ,__('general.page_title'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('page_title', old('page_title'), ['class' => 'form-control', 'autofocus', 'id' => 'page_title' ]) !!}
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('page_description' ,__('general.page_description'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('page_description', old('page_description'), ['class' => 'form-control', 'autofocus', 'id' => 'page_description' ]) !!}
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('page_keyword' ,__('general.page_keyword'),['class'=>'col-form-label']))   !!}
        {!! Form::textarea('page_keyword', old('page_keyword'), ['class' => 'form-control', 'autofocus', 'id' => 'page_keyword' ]) !!}
    </div>
    <div class="mb-3 col-12">
        {!!  Html::decode(Form::label('banner_image' ,__('general.banner_image'),['class'=>'col-form-label']))   !!}
        {!! Form::file('banner_image', ['class' => 'form-control dropify','id' => 'banner_image','data-default-file'=>$for=='edit'?asset($model->banner_image):'']) !!}
    </div>
    <div class="mb-3 col-12">
        {!! Form::checkbox('active',null,true,['class'=>'custom_checkbox']); !!}
        {!!  Html::decode(Form::label('active' ,__('general.active')))   !!}
    </div>
</div>

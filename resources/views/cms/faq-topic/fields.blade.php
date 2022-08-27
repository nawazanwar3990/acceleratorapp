<div class="row">
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('name' ,__('general.name'),['class'=>'col-form-label']))   !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'autofocus', 'id' => 'name' ]) !!}
        @error('name')
        <small class="form-control-feedback text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('page_id' ,__('general.page_id'),['class'=>'col-form-label']))   !!}
        {!! Form::select('page_id',\App\Services\CMS\PageService::pluckPages(),null, ['class' => 'form-control', 'autofocus', 'id' => 'page_id','placeholder'=>'Select Page' ]) !!}
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('all_pages' ,__('general.all_pages'),['class'=>'col-form-label']))   !!}
        {!! Form::text('all_pages', old('all_pages'), ['class' => 'form-control', 'autofocus', 'id' => 'all_pages' ]) !!}
    </div>
</div>
<div class="row">
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('order' ,__('general.order'),['class'=>'col-form-label']))   !!}
        {!! Form::number('order', old('order'), ['class' => 'form-control', 'autofocus', 'id' => 'order' ]) !!}
    </div>
    <div class="mb-3 col-4">
        {!!  Html::decode(Form::label('icon' ,__('general.icon'),['class'=>'col-form-label']))   !!}
        {!! Form::text('icon', old('icon'), ['class' => 'form-control', 'autofocus', 'id' => 'icon' ]) !!}
    </div>
    <div class="mb-3 col-12">
        {!! Form::checkbox('active',($for=='edit')?$model->active:0,null,['class'=>'custom_checkbox']); !!}
        {!!  Html::decode(Form::label('active' ,__('general.active')))   !!}
    </div>
</div>

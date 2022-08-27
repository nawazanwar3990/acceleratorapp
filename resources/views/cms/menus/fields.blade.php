<div class="row">
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('type' ,__('general.type'),['class'=>'col-form-label']))   !!}
        {!! Form::select('type',\App\Services\CMS\MenuService::getMenuLocations(),null, ['class' => 'form-control', 'autofocus', 'id' => 'order','placeholder'=>'Select Nav Location' ]) !!}
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('name' ,__('general.name'),['class'=>'col-form-label']))   !!}
        {!! Form::text('name', old('name'), ['class' => 'form-control', 'autofocus', 'id' => 'name' ]) !!}
        @error('name')
        <small class="form-control-feedback text-danger"> {{ $message }} </small>
        @enderror
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('icon' ,__('general.icon'),['class'=>'col-form-label']))   !!}
        {!! Form::text('icon', old('icon'), ['class' => 'form-control', 'autofocus', 'id' => 'icon' ]) !!}
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('parent_id' ,__('general.parent'),['class'=>'col-form-label']))   !!}
        {!! Form::select('parent_id',\App\Services\CMS\MenuService::pluckMenus(),null,['class' => 'form-control', 'autofocus', 'id' => 'parent_id','placeholder'=>'Select Parent' ]) !!}
    </div>
    <div class="mb-3 col-6">
        {!!  Html::decode(Form::label('order' ,__('general.order'),['class'=>'col-form-label']))   !!}
        {!! Form::text('order', old('order'), ['class' => 'form-control', 'autofocus', 'id' => 'order' ]) !!}
    </div>
    <div class="mb-3 col-12">
        {!! Form::checkbox('active',($for=='edit')?$model->active:0,null,['class'=>'custom_checkbox']); !!}
        {!!  Html::decode(Form::label('active' ,__('general.active')))   !!}
    </div>
</div>

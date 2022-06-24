<div class="mb-3 row">
    <div class="col">
        {!!  Html::decode(Form::label('name' ,__('general.plan_name') ,['class'=>'form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col">
        {!!  Html::decode(Form::label('user_id' ,__('general.customer_name') ,['class'=>'form-label']))   !!}
        {!!  Form::select('user_id',\App\Services\PersonService::userForDropdown(),null,['id'=>'user_id','class'=>'form-select select2','required','placeholder'=>'Select Option']) !!}
        @error('user_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col">
        {!!  Html::decode(Form::label('is_active' ,__('general.active') ,['class'=>'form-label']))   !!}
        {!!  Form::select('is_active',\App\Services\GeneralService::activeStatus(),null,['id'=>'is_active','class'=>'form-select select2','placeholder'=>'Select Option']) !!}
    </div>

    <div class="col">
        {!!  Html::decode(Form::label('price' ,__('general.price') ,['class'=>'form-label']))   !!}
        {!!  Form::text('price',null,['id'=>'price','class'=>'form-control ']) !!}
    </div>

    <div class="col">
        {!!  Html::decode(Form::label('type' ,__('general.type') ,['class'=>'form-label']))   !!}
        {!!  Form::select('type',\App\Enum\PlanTypeEnum::getTranslationKeys(),null,['id'=>'type','class'=>'form-select select2','placeholder'=>'Select Option']) !!}
    </div>

    <div class="col">
        {!!  Html::decode(Form::label('limit' ,__('general.limit') ,['class'=>'form-label']))   !!}
        {!!  Form::text('limit',null,['id'=>'limit','class'=>'form-control']) !!}
    </div>
</div>

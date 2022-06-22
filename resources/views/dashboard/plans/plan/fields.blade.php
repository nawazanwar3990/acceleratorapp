<div class="form-group row">
    <div class="col">
        {!!  Html::decode(Form::label('name' ,__('general.name') ,['class'=>'form-label']))   !!}
        {!!  Form::text('name',null,['id'=>'name','class'=>'form-control ','required']) !!}
        @error('name')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col">
        {!!  Html::decode(Form::label('active' ,__('general.active') ,['class'=>'form-label']))   !!}
        {!!  Form::text('active',null,['id'=>'active','class'=>'form-control ','required']) !!}
        @error('active')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col">
        {!!  Html::decode(Form::label('price' ,__('general.price') ,['class'=>'form-label']))   !!}
        {!!  Form::text('price',null,['id'=>'price','class'=>'form-control ','required']) !!}
        @error('price')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col">
        {!!  Html::decode(Form::label('type' ,__('general.type') ,['class'=>'form-label']))   !!}
        {!!  Form::text('type',null,['id'=>'type','class'=>'form-control ','required']) !!}
        @error('type')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="col">
        {!!  Html::decode(Form::label('limit' ,__('general.limit') ,['class'=>'form-label']))   !!}
        {!!  Form::text('limit',null,['id'=>'limit','class'=>'form-control ','required']) !!}
        @error('limit')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>

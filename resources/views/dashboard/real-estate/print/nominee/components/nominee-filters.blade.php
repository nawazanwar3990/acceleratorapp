<div class="card">
    <div class="card-header border-0" style="background-color: transparent !important;">
        <div class="row">
            <div class="col-md-10">
                <h4 class="card-title"><i class="fas fa-filter text-purple"></i> {{ __('general.filters') }}</h4>
            </div>
            <div class="col-md-2">
                <div class="card-actions">
                    <a class="btn btn-primary btn-action d-inline-flex align-items-center justify-content-center" data-action="collapse"><i class="ti-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body collapse">
        {!! Form::open(['url' => route('dashboard.filter.nominee'), 'method' => 'GET','files' => true]) !!}
        <div class="row mb-2">

            <div class="col-md-3">
                {!!  Html::decode(Form::label('owner_id' ,__('general.owner_name') ,['class'=>'form-label']))   !!}
                {!!  Form::select('owner_id', \App\Services\RealEstate\HrService::HrForDropdown(), request()->has('owner_id')?request()->get('owner_id'):null,['id'=>'owner_id',
                    'class'=>'select2 form-control', 'placeholder'=>'Select Building','style'=>'width:100%'])
                !!}
            </div>

            <div class="col-md-3">
                {!!  Html::decode(Form::label('nominee_id' ,__('general.nominee_name') ,['class'=>'form-label']))   !!}
                {!!  Form::select('nominee_id', \App\Services\RealEstate\HrService::HrForDropdown(), request()->has('nominee_id')?request()->get('nominee_id'):null,['id'=>'nominee_id',
                    'class'=>'select2 form-control', 'placeholder'=>__('general.nominee_name'),'style'=>'width:100%'])
                !!}
            </div>

        </div>

        <div class="row my-3">
            <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary w-md">{{ __('general.search') }} <i class="fa fa-search"></i></button>
                <a href="{{ route('dashboard.print.nominee') }}" class="btn btn-primary w-md">{{ __('general.clear') }} <i class="fa fa-times"></i></a>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>

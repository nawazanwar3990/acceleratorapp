<div class="row">
    <div class="col-md-6">
        <h4 class="card-title text-purple">{{ __('general.general_services') }}</h4>
        <hr>
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th>{{ trans('general.name') }}</th>
                <th>{{ trans('general.price') }}</th>
            </tr>
            </thead>
            <tbody>
            @if(count($general_services)>0)
                @foreach($general_services as $service)
                    <tr>
                        <td>
                            {!! Form::text('general[name][]',$service->name,['class'=>'form-control','readonly']) !!}
                        </td>
                        <td>
                            {!! Form::text('general[price][]',$service->pivot->price,['class'=>'form-control','readonly']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    <div class="col-md-6">
        <h4 class="card-title text-purple">{{ __('general.security_services') }}</h4>
        <hr>
        <table class="table table-bordered table-sm">
            <thead>
            <tr>
                <th>{{ trans('general.name') }}</th>
                <th>{{ trans('general.price') }}</th>
            </tr>
            </thead>
            <tbody>
            @if(count($security_services)>0)
                @foreach($security_services as $service)
                    <tr>
                        <td>
                            {!! Form::text('security[name][]',$service->name,['class'=>'form-control','readonly']) !!}
                        </td>
                        <td>
                            {!! Form::text('security[price][]',$service->pivot->price,['class'=>'form-control','readonly']) !!}
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>

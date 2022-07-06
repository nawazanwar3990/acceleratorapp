<div class="">
    <h4 class="card-title text-purple">{{ __('general.general_services') }}</h4>
    <hr>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th>{{ trans('general.id') }}</th>
                    <th>{{ trans('general.name') }}</th>
                    <th>{{ trans('general.price') }}</th>
                    <th class="text-center">{{ trans('general.action') }}</th>
                </tr>
                </thead>
                <tbody>
                @if(count(\App\Services\ServiceData::getGeneralServices())>0)
                    @foreach(\App\Services\ServiceData::getGeneralServices() as $service)
                        <tr>
                            <td>
                                {!! Form::text('general[id][]',$service->id,['class'=>'form-control','readonly']) !!}
                            </td>
                            <td>
                                {!! Form::text('general[name][]',$service->name,['class'=>'form-control','readonly']) !!}
                            </td>
                            <td>
                                {!! Form::text('general[price][]',$service->price,['class'=>'form-control']) !!}
                            </td>
                            <td class="text-center">
                                <a class="btn btn-xs btn-danger " onclick="removeClonedRow(this);">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="">
    <h4 class="card-title text-purple">{{ __('general.security_services') }}</h4>
    <hr>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th>{{ trans('general.id') }}</th>
                    <th>{{ trans('general.name') }}</th>
                    <th>{{ trans('general.price') }}</th>
                    <th class="text-center">{{ trans('general.action') }}</th>
                </tr>
                </thead>
                <tbody>
                @if(count(\App\Services\ServiceData::getSecurityServices())>0)
                    @foreach(\App\Services\ServiceData::getSecurityServices() as $service)
                        <tr>
                            <td>
                                {!! Form::text('security[id][]',$service->id,['class'=>'form-control','readonly']) !!}
                            </td>
                            <td>
                                {!! Form::text('security[name][]',$service->name,['class'=>'form-control','readonly']) !!}
                            </td>
                            <td>
                                {!! Form::text('security[price][]',$service->price,['class'=>'form-control']) !!}
                            </td>
                            <td class="text-center">
                                <a class="btn btn-xs btn-danger " onclick="removeClonedRow(this);">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

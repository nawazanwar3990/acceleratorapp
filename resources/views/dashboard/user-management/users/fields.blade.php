<div class="mb-3 row">
    <div class="col-12 bg-light p-3 mb-2">General Info</div>
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('google_map_path' ,__('general.google_map_path') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('google_map_path',$user->google_map_path??null,['id'=>'google_map_path','class'=>'form-control','rows'=>'2']) !!}
    </div>
    <div class="col-6 mb-3">
        {!!  Html::decode(Form::label('address' ,__('general.address') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('address',$user->address??null,['id'=>'address','class'=>'form-control','rows'=>'3']) !!}
    </div>
    <div class="col-6 mb-3">
        {!!  Html::decode(Form::label('about_us' ,__('general.about_us') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('about_us',$user->about_us??null,['id'=>'about_us','class'=>'form-control','rows'=>'3']) !!}
    </div>
</div>
<div class="mb-3 row">
    <div class="col-12 bg-light p-3 mb-2">Social Accounts</div>
    @foreach(\App\Enum\SocialNavEnum::getTranslationKeys() as $social_key=>$social_value)
        <div class="col-3 mb-3">
            {!!  Html::decode(Form::label('social_accounts['.$social_key.']' ,$social_value,['class'=>'form-label']))   !!}
            {!!  Form::url('social_accounts['.$social_key.']',$user->social_accounts[$social_key]??null,['id'=>'social_accounts['.$social_key.']','class'=>'form-control']) !!}
        </div>
    @endforeach
</div>
<div class="mb-3 row">
    <div class="col-12 bg-light p-3 mb-2">Office Timing</div>
    <table class="table table-bordered table-condensed">
        <thead>
        <tr>
            <th>{{ trans('general.from_day') }}</th>
            <th>{{ trans('general.to_day') }}</th>
            <th>{{ trans('general.start_time') }}</th>
            <th>{{ trans('general.end_time') }}</th>
            <th>{{ trans('general.action') }}</th>
        </tr>
        </thead>
        <tbody>
        @isset($user->office_timings)
            @foreach($user->office_timings['from_day'] as $office_key=>$office_timing)

                <tr>
                    <td>
                        {!!  Form::select('office_timings[from_day][]',\App\Enum\WeekDaysEnum::getTranslationKeys(),$user->office_timings['from_day'][$office_key],['class'=>'form-control','placeholder'=>trans('general.select_date')]) !!}
                    </td>
                    <td>
                        {!!  Form::select('office_timings[to_day][]',\App\Enum\WeekDaysEnum::getTranslationKeys(),$user->office_timings['to_day'][$office_key],['class'=>'form-control','placeholder'=>trans('general.select_date')]) !!}
                    </td>
                    <td>
                        {!!  Form::time('office_timings[start_time][]',$user->office_timings['start_time'][$office_key],['class'=>'form-control']) !!}
                    </td>
                    <td>
                        {!!  Form::time('office_timings[end_time][]',$user->office_timings['end_time'][$office_key],['class'=>'form-control']) !!}
                    </td>
                    <td style="width: 100px;vertical-align: middle;" class="text-center">
                        @if($loop->last)
                            <a href="javascript:void(0);"
                               onclick="clone_row(this);"
                               class="btn  btn-primary site-first-btn-color btn-sm">
                                <i class="bx bx-plus"></i>
                            </a>
                        @endif
                        <a href="javascript:void(0);" tabindex="18"
                           onclick="remove_clone_row(this);"
                           class="btn  btn-primary site-first-btn-color btn-sm">
                            <i class="bx bx-minus"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td>
                    {!!  Form::select('office_timings[from_day][]',\App\Enum\WeekDaysEnum::getTranslationKeys(),null,['class'=>'form-control','placeholder'=>trans('general.select_date')]) !!}
                </td>
                <td>
                    {!!  Form::select('office_timings[to_day][]',\App\Enum\WeekDaysEnum::getTranslationKeys(),null,['class'=>'form-control','placeholder'=>trans('general.select_date')]) !!}
                </td>
                <td>
                    {!!  Form::time('office_timings[start_time][]',null,['class'=>'form-control']) !!}
                </td>
                <td>
                    {!!  Form::time('office_timings[end_time][]',null,['class'=>'form-control']) !!}
                </td>
                <td style="width: 100px;vertical-align: middle;" class="text-center">
                    <a href="javascript:void(0);"
                       onclick="clone_row(this);"
                       class="btn  btn-primary site-first-btn-color btn-sm">
                        <i class="bx bx-plus"></i>
                    </a>
                    <a href="javascript:void(0);" tabindex="18"
                       onclick="remove_clone_row(this);"
                       class="btn  btn-primary site-first-btn-color btn-sm">
                        <i class="bx bx-minus"></i>
                    </a>
                </td>
            </tr>
        @endisset
        </tbody>
    </table>
</div>

<div class="mb-3 row">
    <div class="col-12 bg-light p-3 mb-2">General Info</div>
    <div class="col-12 mb-3">
        {!!  Html::decode(Form::label('google_map_path' ,__('general.google_map_path') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('google_map_path',null,['id'=>'google_map_path','class'=>'form-control','rows'=>'2']) !!}
    </div>
    <div class="col-6 mb-3">
        {!!  Html::decode(Form::label('address' ,__('general.address') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('address',null,['id'=>'address','class'=>'form-control','rows'=>'3']) !!}
    </div>
    <div class="col-6 mb-3">
        {!!  Html::decode(Form::label('about_us' ,__('general.about_us') ,['class'=>'form-label']))   !!}
        {!!  Form::textarea('about_us',null,['id'=>'about_us','class'=>'form-control','rows'=>'3']) !!}
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
            <th>{{ trans('general.day') }}</th>
            <th>{{ trans('general.start_time') }}</th>
            <th>{{ trans('general.end_time') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach(\App\Enum\WeekDaysEnum::getTranslationKeys() as $key=>$value)
            <tr>
                <td>
                    {!! $value !!}
                </td>
                <td>
                    {!!  Form::time('office_timings['.$key.'][start_time]',$user->social_accounts[$key]['start_time']??null,['id'=>'office_timings[start_time]','class'=>'form-control']) !!}
                </td>
                <td>
                    {!!  Form::time('office_timings['.$key.'][end_time]',$user->social_accounts[$key]['end_time']??null,['id'=>'office_timings[end_time]','class'=>'form-control']) !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

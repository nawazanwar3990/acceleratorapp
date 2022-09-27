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
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('social_accounts[facebook]' ,__('general.facebook') ,['class'=>'form-label']))   !!}
        {!!  Form::text('social_accounts[facebook]',$user->social_accounts['facebook']??null,['id'=>'social_accounts[facebook]','class'=>'form-control']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('social_accounts[twitter]' ,__('general.twitter') ,['class'=>'form-label']))   !!}
        {!!  Form::text('social_accounts[twitter]',$user->social_accounts['twitter']??null,['id'=>'social_accounts[twitter]','class'=>'form-control']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('social_accounts[youtube]' ,__('general.youtube') ,['class'=>'form-label']))   !!}
        {!!  Form::text('social_accounts[youtube]',$user->social_accounts['youtube']??null,['id'=>'social_accounts[youtube]','class'=>'form-control']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('social_accounts[linkedin]' ,__('general.linkedin') ,['class'=>'form-label']))   !!}
        {!!  Form::text('social_accounts[linkedin]',$user->linkedin['facebook']??null,['id'=>'social_accounts[linkedin]','class'=>'form-control']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('social_accounts[whats_up]' ,__('general.whats_up') ,['class'=>'form-label']))   !!}
        {!!  Form::text('social_accounts[whats_up]',$user->whats_up['facebook']??null,['id'=>'social_accounts[whats_up]','class'=>'form-control']) !!}
    </div>
    <div class="col-3 mb-3">
        {!!  Html::decode(Form::label('social_accounts[instagram]' ,__('general.instagram') ,['class'=>'form-label']))   !!}
        {!!  Form::text('social_accounts[instagram]',$user->social_accounts['instagram']??null,['id'=>'social_accounts[instagram]','class'=>'form-control']) !!}
    </div>
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

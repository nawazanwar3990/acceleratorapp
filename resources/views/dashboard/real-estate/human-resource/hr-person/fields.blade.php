{{--@include('dashboard.real-estate.human-resource.hr-person.components.top-fields')--}}
{{--<div class="accordion" id="accordionExample">--}}
{!!  Form::hidden('hr_no',isset($for) ? $model->hr_no : \App\Services\Accounts\VoucherService::getNextVoucherNo('HR')) !!}
    @include('dashboard.real-estate.human-resource.hr-person.components.personal-detail')
    @include('dashboard.real-estate.human-resource.hr-person.components.employment')
    @include('dashboard.real-estate.human-resource.hr-person.components.contact')
    @include('dashboard.real-estate.human-resource.hr-person.components.addresses')
    @include('dashboard.real-estate.human-resource.hr-person.components.biometric')
    @include('dashboard.real-estate.human-resource.hr-person.components.media')
{{--</div>--}}

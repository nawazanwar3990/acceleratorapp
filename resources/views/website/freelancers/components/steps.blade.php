<div class="@if(auth()->user()) col-lg-3 col-xl-3 @else col-lg-4 col-md-4 @endif">
    @if($type=='company')
        <h4 class="fw-bold">{{ trans('general.service_provider_company') }}</h4>
    @else
        <h4 class="fw-bold">{{ trans('general.freelancer') }}</h4>
    @endif
    <ul class="progress-bar text-left">
        <li class="{{ $step==\App\Enum\StepEnum::USER_INFO?'active-link':'in-active-link' }}">
            <a href="{{ route('website.freelancers.create',[$type,$payment,\App\Enum\StepEnum::USER_INFO,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                {{ trans('general.user_info') }}
            </a>
        </li>
        @if($type=='company')
            <li class="{{ $step==\App\Enum\StepEnum::COMPANY_PROFILE?'active-link':'in-active-link' }}">
                <a href="{{ route('website.freelancers.create',[$type,$payment,\App\Enum\StepEnum::COMPANY_PROFILE,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                    {{ trans('general.company_profile') }}
                </a>
            </li>
            <li class="{{ $step==\App\Enum\StepEnum::FOCAL_PERSON?'active-link':'in-active-link' }}">
                <a href="{{ route('website.freelancers.create',[$type,$payment,\App\Enum\StepEnum::FOCAL_PERSON,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                    {{ trans('general.focal_person_detail') }}
                </a>
            </li>
        @endif
        <li class="{{ $step==\App\Enum\StepEnum::SERVICES?'active-link':'in-active-link' }}">
            <a href="{{ route('website.freelancers.create',[$type,$payment,\App\Enum\StepEnum::SERVICES,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
               @if($type=='company')  {{ trans('general.services_of_sp') }} @else  {{ trans('general.services_of_freelancers') }} @endif
            </a>
        </li>
        @if($payment==\App\Enum\PaymentTypeProcessEnum::DIRECT_PAYMENT)
            <li class="{{ $step==\App\Enum\StepEnum::PACKAGES?'active-link':'in-active-link' }}">
                <a href="{{ route('website.freelancers.create',[$type,$payment,\App\Enum\StepEnum::PACKAGES,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                    {{ trans('general.packages') }}
                </a>
            </li>
        @endif
        @if($action)
            @if($payment==\App\Enum\PaymentTypeProcessEnum::DIRECT_PAYMENT)
                <li class="{{ $step==\App\Enum\StepEnum::PACKAGES?'active-link':'in-active-link' }}">
                    <a href="{{ route('website.freelancers.create',[$type,$payment,\App\Enum\StepEnum::PRINT,isset($model)?$model->id:null]) }}">
                        {{ trans('general.view_invoice') }}
                    </a>
                </li>
            @endif
        @endif
    </ul>
</div>

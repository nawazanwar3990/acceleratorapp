<div class="@if(auth()->user()) col-lg-3 col-xl-3 @else col-lg-4 col-md-4 @endif">
    <h4 class="fw-bold">{{ trans('general.business_accelerator') }}</h4>
    <h6 class="fw-bold text-muted">{{ $step }}</h6>
    <ul class="progress-bar text-left">
        <li class="{{ $step==\App\Enum\StepEnum::USER_INFO?'active-link':'in-active-link' }}">
            <a href="{{ route('website.ba.create',[$type,$payment,\App\Enum\StepEnum::USER_INFO,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                {{ trans('general.user_info') }}
            </a>
        </li>
        @if($type==\App\Enum\AcceleratorTypeEnum::COMPANY)
            <li class="{{ $step==\App\Enum\StepEnum::COMPANY_PROFILE?'active-link':'in-active-link' }}">
                <a href="{{ route('website.ba.create',[$type,$payment,\App\Enum\StepEnum::COMPANY_PROFILE,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                    {{ trans('general.company_profile') }}
                </a>
            </li>
        @endif
        @if($payment==\App\Enum\PaymentTypeProcessEnum::PRE_PAYMENT)
            <li class="{{ $step==\App\Enum\StepEnum::SERVICES?'active-link':'in-active-link' }}">
                <a href="{{ route('website.ba.create',[$type,$payment,\App\Enum\StepEnum::SERVICES,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                    {{ trans('general.services_of_business_accelerator') }}
                </a>
            </li>
        @endif
        @if($payment==\App\Enum\PaymentTypeProcessEnum::DIRECT_PAYMENT)
            <li class="{{ $step==\App\Enum\StepEnum::PACKAGES?'active-link':'in-active-link' }}">
                <a href="{{ route('website.ba.create',[$type,$payment,\App\Enum\StepEnum::PACKAGES,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                    {{ trans('general.packages') }}
                </a>
            </li>
        @endif
        @if($action)
            @if($payment==\App\Enum\PaymentTypeProcessEnum::DIRECT_PAYMENT)
                <li class="{{ $step==\App\Enum\StepEnum::PACKAGES?'active-link':'in-active-link' }}">
                    <a href="{{ route('website.ba.create',[$type,$payment,\App\Enum\StepEnum::PRINT,isset($model)?$model->id:null]) }}">
                        {{ trans('general.view_invoice') }}
                    </a>
                </li>
            @endif
        @endif
    </ul>
</div>

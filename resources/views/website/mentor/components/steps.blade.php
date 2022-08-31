<div class="@if(auth()->user()) col-lg-3 col-xl-3 @else col-lg-4 col-md-4 @endif">
    <h4 class="fw-bold">{{ trans('general.mentor') }}</h4>
    <ul class="progress-bar text-left">
        <li class="{{ $step==\App\Enum\StepEnum::USER_INFO?'active-link':'in-active-link' }}">
            <a href="{{ route('website.mentors.create',[$payment,\App\Enum\StepEnum::USER_INFO,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                {{ trans('general.mentor_detail') }}
            </a>
        </li>
        @if($payment==\App\Enum\PaymentTypeProcessEnum::CUSTOMIZED_PLAN)
            <li class="{{ $step==\App\Enum\StepEnum::SERVICES?'active-link':'in-active-link' }}">
                <a href="{{ route('website.mentors.create',[$payment,\App\Enum\StepEnum::SERVICES,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                    {{ trans('general.mentor_services') }}
                </a>
            </li>
        @endif
        @if($payment==\App\Enum\PaymentTypeProcessEnum::PRE_DEFINED_PLAN)
            <li class="{{ $step==\App\Enum\StepEnum::PACKAGES?'active-link':'in-active-link' }}">
                <a href="{{ route('website.mentors.create',[$payment,\App\Enum\StepEnum::PACKAGES,isset($model)?$model->id:null,$action?'action=edit':'']) }}">
                    {{ trans('general.mentor_packages') }}
                </a>
            </li>
        @endif
        @if($action)
            @if($payment==\App\Enum\PaymentTypeProcessEnum::PRE_DEFINED_PLAN)
                <li class="{{ $step==\App\Enum\StepEnum::PACKAGES?'active-link':'in-active-link' }}">
                    <a href="{{ route('website.mentors.create',[$payment,\App\Enum\StepEnum::PRINT,isset($model)?$model->id:null]) }}">
                        {{ trans('general.view_invoice') }}
                    </a>
                </li>
            @endif
        @endif
    </ul>
</div>

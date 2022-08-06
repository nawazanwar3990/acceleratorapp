<div class="col-lg-4 col-md-4">
    <h4 class="fw-bold">{{ trans('general.mentor') }}</h4>
    <ul class="progress-bar text-left">
        <li class="{{ $step==\App\Enum\StepEnum::USER_INFO?'active-link':'in-active-link' }}">
            <a href="{{ route('website.mentors.create',[$payment,\App\Enum\StepEnum::USER_INFO,isset($model)?$model->id:null]) }}">
                {{ trans('general.mentor_detail') }}
            </a>
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::SERVICES?'active-link':'in-active-link' }}">
            <a href="{{ route('website.mentors.create',[$payment,\App\Enum\StepEnum::SERVICES,isset($model)?$model->id:null]) }}">
                {{ trans('general.mentor_services') }}
            </a>
        </li>
        @if($payment==\App\Enum\PaymentTypeProcessEnum::DIRECT_PAYMENT)
            <li class="{{ $step==\App\Enum\StepEnum::PACKAGES?'active-link':'in-active-link' }}">
                <a href="{{ route('website.mentors.create',[$payment,\App\Enum\StepEnum::PACKAGES,isset($model)?$model->id:null]) }}">
                    {{ trans('general.mentor_packages') }}
                </a>
            </li>
        @endif
    </ul>
</div>

<div class="col-lg-4 col-md-4">
    <h4 class="fw-bold">{{ trans('general.business_accelerator') }}</h4>
    <h6 class="fw-bold text-muted">{{ $step }}</h6>
    <ul class="progress-bar text-left">
        <li class="{{ $step==\App\Enum\StepEnum::STEP1?'active-link':'in-active-link' }}">
            <a href="{{ route('website.ba.create',[\App\Enum\StepEnum::STEP1,$id]) }}">
                {{ trans('general.accelerator_type') }}
            </a>
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP2?'active-link':'in-active-link' }}">
            <a href="{{ route('website.ba.create',[\App\Enum\StepEnum::STEP2,$id]) }}">
                {{ trans('general.company_profile') }}
            </a>
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP3?'active-link':'in-active-link' }}">
            <a href="{{ route('website.ba.create',[\App\Enum\StepEnum::STEP3,$id]) }}">
                {{ trans('general.services_of_business_accelerator') }}
            </a>
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP4?'active-link':'in-active-link' }}">
            <a href="{{ route('website.ba.create',[\App\Enum\StepEnum::STEP4,$id]) }}">
                {{ trans('general.user_info') }}
            </a>
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP5?'active-link':'in-active-link' }}">
            <a href="{{ route('website.ba.create',[\App\Enum\StepEnum::STEP5,$id]) }}">
                {{ trans('general.packages') }}
            </a>
        </li>
    </ul>
</div>

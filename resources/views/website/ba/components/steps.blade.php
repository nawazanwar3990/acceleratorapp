<div class="col-lg-4 col-md-4">
    <h4 class="fw-bold">{{ trans('general.business_accelerator') }}</h4>
    <h6 class="fw-bold text-muted">{{ $step }}</h6>
    <ul class="progress-bar text-left">
        <li class="{{ $step==\App\Enum\StepEnum::STEP1?'active':'' }}">
            {{ trans('general.accelerator_type') }}
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP2?'active':'' }}">
            {{ trans('general.company_info') }}
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP3?'active':'' }}">
            {{ trans('general.company_services') }}
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP4?'active':'' }}">
            {{ trans('general.user_info') }}
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP5?'active':'' }}">
            {{ trans('general.packages') }}
        </li>
    </ul>
</div>

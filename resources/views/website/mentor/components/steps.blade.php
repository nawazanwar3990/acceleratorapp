<div class="col-lg-4 col-md-4">
    <h4 class="fw-bold">{{ trans('general.mentor') }}</h4>
    <ul class="progress-bar text-left">
        <li class="{{ $step==\App\Enum\StepEnum::STEP1?'active-link':'in-active-link' }}">
            <a href="{{ route('website.mentors.create',[\App\Enum\StepEnum::STEP1,$id]) }}">
                {{ trans('general.mentor_services') }}
            </a>
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP2?'active-link':'in-active-link' }}">
            <a href="{{ route('website.mentors.create',[\App\Enum\StepEnum::STEP2,$id]) }}">
                {{ trans('general.mentor_detail') }}
            </a>
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP3?'active-link':'in-active-link' }}">
            <a href="{{ route('website.mentors.create',[\App\Enum\StepEnum::STEP3,$id]) }}">
                {{ trans('general.packages') }}
            </a>
        </li>
    </ul>
</div>

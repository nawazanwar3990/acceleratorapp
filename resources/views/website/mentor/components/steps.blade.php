<div class="col-lg-4 col-md-4">
    <h4 class="fw-bold">{{ trans('general.mentor') }}</h4>
    <ul class="progress-bar text-left">
        <li class="{{ $step==\App\Enum\StepEnum::USER_INFO?'active-link':'in-active-link' }}">
            <a href="{{ route('website.mentors.create',[\App\Enum\StepEnum::USER_INFO,$id]) }}">
                {{ trans('general.mentor_detail') }}
            </a>
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::SERVICES?'active-link':'in-active-link' }}">
            <a href="{{ route('website.mentors.create',[\App\Enum\StepEnum::SERVICES,$id]) }}">
                {{ trans('general.mentor_services') }}
            </a>
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::PACKAGES?'active-link':'in-active-link' }}">
            <a href="{{ route('website.mentors.create',[\App\Enum\StepEnum::PACKAGES,$id]) }}">
                {{ trans('general.mentor_packages') }}
            </a>
        </li>
    </ul>
</div>

<div class="col-lg-4 col-md-4">
    @if(isset($model) AND $model->type==\App\Enum\FreelancerTypeEnum::SERVICE_PROVIDER)
        <h4 class="fw-bold">{{ trans('general.service_provider') }}</h4>
    @else
        <h4 class="fw-bold">{{ trans('general.freelancer') }}</h4>
    @endif
    <ul class="progress-bar text-left">
        @if(isset($model) AND $model->type==\App\Enum\FreelancerTypeEnum::SERVICE_PROVIDER)
            <li class="{{ $step==\App\Enum\StepEnum::STEP1?'active-link':'in-active-link' }}">
                <a href="{{ route('website.freelancers.create',[\App\Enum\StepEnum::STEP2,$id]) }}">
                    {{ trans('general.company_profile') }}
                </a>
            </li>
        @endif
        <li class="{{ $step==\App\Enum\StepEnum::STEP2?'active-link':'in-active-link' }}">
            <a href="{{ route('website.freelancers.create',[\App\Enum\StepEnum::STEP3,$id]) }}">
                {{ trans('general.services_of_freelancers') }}
            </a>
        </li>
        @if(isset($model) AND $model->type==\App\Enum\FreelancerTypeEnum::SERVICE_PROVIDER)
            <li class="{{ $step==\App\Enum\StepEnum::STEP3?'active-link':'in-active-link' }}">
                <a href="{{ route('website.freelancers.create',[\App\Enum\StepEnum::STEP3,$id]) }}">
                    {{ trans('general.focal_person_detail') }}
                </a>
            </li>
        @endif
        <li class="{{ $step==\App\Enum\StepEnum::STEP4?'active-link':'in-active-link' }}">
            <a href="{{ route('website.freelancers.create',[\App\Enum\StepEnum::STEP4,$id]) }}">
                {{ trans('general.user_info') }}
            </a>
        </li>
        <li class="{{ $step==\App\Enum\StepEnum::STEP5?'active-link':'in-active-link' }}">
            <a href="{{ route('website.freelancers.create',[\App\Enum\StepEnum::STEP5,$id]) }}">
                {{ trans('general.packages') }}
            </a>
        </li>
    </ul>
</div>

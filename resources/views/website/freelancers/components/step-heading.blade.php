@if($model)
    @switch($step)
        @case(\App\Enum\StepEnum::COMPANY_PROFILE)
            <h2 class="text-center fw-bold">
                {{ trans('general.company_profile') }}
            </h2>
            @break
        @case(\App\Enum\StepEnum::SERVICES)
            <h2 class="text-center fw-bold">
                {{ trans('general.services_of_freelancers') }}
            </h2>
            @break
        @case(\App\Enum\StepEnum::FOCAL_PERSON)
            <h2 class="text-center fw-bold">
                {{ trans('general.focal_person_detail') }}
            </h2>
            @break
        @case(\App\Enum\StepEnum::USER_INFO)
            <h2 class="text-center fw-bold">
                {{ trans('general.create_user_information') }}
            </h2>
            @break
        @case(\App\Enum\StepEnum::PACKAGES)
            <h2 class="text-center fw-bold">
                {{ trans('general.package') }}
            </h2>
            @break
    @endswitch
@endif

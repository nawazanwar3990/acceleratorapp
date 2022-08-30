@if($model)
    @switch($step)
        @case(\App\Enum\StepEnum::COMPANY_PROFILE)

                {{ trans('general.company_profile') }}

            @break
        @case(\App\Enum\StepEnum::SERVICES)

                {{ trans('general.services_of_freelancers') }}

            @break
        @case(\App\Enum\StepEnum::FOCAL_PERSON)

                {{ trans('general.focal_person_detail') }}

            @break
        @case(\App\Enum\StepEnum::USER_INFO)

                {{ trans('general.create_user_information') }}
            </h2>

        @case(\App\Enum\StepEnum::PACKAGES)

                {{ trans('general.package') }}

            @break
    @endswitch
@endif

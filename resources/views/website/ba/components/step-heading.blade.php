@switch($step)
    @case(\App\Enum\StepEnum::USER_INFO)
        <h2 class="text-center fw-bold">
            {{ trans('general.create_user_information') }}
        </h2>
       @break
    @case(\App\Enum\StepEnum::COMPANY_PROFILE)
        <h2 class="text-center fw-bold">
            {{ trans('general.company_profile') }}
        </h2>
        @break
    @case(\App\Enum\StepEnum::SERVICES)
        <h2 class="text-center fw-bold">
            {{ trans('general.services_of_business_accelerator') }}
        </h2>
        @break
    @case(\App\Enum\StepEnum::PACKAGES)
        <h2 class="text-center fw-bold">
            {{ trans('general.packages') }}
        </h2>
        @break
@endswitch

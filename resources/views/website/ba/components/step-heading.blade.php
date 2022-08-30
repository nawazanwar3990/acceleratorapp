@switch($step)
    @case(\App\Enum\StepEnum::USER_INFO)

        {{ trans('general.create_user_information') }}

        @break
    @case(\App\Enum\StepEnum::COMPANY_PROFILE)

        {{ trans('general.company_profile') }}

        @break
    @case(\App\Enum\StepEnum::SERVICES)

        {{ trans('general.services_of_business_accelerator') }}

        @break
    @case(\App\Enum\StepEnum::PACKAGES)

        {{ trans('general.packages') }}

        @break
@endswitch

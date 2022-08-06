@if($type=='company')
    @include('website.components.fields.packages',['package_for'=>\App\Enum\PackageTypeEnum::SERVICE_PROVIDER_COMPANY])
@else
    @include('website.components.fields.packages',['package_for'=>\App\Enum\PackageTypeEnum::FREELANCER])
@endif

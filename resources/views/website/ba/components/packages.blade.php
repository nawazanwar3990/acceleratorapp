@if($type=='company')
    @include('website.components.fields.packages',['package_for'=>\App\Enum\PackageTypeEnum::BUSINESS_ACCELERATOR])
@else
    @include('website.components.fields.packages',['package_for'=>\App\Enum\PackageTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL])
@endif


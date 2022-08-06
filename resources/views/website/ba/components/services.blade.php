@include('website.components.fields.services',['service_type'=>$type=='company'?\App\Enum\ServiceTypeEnum::BUSINESS_ACCELERATOR:\App\Enum\ServiceTypeEnum::BUSINESS_ACCELERATOR_INDIVIDUAL])

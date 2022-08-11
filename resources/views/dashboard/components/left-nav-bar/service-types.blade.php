@php  $services = \App\Services\PersonService::hasRole(\App\Enum\RoleEnum::SUPER_ADMIN)?\App\Enum\ServiceTypeEnum::getAdminServices():\App\Enum\ServiceTypeEnum::getBAServices();  @endphp
@foreach($services as $service)
    <li>
        <a href="{{ route('dashboard.services.index',['type'=>$service]) }}">
            {!! \App\Enum\ServiceTypeEnum::getTranslationKeyBy($service) !!}
        </a>
    </li>
@endforeach

@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.services.create','is_create'=>true,'extra'=>['type'=>request()->query('type')]])
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        @php
                           $services = \App\Services\PersonService::hasRole(\App\Enum\RoleEnum::SUPER_ADMIN)?\App\Enum\ServiceTypeEnum::getBAServices():\App\Enum\ServiceTypeEnum::getClientServices();
                        @endphp
                        @foreach($services as  $service)
                            <li class="nav-item">
                                <a class="nav-link {{$service==request()->query('type')?'active':''}}"
                                   href="{{ route('dashboard.services.index',['type'=>$service]) }}"
                                   aria-selected="true">
                                    {{ \App\Enum\ServiceTypeEnum::getTranslationKeyBy($service) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active p-3">
                            <table class="table table-bordered table-hover">
                                @include('dashboard.components.general.table-headings',['headings'=>App\Enum\TableHeadings\ServiceManagement\ServiceTableHeading::getTranslationKeys()])
                                <tbody>
                                @include('dashboard.services.list')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

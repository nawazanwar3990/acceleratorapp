@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @if(\Illuminate\Support\Facades\Auth::user()->hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                    @include('dashboard.components.general.form-list-header',['url'=>'dashboard.services.create','is_create'=>true])
                @endif
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        @foreach(\App\Enum\ServiceTypeEnum::getTranslationKeys() as  $key=>$value)
                            <li class="nav-item">
                                <a class="nav-link {{$key==request()->query('type')?'active':''}}"
                                   href="{{ route('dashboard.services.index',['type'=>$key]) }}"
                                   aria-selected="true">
                                    {{ $value }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active p-3">
                            <table class="table table-bordered table-hover">
                                @include('dashboard.components.general.table-headings',['headings'=>App\Enum\TableHeadings\ServiceManagement\ServiceTableHeading::getTranslationKeys()])
                                <tbody>
                                @include('dashboard.service-management.services.list')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

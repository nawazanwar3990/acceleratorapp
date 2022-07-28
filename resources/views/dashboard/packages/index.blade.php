@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.packages.create','is_create'=>true,'extra'=>['type'=>request()->query('type')]])
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        @foreach(\App\Enum\PackageTypeEnum::getTranslationKeys() as  $key=>$value)
                            <li class="nav-item">
                                <a class="nav-link {{$key==request()->query('type')?'active':''}}"
                                   href="{{ route('dashboard.packages.index',['type'=>$key]) }}"
                                   aria-selected="true">
                                    {{ $value }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content tabcontent-border">
                        <div class="tab-pane active p-3">
                            <table class="table table-bordered table-hover">
                                @include('dashboard.components.general.table-headings',['headings'=>\App\Enum\TableHeadings\SubscriptionManagement\PackageTableHeading::getTranslationKeys()])
                                <tbody>
                                @include('dashboard.packages.list')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('dashboard.components.general.form-list-header',['url'=>'dashboard.packages.create','is_create'=>true,'extra'=>['payment'=>$payment,'type'=>$type]])
                <div class="card-body">
                    <div class="vtabs customvtab">
                        <ul class="nav nav-tabs tabs-vertical" role="tablist">
                            @foreach(\App\Enum\PaymentTypeProcessEnum::getTranslationKeys() as  $key=>$value)
                                <li class="nav-item">
                                    <a class="nav-link {{$key==$payment?'active':''}}"
                                       href="{{ route('dashboard.packages.index',['payment'=>$key]) }}"
                                       aria-selected="true">
                                        {{ $value }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active p-3">
                                <ul class="nav nav-tabs" role="tablist">
                                    @foreach(\App\Enum\PackageTypeEnum::getTranslationKeys() as  $package_key=>$package_value)
                                        <li class="nav-item">
                                            <a class="nav-link {{$package_key==$type?'active':''}}"
                                               href="{{ route('dashboard.packages.index',['payment'=>$payment,'type'=>$package_key]) }}"
                                               aria-selected="true">
                                                {{ $package_value }}
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
            </div>
        </div>
    </div>
@endsection

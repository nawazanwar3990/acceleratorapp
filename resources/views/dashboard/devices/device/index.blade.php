@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header',['url'=>'dashboard.devices.create','is_create'=>true])
                <div class="card-body" style="overflow-x:auto">
                    <table class="table table-bordered table-hover">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\RealEstate\Devices\DeviceEnum::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.devices.device.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

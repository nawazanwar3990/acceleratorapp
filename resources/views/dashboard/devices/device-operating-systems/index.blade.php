@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow-none pt-0">
                @include('components.General.form-list-header',['url'=>'dashboard.device-operating-systems.create','is_create'=>true])
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        @include('components.General.table-headings',['headings'=>\App\Enum\TableHeadings\RealEstate\Devices\DeviceOperatingSystemEnum::getTranslationKeys()])
                        <tbody>
                        @include('dashboard.devices.device-operating-systems.list')
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.dashboard')
@section('css-before')
@endsection

@section('css-after')
    <style>
        .card {
            border-top: none !important;
        }
    </style>
@endsection

@section('content')

    <div class="row g-0">
        <div class="col-lg-3 col-md-6">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icons-Home-Window"></i></h3>
                                    <p class="text-muted">{{ __('general.total_floors') }}</p>
                                </div>
                                <div class="ms-auto">
                                    <h2 class="counter text-primary">
                                        <a href="{{ route('dashboard.floors.index') }}" target="_blank" class="link display-5 ms-auto">
                                            {{ \App\Services\FloorService::total_floors() }}
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="icons-Home-4"></i></h3>
                                    <p class="text-muted">{{ __('general.total_offices') }}</p>
                                </div>
                                <div class="ms-auto">
                                    <h2 class="counter text-primary">
                                        <a href="" target="_blank" class="link display-5 ms-auto">
                                            {{ \App\Services\OfficeService::total_offices() }}
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('inner-script-files')

@endsection

@section('innerScript')
    <script>

    </script>
@endsection

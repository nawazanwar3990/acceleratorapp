@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $floor->name }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="fs-13">{{__('general.name')}}</th>
                                    <th class="fs-13">{{__('general.sitting_capacity')}}</th>
                                    <th class="fs-13">{{__('general.action')}}</th>
                                </tr>
                                </thead>
                                @if(count($floor->offices)>0)
                                    @foreach($floor->offices as $office)
                                        <tr>
                                            <td>
                                                {{ $office->name }}
                                            </td>
                                            <td>
                                                {{ $office->sitting_capacity }}
                                            </td>
                                            <td>
                                                @include('dashboard.working-spaces.components.office-action')
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Essential Information</h5>
                            <table class="table no-border">
                                <tbody class="text-dark">
                                <tr>
                                    <td>{{__('general.building_name')}}</td>
                                    <td>
                                        @isset($floor->building)
                                            {{ $floor->building->name  }}
                                        @else
                                            --
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>{{__('general.floor_name')}}</td>
                                    <td>{{$floor->name}}</td>
                                </tr>
                                <tr>
                                    <td>{!!__('general.floor_type') !!}</td>
                                    <td>
                                        {{ $floor->type->name??'' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{!! __('general.no_of_offices') !!}</td>
                                    <td>{{$floor->no_of_offices}}</td>
                                </tr>
                                <tr>
                                    <td>{!! __('general.length_ft') !!}</td>
                                    <td>{{$floor->length}}</td>
                                </tr>
                                <tr>
                                    <td>{!!__('general.width_ft') !!}</td>
                                    <td>{{$floor->width}}</td>
                                </tr>
                                <tr>
                                    <td>{!! __('general.saleable_area_sft') !!}</td>
                                    <td>{{$floor->area}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('dashboard.working-spaces.components.scripts')

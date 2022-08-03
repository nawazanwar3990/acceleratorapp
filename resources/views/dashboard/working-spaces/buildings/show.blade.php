@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">All Floors of {{ $building->name }}</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>{{__('general.floor_name')}}</th>
                                    <th>{{__('general.offices_detail')}}</th>
                                </tr>
                                </thead>
                                @if(count($building->floors)>0)
                                    @foreach($building->floors as $floor)
                                        <tbody>
                                        <tr>
                                            <td>
                                                {{ $floor->name }}
                                            </td>
                                            <td>
                                                @if(count($floor->offices)>0)
                                                    <div class="offices_holder">
                                                        <table class="table table-bordered mt-2">
                                                            <thead>
                                                            <tr>
                                                                <th class="fs-13">{{__('general.office_name')}}</th>
                                                                <th class="fs-13">{{__('general.sitting_capacity')}}</th>
                                                                <th class="fs-13">{{__('general.action')}}</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
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
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                        </tbody>
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
                                    <td>{{__('general.name')}}</td>
                                    <td>{{$building->name}}</td>
                                </tr>
                                <tr>
                                    <td>{!! __('general.length_ft') !!}</td>
                                    <td>{{$building->length}}</td>
                                </tr>
                                <tr>
                                    <td>{!!__('general.width_ft') !!}</td>
                                    <td>{{$building->width}}</td>
                                </tr>
                                <tr>
                                    <td>{!! __('general.saleable_area_sft') !!}</td>
                                    <td>{{$building->area}}</td>
                                </tr>
                                <tr>
                                    <td>{{__('general.building_type')}}</td>
                                    <td> @if($building->building_type)
                                            {{ \App\Services\BuildingService::buildingTypesForDropdown($building->building_type)  }}
                                        @else
                                        @endif</td>
                                </tr>
                                <tr>
                                    <td>{{__('general.entry_gates')}}</td>
                                    <td> @if($building->entry_gates)
                                            {{ \App\Services\BuildingService::buildingEntryGatesForDropdown($building->entry_gates)  }}
                                        @else
                                        @endif</td>
                                </tr>
                                <tr>
                                    <td>{{__('general.no_of_floors')}}</td>
                                    <td>{{$building->no_of_floors}}</td>
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

@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    @if(count($office->plans)>0)
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ __('general.plans') }} of {{ $office->name }}</h5>
                            </div>
                            <div class="card-body">
                                <table class="table custom-datatable table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">{{__('general.name')}}</th>
                                        <th scope="col">{{__('general.duration')}}</th>
                                        <th scope="col">{{__('general.price')}}</th>
                                        <th scope="col">{{__('general.basic_service')}}</th>
                                        <th scope="col">{{__('general.additional_service')}}</th>
                                    </tr>
                                    </thead>
                                    @forelse($office->plans as $plan)
                                        <tr>
                                            <td>{{ $plan->name }}</td>
                                            <td>
                                                {{ $plan->duration }} {{trans('general.months')}}
                                            </td>
                                            <td>
                                                {{ $plan->price }} {{ \App\Services\GeneralService::get_default_currency() }}
                                            </td>
                                            <td>
                                                @if(count($plan->basic_services))
                                                    <ul class="list-group list-group-flush bg-transparent">
                                                        @foreach($plan->basic_services as $service)
                                                            <li class="list-group-item py-0 border-0  bg-transparent px-0">
                                                                <i class="bx bx-check text-success"></i> <small><strong
                                                                        class="text-infogit ">{{ $service->name }}
                                                                </small>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </td>
                                            <td>
                                                @if(count($plan->additional_services))
                                                    <ul class="list-group list-group-flush bg-transparent">
                                                        @foreach($plan->additional_services as $service)
                                                            <li class="list-group-item py-0 border-0  bg-transparent px-0">
                                                                <i class="bx bx-check text-success"></i> <small><strong
                                                                        class="text-infogit ">{{ $service->name }}
                                                                </small>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </table>
                            </div>
                        </div>
                    @endif
                    @if(count($office->subscriptions)>0)
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ __('general.subscriptions') }} of {{ $office->name }}</h5>
                            </div>
                            <div class="card-body">
                                <table class="table custom-datatable table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">{{ __('general.customer') }}</th>
                                        <th scope="col">{{__('general.plan')}}</th>
                                        <th scope="col">{{__('general.price')}}</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Expire At</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($office->subscriptions as $subscription)
                                        <tr>
                                            <td>
                                                @isset($subscription->subscribed)
                                                    {{ $subscription->subscribed->getFullName() }}
                                                @else
                                                    --
                                                @endisset
                                            </td>
                                            <td>
                                                {{ $subscription->plan->name??null}}
                                            </td>
                                            <td>
                                                {{ $subscription->price }} {{ \App\Services\GeneralService::get_default_currency() }}
                                            </td>
                                            <td>
                                                {{ $subscription->created_at }}
                                            </td>
                                            <td>
                                                {{ $subscription->expire_date }}
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Essential Information</h5>
                            <table class="table custom-datatable no-border">
                                <tbody class="text-dark">
                                <tr>
                                    @isset($office->building)
                                        <td>{{__('general.building_name')}}</td>
                                        <td>
                                            {{ $office->building->name  }}
                                        </td>
                                    @endisset
                                </tr>
                                <tr>
                                    @isset($office->floor)
                                        <td>{{__('general.floor_name')}}</td>
                                        <td>
                                            {{ $office->floor->name  }}
                                        </td>
                                    @endisset
                                </tr>
                                <tr>
                                    <td>{!!__('general.office_type') !!}</td>
                                    <td>
                                        {{ $office->type->name??'' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>{!! __('general.sitting_capacity') !!}</td>
                                    <td>{{$office->sitting_capacity}}</td>
                                </tr>
                                <tr>
                                    <td>{!! __('general.length_ft') !!}</td>
                                    <td>{{$office->length}}</td>
                                </tr>
                                <tr>
                                    <td>{!!__('general.width_ft') !!}</td>
                                    <td>{{$office->width}}</td>
                                </tr>
                                <tr>
                                    <td>{!! __('general.saleable_area_sft') !!}</td>
                                    <td>{{$office->area}}</td>
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

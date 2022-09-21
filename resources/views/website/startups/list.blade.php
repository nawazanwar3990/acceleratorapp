<style>
    .location-icon{
        width: 100%;
        max-width: 30px;
    }
</style>

<div class="card card-shadow px-5 py-3  rounded-3">
        <div>
            <img class="card-img-top circle mb-2" src="{{ asset($record->logo[0]->filename??'uploads/default_startup.png') }}"
                 alt=" @if($startup_for==\App\Enum\StartUpForEnum::BA AND $startup_type==\App\Enum\StartUpTypeEnum::INDIVIDUAL)
                {{ $record->user->getFullName() }}
            @elseif($startup_for==\App\Enum\StartUpForEnum::FREELANCER AND $startup_type==\App\Enum\StartUpTypeEnum::INDIVIDUAL)
                {{ $record->user->getFullName() }}
            @elseif($startup_for==\App\Enum\StartUpForEnum::BA AND $startup_type==\App\Enum\StartUpTypeEnum::COMPANY)
                {{ $record->company_name }}
            @elseif($startup_for==\App\Enum\StartUpForEnum::FREELANCER AND $startup_type==\App\Enum\StartUpTypeEnum::COMPANY)
                {{ $record->company_name }}
            @elseif($startup_for==\App\Enum\StartUpForEnum::MENTOR)
                {{ $record->user->getFullName() }}
            @endif">
        </div>
        <div class="card-title">
            <h6 class="card-title text-center title-card">
                @if($startup_for==\App\Enum\StartUpForEnum::BA AND $startup_type==\App\Enum\StartUpTypeEnum::INDIVIDUAL)
                    {{ $record->user->getFullName() }}
                @elseif($startup_for==\App\Enum\StartUpForEnum::FREELANCER AND $startup_type==\App\Enum\StartUpTypeEnum::INDIVIDUAL)
                    {{ $record->user->getFullName() }}
                @elseif($startup_for==\App\Enum\StartUpForEnum::BA AND $startup_type==\App\Enum\StartUpTypeEnum::COMPANY)
                    {{ $record->company_name }}
                @elseif($startup_for==\App\Enum\StartUpForEnum::FREELANCER AND $startup_type==\App\Enum\StartUpTypeEnum::COMPANY)
                    {{ $record->company_name }}
                @elseif($startup_for==\App\Enum\StartUpForEnum::MENTOR)
                    {{ $record->user->getFullName() }}
                @endif
            </h6>
        </div>
        <div class="card-body bg-transparent px-0 py-0 text-center">
            <ul class="ba-company-ul">
                @foreach($record->user->subscription->package->services as $service)
                    @if($loop->index<3)
                        @if($service->slug=='incubator')
                            @if($service->pivot->building_limit>0)
                                <li class="true">
                                    <svg class="svg-adjust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         fill="#01023B">
                                        <path
                                            d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                    </svg>
                                    {{ trans('general.buildings') }}
                                </li>
                            @else
                                <li class="false">
                                    <svg class="svg-adjust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         fill="#F684B2">
                                        <path
                                            d="M175 175C184.4 165.7 199.6 165.7 208.1 175L255.1 222.1L303 175C312.4 165.7 327.6 165.7 336.1 175C346.3 184.4 346.3 199.6 336.1 208.1L289.9 255.1L336.1 303C346.3 312.4 346.3 327.6 336.1 336.1C327.6 346.3 312.4 346.3 303 336.1L255.1 289.9L208.1 336.1C199.6 346.3 184.4 346.3 175 336.1C165.7 327.6 165.7 312.4 175 303L222.1 255.1L175 208.1C165.7 199.6 165.7 184.4 175 175V175zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                    </svg>
                                    {{ trans('general.buildings') }}
                                </li>
                            @endif
                            @if($service->pivot->floor_limit>0)
                                <li class="true">
                                    <svg class="svg-adjust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         fill="#01023B">
                                        <path
                                            d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                    </svg>
                                    {{ trans('general.floors') }}
                                </li>
                            @else
                                <li class="false">
                                    <svg class="svg-adjust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         fill="#F684B2">
                                        <path
                                            d="M175 175C184.4 165.7 199.6 165.7 208.1 175L255.1 222.1L303 175C312.4 165.7 327.6 165.7 336.1 175C346.3 184.4 346.3 199.6 336.1 208.1L289.9 255.1L336.1 303C346.3 312.4 346.3 327.6 336.1 336.1C327.6 346.3 312.4 346.3 303 336.1L255.1 289.9L208.1 336.1C199.6 346.3 184.4 346.3 175 336.1C165.7 327.6 165.7 312.4 175 303L222.1 255.1L175 208.1C165.7 199.6 165.7 184.4 175 175V175zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                    </svg>
                                    {{ trans('general.offices') }}
                                </li>
                            @endif
                            @if($service->pivot->office_limit>0)
                                <li class="true">
                                    <svg class="svg-adjust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         fill="#01023B">
                                        <path
                                            d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                    </svg>
                                    {{ trans('general.offices') }}
                                </li>
                            @else
                                <li class="false">
                                    <svg class="svg-adjust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         fill="#F684B2">
                                        <path
                                            d="M175 175C184.4 165.7 199.6 165.7 208.1 175L255.1 222.1L303 175C312.4 165.7 327.6 165.7 336.1 175C346.3 184.4 346.3 199.6 336.1 208.1L289.9 255.1L336.1 303C346.3 312.4 346.3 327.6 336.1 336.1C327.6 346.3 312.4 346.3 303 336.1L255.1 289.9L208.1 336.1C199.6 346.3 184.4 346.3 175 336.1C165.7 327.6 165.7 312.4 175 303L222.1 255.1L175 208.1C165.7 199.6 165.7 184.4 175 175V175zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                    </svg>
                                    {{ trans('general.offices') }}
                                </li>
                            @endif
                        @else
                            <li class="  @if($service->pivot->limit>0) true @else false @endif">
                                @if($service->pivot->limit>0)
                                    <svg class="svg-adjust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         fill="#01023B">
                                        <path
                                            d="M243.8 339.8C232.9 350.7 215.1 350.7 204.2 339.8L140.2 275.8C129.3 264.9 129.3 247.1 140.2 236.2C151.1 225.3 168.9 225.3 179.8 236.2L224 280.4L332.2 172.2C343.1 161.3 360.9 161.3 371.8 172.2C382.7 183.1 382.7 200.9 371.8 211.8L243.8 339.8zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                    </svg>
                                @else
                                    <svg class="svg-adjust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         fill="#F684B2">
                                        <path
                                            d="M175 175C184.4 165.7 199.6 165.7 208.1 175L255.1 222.1L303 175C312.4 165.7 327.6 165.7 336.1 175C346.3 184.4 346.3 199.6 336.1 208.1L289.9 255.1L336.1 303C346.3 312.4 346.3 327.6 336.1 336.1C327.6 346.3 312.4 346.3 303 336.1L255.1 289.9L208.1 336.1C199.6 346.3 184.4 346.3 175 336.1C165.7 327.6 165.7 312.4 175 303L222.1 255.1L175 208.1C165.7 199.6 165.7 184.4 175 175V175zM512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0C397.4 0 512 114.6 512 256zM256 48C141.1 48 48 141.1 48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48z"></path>
                                    </svg>
                                @endif
                                {{ $service->name }}
                            </li>
                        @endif
                    @endif
                @endforeach
            </ul>
            @if($startup_for !==\App\Enum\StartUpForEnum::MENTOR)
                <a class="read-more btn px-3 py-2 mt-3 rounded-2"
                   href="{{ route('website.startups.services.index',[$startup_for,$startup_type,$record->user->id]) }}">
                    View Services
                </a>
            @else
                <a class="read-more btn px-3 py-2 mt-3 rounded-2"
                   href="{{ route('website.startups.services.index',[$startup_for,'individual',$record->user->id]) }}">
                    View Services
                </a>
            @endif
        </div>
    </div>

<div class="card mt-3 shadow py-3  rounded-3">
    <div class="card-body">
        <div class="col-md-12 text-center">
            <img src="{{asset('uploads/ot_logo.png')}}" style="width: 100%; max-width: 200px ">
            <hr>
        </div>
        <div class="col-md-12">
            <h4 class="text-center fw-bold">Optimum Tech</h4>
            <div class="row social-icon">
                <div class="col-3 text-center">
                    <i class="fa fa-phone" style="font-size: 20px;transform: rotate(100deg)"></i>
                </div>
                <div class="col-9 text-center">
                    <p>+92 300 111 444 9992</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div>
            <a href="#">
                <svg class="location-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <path fill="#8c9eff" d="M25.7 11.49a10.49 10.49 0 0 0-2.84-6.63 9.71 9.71 0 0 0-13.72 0 10.49 10.49 0 0 0-2.84 6.63c-.27 3.13 1.22 5.8 2.78 8.27.37.58 3.64 5.78 5.22 8.35a2 2 0 0 0 1.7.95 2 2 0 0 0 1.7-.95c1.58-2.57 4.85-7.77 5.22-8.35 1.56-2.47 3.08-5.14 2.78-8.27Z"/><path fill="#5f7cf9" d="M17.7 28.11c1.58-2.57 4.85-7.77 5.22-8.35 1.56-2.47 3-5.14 2.78-8.27a10.49 10.49 0 0 0-2.84-6.63A9.64 9.64 0 0 0 16 2v27a2 2 0 0 0 1.7-.89Z"/><circle cx="16" cy="12" r="4" fill="#5f7cf9"/>
                    <path fill="#4062ed" d="M20 12a4 4 0 0 0-4-4v8a4 4 0 0 0 4-4Z"/>
                </svg>
            </a>
        </div>
    </div>
</div>

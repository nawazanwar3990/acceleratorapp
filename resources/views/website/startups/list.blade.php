<div class="card mt-3 shadow rounded-3" style="5px 5px 5px 5px rgb(210 209 209 / 75%)">
    <div class="card-body">
        <div class="col-md-12 text-center">
            <img style="width: 100%; max-width: 200px"
                 onerror="this.src='{{ asset('uploads/default_startup.png') }}'"
                 src="{{ asset($record->logo[0]->filename??'uploads/default_startup.png') }}"
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
            <hr>
        </div>
        <div class="col-md-12">
            <h3 class="text-center fw-bold text-uppercase">
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
            </h3>
            <p class="text-center pt-2 h-70px overflow-hidden">
                @if($record->user->about_us)
                    {!! $record->user->about_us !!}
                @endif
            </p>
            <div class="text-center">
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
    </div>
    <div class="card-footer h-66px">
        <div class="row">
            <div class="col-sm-12 col-sm-4 col-xs-12 align-self-center text-center">
                @if($record->user->social_accounts)
                    <div class="footer-buttons py-2">
                        @foreach($record->user->social_accounts as $account_key => $account_value)
                            @if($account_value)
                                <a class="btn btn-primary btn-xs btn-circle mx-2"
                                   href="{{ $account_value }}"
                                   style="background-color: #01023B!important;">
                                    {!! \App\Enum\SocialNavEnum::getIcon($account_key) !!}
                                </a>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

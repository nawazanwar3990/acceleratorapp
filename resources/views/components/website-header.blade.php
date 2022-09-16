<nav class="navbar navbar-marketing navbar-expand-lg bg-transparent navbar-dark fixed-top"
     style="background-color: rgb(232, 228, 228)!important;">
    <div class="container">
        <a class="navbar-brand" href="javascript:void(0)">
            <img style="height: 53px;" src="{{ asset($cPage->layout->header_logo) }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            @if($cPage->layout->menu_type = 'simple')
                <ul class="navbar-nav ms-auto">
                    @if(count(\App\Services\CMS\PageService::getPagesForMenus())>0)
                        @foreach(\App\Services\CMS\PageService::getPagesForMenus() as $page)
                            <li class="nav-item">
                                @if($page->code=='home')
                                    <a class="nav-link" style="color: #01023B!important;"
                                       href="{{ route('website.index') }}">
                                        {{$page->name}}
                                    </a>
                                @elseif($page->code=='startup')
                                    <a class="nav-link" style="color: #01023B!important;"
                                       href="{{ route('website.startups.index',[\App\Enum\StartUpForEnum::BA,\App\Enum\StartUpTypeEnum::INDIVIDUAL]) }}">
                                        {{$page->name}}
                                    </a>
                                @else
                                    <a class="nav-link" style="color: #01023B!important;"
                                       href="{{ route('website.pages.index',['type'=>$page->code]) }}">
                                        {{$page->name}}
                                    </a>
                                @endif
                            </li>
                        @endforeach
                    @endif
                </ul>
            @endif
            <div class="d-flex">
                @guest
                    <div class="navbar-item">
                        <a href="{{ route('login') }}"
                           class="text-white mx-1" style="color: #01023B!important;">
                            {{ trans('general.login') }}
                        </a>
                    </div>
                @else
                    <div class="navbar-item">
                        <a href="{{ route('dashboard.index') }}"
                           class="text-white mx-1" style="color: #01023B!important;">
                            {{ trans('general.dashboard') }}
                        </a>
                        <button
                            class="text-white mx-1 border-0 bg-transparent"
                            href="javascript:void(0);" onclick="LogoutConfirm();" style="color: #01023B!important;">
                            <i class="fa fa-power-off"></i> <span>{{__('general.logout')}}</span>
                        </button>
                        <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                            @csrf
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>


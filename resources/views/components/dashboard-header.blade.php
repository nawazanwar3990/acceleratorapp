<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('dashboard.index') }}">
                <b>
                    <img src="{{ asset('images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                    <img src="{{ asset('images/logo-light-icon.png') }}" alt="homepage" class="light-logo" />
                </b>
                <span>
                     <img src="{{ asset('images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                     <img src="{{ asset('images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
                </span>
            </a>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item mt-2"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item mt-2"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                <li class="nav-item mt-2 dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>{{ session()->get('bName')  }} <i class="fa fa-angle-down"></i></span> </a>
                    <div class="dropdown-menu dropdown-menu-end animated">
                        @foreach(\App\Services\RealEstate\BuildingService::getBuildingsOfBusiness() as $id => $name)
                            <button type="button" class="dropdown-item" onclick="changeBuilding({{ $id }});" >{{ $name }}</button>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item mt-2">
                    <form action="{{ route('dashboard.search-flat') }}" class="app-search d-none d-md-block d-lg-block">
                        <input type="text" name="search" class="form-control" placeholder="Flat Name, Number & Enter">
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset(\Illuminate\Support\Facades\Auth::user()->photo ?? 'theme/images/users/1.jpg') }}" alt="user" class="">
                        <span class="hidden-md-down">{{ \Illuminate\Support\Facades\Auth::user()->full_name }} <i class="fa fa-angle-down"></i></span> </a>
                    <div class="dropdown-menu dropdown-menu-end animated flipInY">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item" href="javascript:void(0);" onclick="LogoutConfirm();">
                            <i class="fa fa-power-off"></i> <span>{{__('general.logout')}}</span>
                        </button>
                        <form method="POST" action="{{ route('website.logout') }}" id="logoutForm">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

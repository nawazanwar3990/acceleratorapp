<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('dashboard.index') }}">
                <span>
                     <img src="{{ asset('images/business-accelerator-logo-white.png') }}" class="light-logo"
                          style="margin-left: 31px;" alt="homepage"/>
                </span>
            </a>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item mt-2">
                    <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                             href="javascript:void(0)"><i class="ti-menu"></i></a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                        href="javascript:void(0)"><i class="icon-menu"></i></a>
                </li>
                <li class="nav-item mt-2">
                    <form action="" class="app-search d-none d-md-block d-lg-block">
                        <label>
                            <input type="text" name="search" class="form-control"
                                   placeholder="Services, Co-Working Space....">
                        </label>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src="{{ asset(\Illuminate\Support\Facades\Auth::user()->photo ?? '/images/users/1.jpg') }}"
                            alt="user" class="">
                        <span class="hidden-md-down">{{ \Illuminate\Support\Facades\Auth::user()->full_name }} <i
                                class="fa fa-angle-down"></i></span> </a>
                    <div class="dropdown-menu dropdown-menu-end animated flipInY">
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account
                            Setting</a>
                        <div class="dropdown-divider"></div>
                        <button class="dropdown-item" href="javascript:void(0);" onclick="LogoutConfirm();">
                            <i class="fa fa-power-off"></i> <span>{{__('general.logout')}}</span>
                        </button>
                        <form method="POST" action="{{ route('logout') }}" id="logoutForm">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

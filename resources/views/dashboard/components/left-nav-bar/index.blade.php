<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark"
                       href="{{ route('dashboard.index')  }}">
                        <i class="bx bx-home"></i> <span class="hide-menu">
                        {{ trans('general.dashboard') }}
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark"
                       href="{{ route('dashboard.users.edit',[\Illuminate\Support\Facades\Auth::id()])  }}">
                        <i class="bx bx-user"></i> <span class="hide-menu">
                        {{ trans('general.profile') }}
                    </a>
                </li>
                @if(\App\Services\PersonService::hasRole(\App\Enum\RoleEnum::SUPER_ADMIN))
                    @include('dashboard.components.left-nav-bar.super-admin')
                @endif
                @if(\App\Services\PersonService::hasRole(\App\Enum\RoleEnum::BUSINESS_ACCELERATOR))
                    @include('dashboard.components.left-nav-bar.ba')
                @endif
                @if(\App\Services\PersonService::hasRole(\App\Enum\RoleEnum::FREELANCER))
                    @include('dashboard.components.left-nav-bar.freelancer')
                @endif
                @if(\App\Services\PersonService::hasRole(\App\Enum\RoleEnum::CUSTOMER))
                    @include('dashboard.components.left-nav-bar.customer')
                @endif
            </ul>
        </nav>
    </div>
</aside>

<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
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

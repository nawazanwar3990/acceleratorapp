<header style="padding: 20px 0;">
    <div class="navbar-fixed">
        <div class="fix-width">
            <!-- Start Header -->
            <div class="header">
                <nav class="navbar navbar-expand-md navbar-light bg-white">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/elite-admin-logo.png') }}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @guest
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item mx-1">
                                    <a href="{{ route('login') }}"
                                       class="btn btn-primary btn-rounded cs-btn text-white">{{ trans('general.login') }}</a>
                                </li>
                                <li class="nav-item mx-1">
                                    <a href="{{ route('register') }}"
                                       class="btn btn-primary btn-rounded cs-btn text-white">{{ trans('general.register') }}</a>
                                </li>
                            </ul>
                        @else
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item mx-1">
                                    <a href="{{ route('dashboard.index') }}"
                                       class="btn btn-primary btn-rounded cs-btn text-white">{{ trans('general.dashboard') }}</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                <li class="nav-item mx-1">
                                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary btn-rounded cs-btn text-white">{{ trans('general.logout') }}</a>
                                </li>
                            </ul>
                        @endguest
                    </div>
                </nav>
            </div>
            <!-- End Header -->
        </div>
    </div>
</header>

<div class="navbar-placeholder" style="height: 64.3906px;">
    <nav class="navbar navbar-wrapper navbar-fade is-transparent navbar-light">
        <div class="container">
            <!-- Brand -->
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img class="switcher-logo" src="{{ asset($cPage->layout->header_logo) }}" alt="">
                </a>
                <!-- Sidebar Trigger -->
                <a id="navigation-trigger" class="navbar-item hamburger-btn" href="javascript:void(0);">
                        <span class="menu-toggle">
                          <span class="icon-box-toggle">
                              <span class="rotate">
                                  <i class="icon-line-top"></i>
                                  <i class="icon-line-center"></i>
                                  <i class="icon-line-bottom"></i>
                              </span>
                        </span>
                        </span>
                </a>
                <!-- Responsive toggle -->
                <div class="custom-burger" data-target="">
                    <a id="" class="responsive-btn" href="javascript:void(0);">
                            <span class="menu-toggle">
                              <span class="icon-box-toggle">
                                  <span class="rotate">
                                      <i class="icon-line-top"></i>
                                      <i class="icon-line-center"></i>
                                      <i class="icon-line-bottom"></i>
                                  </span>
                            </span>
                            </span>
                    </a>
                </div>
                <!-- /Responsive toggle -->
            </div>

            <!-- Navbar menu -->
            <div class="navbar-menu">
                <!-- Navbar Start -->
                <div class="navbar-start">
                    @if($cPage->layout->menu_type = 'simple')
                        @if(count(\App\Services\CMS\PageService::getPagesForMenus())>0)
                            @foreach(\App\Services\CMS\PageService::getPagesForMenus() as $page)
                                @if($page->code=='home')
                                    <a class="navbar-item is-slide is-centered-tablet"
                                       href="{{ route('website.index') }}">
                                        {{$page->code}}
                                    </a>
                                @else
                                    <a class="navbar-item is-slide is-centered-tablet"
                                       href="{{ route('website.pages.index',$page->code) }}">
                                        {{$page->code}}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @else
                    @endif
                </div>
                <!-- Navbar end -->
                <div class="navbar-end">
                    @guest
                        <div class="navbar-item">
                            <a href="{{ route('login') }}"
                               class="button button-signup btn-outlined is-bold btn-align rounded raised light-btn">
                                {{ trans('general.login') }}
                            </a>
                        </div>
                        <div class="navbar-item">
                            <a onclick="apply_registration('{{ json_encode(\App\Enum\RegisterTypeEnum::getTranslationKeys()) }}')"
                               class="button button-signup btn-outlined is-bold btn-align rounded raised light-btn">
                                {{ trans('general.signup') }}
                            </a>
                        </div>
                    @else
                        <div class="navbar-item">
                            <a href="{{ route('dashboard.index') }}"
                               class="button button-signup btn-outlined is-bold btn-align rounded raised light-btn">
                                {{ trans('general.dashboard') }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</div>
